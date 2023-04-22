<?php

namespace Kirby\Cms;

use Closure;
use Kirby\Exception\NotFoundException;
use Kirby\Filesystem\F;
use Kirby\Toolkit\Controller;

/**
 * Manages and loads all collections
 * in site/collections, which can then
 * be reused in controllers, templates, etc
 *
 * This class is mainly used in the `$kirby->collection()`
 * method to provide easy access to registered collections
 *
 * @package   Kirby Cms
 * @author    Bastian Allgeier <bastian@getkirby.com>
 * @link      https://getkirby.com
 * @copyright Bastian Allgeier
 * @license   https://getkirby.com/license
 */
class Collections
{
	/**
	 * Each collection is cached once it
	 * has been called, to avoid further
	 * processing on sequential calls to
	 * the same collection.
	 */
	protected array $cache = [];

	/**
	 * Store of all collections
	 */
	protected array $collections = [];

	/**
	 * Magic caller to enable something like
	 * `$collections->myCollection()`
	 */
	public function __call(string $name, array $arguments = []): Collection|null
	{
		return $this->get($name, ...$arguments);
	}

	/**
	 * Loads a collection by name if registered
	 */
	public function get(string $name, array $data = []): Collection|string|null
	{
		// if not yet loaded
		$this->collections[$name] ??= $this->load($name);

		// if not yet cached
		if (
			isset($this->cache[$name]) === false ||
			$this->cache[$name]['data'] !== $data
		) {
			$controller = new Controller($this->collections[$name]);
			$this->cache[$name] = [
				'result' => $controller->call(null, $data),
				'data'   => $data
			];
		}

		// return cloned object
		if (is_object($this->cache[$name]['result']) === true) {
			return clone $this->cache[$name]['result'];
		}

		return $this->cache[$name]['result'];
	}

	/**
	 * Checks if a collection exists
	 */
	public function has(string $name): bool
	{
		if (isset($this->collections[$name]) === true) {
			return true;
		}

		try {
			$this->load($name);
			return true;
		} catch (NotFoundException) {
			return false;
		}
	}

	/**
	 * Loads collection from php file in a
	 * given directory or from plugin extension.
	 *
	 * @throws \Kirby\Exception\NotFoundException
	 */
	public function load(string $name): mixed
	{
		$kirby = App::instance();

		// first check for collection file
		$file = $kirby->root('collections') . '/' . $name . '.php';

		if (is_file($file) === true) {
			$collection = F::load($file, allowOutput: false);

			if ($collection instanceof Closure) {
				return $collection;
			}
		}

		// fallback to collections from plugins
		$collections = $kirby->extensions('collections');

		return $collections[$name] ??
			throw new NotFoundException('The collection cannot be found');
	}
}
