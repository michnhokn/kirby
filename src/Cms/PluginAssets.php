<?php

namespace Kirby\Cms;

use Kirby\Filesystem\Dir;
use Kirby\Filesystem\F;
use Kirby\Http\Response;

/**
 * Plugin assets are automatically copied/linked
 * to the media folder, to make them publicly
 * available. This class handles the magic around that.
 *
 * @package   Kirby Cms
 * @author    Bastian Allgeier <bastian@getkirby.com>
 * @link      https://getkirby.com
 * @copyright Bastian Allgeier
 * @license   https://getkirby.com/license
 */
class PluginAssets
{
	/**
	 * Clean old/deprecated assets on every resolve
	 */
	public static function clean(string $pluginName): void
	{
		if ($plugin = App::instance()->plugin($pluginName)) {
			$root   = $plugin->root();
			$media  = $plugin->mediaRoot();
			$assets = Dir::index($media, true);

			foreach ($assets as $asset) {
				$original = $root . '/' . $asset;

				if (file_exists($original) === false) {
					$assetRoot = $media . '/' . $asset;

					if (is_file($assetRoot) === true) {
						F::remove($assetRoot);
					} else {
						Dir::remove($assetRoot);
					}
				}
			}
		}
	}

	/**
	 * Create a symlink for a plugin asset and
	 * return the public URL
	 */
	public static function resolve(
		string $pluginName,
		string $path
	): Response|null {
		if ($plugin = App::instance()->plugin($pluginName)) {
			$assets = $plugin->assets();

			if ($asset = $assets[$path] ?? null) {
				if (F::exists($asset, $plugin->root()) === true) {
					// do some spring cleaning for older files
					static::clean($pluginName);

					$target = $plugin->mediaRoot() . '/' . $path;

					// create a symlink if possible
					F::link($asset, $target, 'symlink');

					// return the file response
					return Response::file($asset);
				}
			}
		}

		return null;
	}
}
