<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Composer\\Semver\\Comparator' => $vendorDir . '/composer/semver/src/Comparator.php',
    'Composer\\Semver\\CompilingMatcher' => $vendorDir . '/composer/semver/src/CompilingMatcher.php',
    'Composer\\Semver\\Constraint\\Bound' => $vendorDir . '/composer/semver/src/Constraint/Bound.php',
    'Composer\\Semver\\Constraint\\Constraint' => $vendorDir . '/composer/semver/src/Constraint/Constraint.php',
    'Composer\\Semver\\Constraint\\ConstraintInterface' => $vendorDir . '/composer/semver/src/Constraint/ConstraintInterface.php',
    'Composer\\Semver\\Constraint\\MatchAllConstraint' => $vendorDir . '/composer/semver/src/Constraint/MatchAllConstraint.php',
    'Composer\\Semver\\Constraint\\MatchNoneConstraint' => $vendorDir . '/composer/semver/src/Constraint/MatchNoneConstraint.php',
    'Composer\\Semver\\Constraint\\MultiConstraint' => $vendorDir . '/composer/semver/src/Constraint/MultiConstraint.php',
    'Composer\\Semver\\Interval' => $vendorDir . '/composer/semver/src/Interval.php',
    'Composer\\Semver\\Intervals' => $vendorDir . '/composer/semver/src/Intervals.php',
    'Composer\\Semver\\Semver' => $vendorDir . '/composer/semver/src/Semver.php',
    'Composer\\Semver\\VersionParser' => $vendorDir . '/composer/semver/src/VersionParser.php',
    'Kirby\\Api\\Api' => $baseDir . '/src/Api/Api.php',
    'Kirby\\Api\\Collection' => $baseDir . '/src/Api/Collection.php',
    'Kirby\\Api\\Model' => $baseDir . '/src/Api/Model.php',
    'Kirby\\Blueprint\\Collection' => $baseDir . '/src/Blueprint/Collection.php',
    'Kirby\\Blueprint\\Config' => $baseDir . '/src/Blueprint/Config.php',
    'Kirby\\Blueprint\\Extension' => $baseDir . '/src/Blueprint/Extension.php',
    'Kirby\\Blueprint\\Factory' => $baseDir . '/src/Blueprint/Factory.php',
    'Kirby\\Blueprint\\Node' => $baseDir . '/src/Blueprint/Node.php',
    'Kirby\\Blueprint\\NodeI18n' => $baseDir . '/src/Blueprint/NodeI18n.php',
    'Kirby\\Blueprint\\NodeIcon' => $baseDir . '/src/Blueprint/NodeIcon.php',
    'Kirby\\Blueprint\\NodeProperty' => $baseDir . '/src/Blueprint/NodeProperty.php',
    'Kirby\\Blueprint\\NodeString' => $baseDir . '/src/Blueprint/NodeString.php',
    'Kirby\\Blueprint\\NodeText' => $baseDir . '/src/Blueprint/NodeText.php',
    'Kirby\\Cache\\ApcuCache' => $baseDir . '/src/Cache/ApcuCache.php',
    'Kirby\\Cache\\Cache' => $baseDir . '/src/Cache/Cache.php',
    'Kirby\\Cache\\FileCache' => $baseDir . '/src/Cache/FileCache.php',
    'Kirby\\Cache\\MemCached' => $baseDir . '/src/Cache/MemCached.php',
    'Kirby\\Cache\\MemoryCache' => $baseDir . '/src/Cache/MemoryCache.php',
    'Kirby\\Cache\\NullCache' => $baseDir . '/src/Cache/NullCache.php',
    'Kirby\\Cache\\Value' => $baseDir . '/src/Cache/Value.php',
    'Kirby\\Cms\\Api' => $baseDir . '/src/Cms/Api.php',
    'Kirby\\Cms\\App' => $baseDir . '/src/Cms/App.php',
    'Kirby\\Cms\\AppCaches' => $baseDir . '/src/Cms/AppCaches.php',
    'Kirby\\Cms\\AppErrors' => $baseDir . '/src/Cms/AppErrors.php',
    'Kirby\\Cms\\AppPlugins' => $baseDir . '/src/Cms/AppPlugins.php',
    'Kirby\\Cms\\AppTranslations' => $baseDir . '/src/Cms/AppTranslations.php',
    'Kirby\\Cms\\AppUsers' => $baseDir . '/src/Cms/AppUsers.php',
    'Kirby\\Cms\\Auth' => $baseDir . '/src/Cms/Auth.php',
    'Kirby\\Cms\\Auth\\Challenge' => $baseDir . '/src/Cms/Auth/Challenge.php',
    'Kirby\\Cms\\Auth\\EmailChallenge' => $baseDir . '/src/Cms/Auth/EmailChallenge.php',
    'Kirby\\Cms\\Auth\\Status' => $baseDir . '/src/Cms/Auth/Status.php',
    'Kirby\\Cms\\Block' => $baseDir . '/src/Cms/Block.php',
    'Kirby\\Cms\\BlockConverter' => $baseDir . '/src/Cms/BlockConverter.php',
    'Kirby\\Cms\\Blocks' => $baseDir . '/src/Cms/Blocks.php',
    'Kirby\\Cms\\Blueprint' => $baseDir . '/src/Cms/Blueprint.php',
    'Kirby\\Cms\\Collection' => $baseDir . '/src/Cms/Collection.php',
    'Kirby\\Cms\\Collections' => $baseDir . '/src/Cms/Collections.php',
    'Kirby\\Cms\\ContentLock' => $baseDir . '/src/Cms/ContentLock.php',
    'Kirby\\Cms\\ContentLocks' => $baseDir . '/src/Cms/ContentLocks.php',
    'Kirby\\Cms\\Core' => $baseDir . '/src/Cms/Core.php',
    'Kirby\\Cms\\Email' => $baseDir . '/src/Cms/Email.php',
    'Kirby\\Cms\\Event' => $baseDir . '/src/Cms/Event.php',
    'Kirby\\Cms\\Fieldset' => $baseDir . '/src/Cms/Fieldset.php',
    'Kirby\\Cms\\Fieldsets' => $baseDir . '/src/Cms/Fieldsets.php',
    'Kirby\\Cms\\File' => $baseDir . '/src/Cms/File.php',
    'Kirby\\Cms\\FileActions' => $baseDir . '/src/Cms/FileActions.php',
    'Kirby\\Cms\\FileBlueprint' => $baseDir . '/src/Cms/FileBlueprint.php',
    'Kirby\\Cms\\FileModifications' => $baseDir . '/src/Cms/FileModifications.php',
    'Kirby\\Cms\\FilePermissions' => $baseDir . '/src/Cms/FilePermissions.php',
    'Kirby\\Cms\\FilePicker' => $baseDir . '/src/Cms/FilePicker.php',
    'Kirby\\Cms\\FileRules' => $baseDir . '/src/Cms/FileRules.php',
    'Kirby\\Cms\\FileVersion' => $baseDir . '/src/Cms/FileVersion.php',
    'Kirby\\Cms\\Files' => $baseDir . '/src/Cms/Files.php',
    'Kirby\\Cms\\Find' => $baseDir . '/src/Cms/Find.php',
    'Kirby\\Cms\\HasChildren' => $baseDir . '/src/Cms/HasChildren.php',
    'Kirby\\Cms\\HasFiles' => $baseDir . '/src/Cms/HasFiles.php',
    'Kirby\\Cms\\HasMethods' => $baseDir . '/src/Cms/HasMethods.php',
    'Kirby\\Cms\\HasSiblings' => $baseDir . '/src/Cms/HasSiblings.php',
    'Kirby\\Cms\\Helpers' => $baseDir . '/src/Cms/Helpers.php',
    'Kirby\\Cms\\Html' => $baseDir . '/src/Cms/Html.php',
    'Kirby\\Cms\\Ingredients' => $baseDir . '/src/Cms/Ingredients.php',
    'Kirby\\Cms\\Item' => $baseDir . '/src/Cms/Item.php',
    'Kirby\\Cms\\Items' => $baseDir . '/src/Cms/Items.php',
    'Kirby\\Cms\\Language' => $baseDir . '/src/Cms/Language.php',
    'Kirby\\Cms\\LanguageRouter' => $baseDir . '/src/Cms/LanguageRouter.php',
    'Kirby\\Cms\\LanguageRoutes' => $baseDir . '/src/Cms/LanguageRoutes.php',
    'Kirby\\Cms\\LanguageRules' => $baseDir . '/src/Cms/LanguageRules.php',
    'Kirby\\Cms\\LanguageVariable' => $baseDir . '/src/Cms/LanguageVariable.php',
    'Kirby\\Cms\\Languages' => $baseDir . '/src/Cms/Languages.php',
    'Kirby\\Cms\\Layout' => $baseDir . '/src/Cms/Layout.php',
    'Kirby\\Cms\\LayoutColumn' => $baseDir . '/src/Cms/LayoutColumn.php',
    'Kirby\\Cms\\LayoutColumns' => $baseDir . '/src/Cms/LayoutColumns.php',
    'Kirby\\Cms\\Layouts' => $baseDir . '/src/Cms/Layouts.php',
    'Kirby\\Cms\\Loader' => $baseDir . '/src/Cms/Loader.php',
    'Kirby\\Cms\\Media' => $baseDir . '/src/Cms/Media.php',
    'Kirby\\Cms\\Model' => $baseDir . '/src/Cms/Model.php',
    'Kirby\\Cms\\ModelPermissions' => $baseDir . '/src/Cms/ModelPermissions.php',
    'Kirby\\Cms\\ModelWithContent' => $baseDir . '/src/Cms/ModelWithContent.php',
    'Kirby\\Cms\\Nest' => $baseDir . '/src/Cms/Nest.php',
    'Kirby\\Cms\\NestCollection' => $baseDir . '/src/Cms/NestCollection.php',
    'Kirby\\Cms\\NestObject' => $baseDir . '/src/Cms/NestObject.php',
    'Kirby\\Cms\\Page' => $baseDir . '/src/Cms/Page.php',
    'Kirby\\Cms\\PageActions' => $baseDir . '/src/Cms/PageActions.php',
    'Kirby\\Cms\\PageBlueprint' => $baseDir . '/src/Cms/PageBlueprint.php',
    'Kirby\\Cms\\PagePermissions' => $baseDir . '/src/Cms/PagePermissions.php',
    'Kirby\\Cms\\PagePicker' => $baseDir . '/src/Cms/PagePicker.php',
    'Kirby\\Cms\\PageRules' => $baseDir . '/src/Cms/PageRules.php',
    'Kirby\\Cms\\PageSiblings' => $baseDir . '/src/Cms/PageSiblings.php',
    'Kirby\\Cms\\Pages' => $baseDir . '/src/Cms/Pages.php',
    'Kirby\\Cms\\Pagination' => $baseDir . '/src/Cms/Pagination.php',
    'Kirby\\Cms\\Permissions' => $baseDir . '/src/Cms/Permissions.php',
    'Kirby\\Cms\\Picker' => $baseDir . '/src/Cms/Picker.php',
    'Kirby\\Cms\\Plugin' => $baseDir . '/src/Cms/Plugin.php',
    'Kirby\\Cms\\PluginAssets' => $baseDir . '/src/Cms/PluginAssets.php',
    'Kirby\\Cms\\R' => $baseDir . '/src/Cms/R.php',
    'Kirby\\Cms\\Responder' => $baseDir . '/src/Cms/Responder.php',
    'Kirby\\Cms\\Response' => $baseDir . '/src/Cms/Response.php',
    'Kirby\\Cms\\Role' => $baseDir . '/src/Cms/Role.php',
    'Kirby\\Cms\\Roles' => $baseDir . '/src/Cms/Roles.php',
    'Kirby\\Cms\\S' => $baseDir . '/src/Cms/S.php',
    'Kirby\\Cms\\Search' => $baseDir . '/src/Cms/Search.php',
    'Kirby\\Cms\\Section' => $baseDir . '/src/Cms/Section.php',
    'Kirby\\Cms\\Site' => $baseDir . '/src/Cms/Site.php',
    'Kirby\\Cms\\SiteActions' => $baseDir . '/src/Cms/SiteActions.php',
    'Kirby\\Cms\\SiteBlueprint' => $baseDir . '/src/Cms/SiteBlueprint.php',
    'Kirby\\Cms\\SitePermissions' => $baseDir . '/src/Cms/SitePermissions.php',
    'Kirby\\Cms\\SiteRules' => $baseDir . '/src/Cms/SiteRules.php',
    'Kirby\\Cms\\Structure' => $baseDir . '/src/Cms/Structure.php',
    'Kirby\\Cms\\StructureObject' => $baseDir . '/src/Cms/StructureObject.php',
    'Kirby\\Cms\\System' => $baseDir . '/src/Cms/System.php',
    'Kirby\\Cms\\System\\UpdateStatus' => $baseDir . '/src/Cms/System/UpdateStatus.php',
    'Kirby\\Cms\\Translation' => $baseDir . '/src/Cms/Translation.php',
    'Kirby\\Cms\\Translations' => $baseDir . '/src/Cms/Translations.php',
    'Kirby\\Cms\\Url' => $baseDir . '/src/Cms/Url.php',
    'Kirby\\Cms\\User' => $baseDir . '/src/Cms/User.php',
    'Kirby\\Cms\\UserActions' => $baseDir . '/src/Cms/UserActions.php',
    'Kirby\\Cms\\UserBlueprint' => $baseDir . '/src/Cms/UserBlueprint.php',
    'Kirby\\Cms\\UserPermissions' => $baseDir . '/src/Cms/UserPermissions.php',
    'Kirby\\Cms\\UserPicker' => $baseDir . '/src/Cms/UserPicker.php',
    'Kirby\\Cms\\UserRules' => $baseDir . '/src/Cms/UserRules.php',
    'Kirby\\Cms\\Users' => $baseDir . '/src/Cms/Users.php',
    'Kirby\\Cms\\Visitor' => $baseDir . '/src/Cms/Visitor.php',
    'Kirby\\ComposerInstaller\\CmsInstaller' => $vendorDir . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
    'Kirby\\ComposerInstaller\\Installer' => $vendorDir . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
    'Kirby\\ComposerInstaller\\Plugin' => $vendorDir . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
    'Kirby\\ComposerInstaller\\PluginInstaller' => $vendorDir . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
    'Kirby\\Content\\Content' => $baseDir . '/src/Content/Content.php',
    'Kirby\\Content\\ContentStorage' => $baseDir . '/src/Content/ContentStorage.php',
    'Kirby\\Content\\ContentStorageHandler' => $baseDir . '/src/Content/ContentStorageHandler.php',
    'Kirby\\Content\\ContentTranslation' => $baseDir . '/src/Content/ContentTranslation.php',
    'Kirby\\Content\\Field' => $baseDir . '/src/Content/Field.php',
    'Kirby\\Content\\PlainTextContentStorageHandler' => $baseDir . '/src/Content/PlainTextContentStorageHandler.php',
    'Kirby\\Data\\Data' => $baseDir . '/src/Data/Data.php',
    'Kirby\\Data\\Handler' => $baseDir . '/src/Data/Handler.php',
    'Kirby\\Data\\Json' => $baseDir . '/src/Data/Json.php',
    'Kirby\\Data\\PHP' => $baseDir . '/src/Data/PHP.php',
    'Kirby\\Data\\Txt' => $baseDir . '/src/Data/Txt.php',
    'Kirby\\Data\\Xml' => $baseDir . '/src/Data/Xml.php',
    'Kirby\\Data\\Yaml' => $baseDir . '/src/Data/Yaml.php',
    'Kirby\\Data\\YamlSpyc' => $baseDir . '/src/Data/YamlSpyc.php',
    'Kirby\\Data\\YamlSymfony' => $baseDir . '/src/Data/YamlSymfony.php',
    'Kirby\\Database\\Database' => $baseDir . '/src/Database/Database.php',
    'Kirby\\Database\\Db' => $baseDir . '/src/Database/Db.php',
    'Kirby\\Database\\Query' => $baseDir . '/src/Database/Query.php',
    'Kirby\\Database\\Sql' => $baseDir . '/src/Database/Sql.php',
    'Kirby\\Database\\Sql\\Mysql' => $baseDir . '/src/Database/Sql/Mysql.php',
    'Kirby\\Database\\Sql\\Sqlite' => $baseDir . '/src/Database/Sql/Sqlite.php',
    'Kirby\\Email\\Body' => $baseDir . '/src/Email/Body.php',
    'Kirby\\Email\\Email' => $baseDir . '/src/Email/Email.php',
    'Kirby\\Email\\PHPMailer' => $baseDir . '/src/Email/PHPMailer.php',
    'Kirby\\Exception\\AuthException' => $baseDir . '/src/Exception/AuthException.php',
    'Kirby\\Exception\\BadMethodCallException' => $baseDir . '/src/Exception/BadMethodCallException.php',
    'Kirby\\Exception\\DuplicateException' => $baseDir . '/src/Exception/DuplicateException.php',
    'Kirby\\Exception\\ErrorPageException' => $baseDir . '/src/Exception/ErrorPageException.php',
    'Kirby\\Exception\\Exception' => $baseDir . '/src/Exception/Exception.php',
    'Kirby\\Exception\\InvalidArgumentException' => $baseDir . '/src/Exception/InvalidArgumentException.php',
    'Kirby\\Exception\\LogicException' => $baseDir . '/src/Exception/LogicException.php',
    'Kirby\\Exception\\NotFoundException' => $baseDir . '/src/Exception/NotFoundException.php',
    'Kirby\\Exception\\PermissionException' => $baseDir . '/src/Exception/PermissionException.php',
    'Kirby\\Field\\FieldOptions' => $baseDir . '/src/Field/FieldOptions.php',
    'Kirby\\Filesystem\\Asset' => $baseDir . '/src/Filesystem/Asset.php',
    'Kirby\\Filesystem\\Dir' => $baseDir . '/src/Filesystem/Dir.php',
    'Kirby\\Filesystem\\F' => $baseDir . '/src/Filesystem/F.php',
    'Kirby\\Filesystem\\File' => $baseDir . '/src/Filesystem/File.php',
    'Kirby\\Filesystem\\Filename' => $baseDir . '/src/Filesystem/Filename.php',
    'Kirby\\Filesystem\\IsFile' => $baseDir . '/src/Filesystem/IsFile.php',
    'Kirby\\Filesystem\\Mime' => $baseDir . '/src/Filesystem/Mime.php',
    'Kirby\\Form\\Field' => $baseDir . '/src/Form/Field.php',
    'Kirby\\Form\\FieldClass' => $baseDir . '/src/Form/FieldClass.php',
    'Kirby\\Form\\Field\\BlocksField' => $baseDir . '/src/Form/Field/BlocksField.php',
    'Kirby\\Form\\Field\\LayoutField' => $baseDir . '/src/Form/Field/LayoutField.php',
    'Kirby\\Form\\Fields' => $baseDir . '/src/Form/Fields.php',
    'Kirby\\Form\\Form' => $baseDir . '/src/Form/Form.php',
    'Kirby\\Form\\Mixin\\EmptyState' => $baseDir . '/src/Form/Mixin/EmptyState.php',
    'Kirby\\Form\\Mixin\\Max' => $baseDir . '/src/Form/Mixin/Max.php',
    'Kirby\\Form\\Mixin\\Min' => $baseDir . '/src/Form/Mixin/Min.php',
    'Kirby\\Form\\Validations' => $baseDir . '/src/Form/Validations.php',
    'Kirby\\Http\\Cookie' => $baseDir . '/src/Http/Cookie.php',
    'Kirby\\Http\\Environment' => $baseDir . '/src/Http/Environment.php',
    'Kirby\\Http\\Exceptions\\NextRouteException' => $baseDir . '/src/Http/Exceptions/NextRouteException.php',
    'Kirby\\Http\\Header' => $baseDir . '/src/Http/Header.php',
    'Kirby\\Http\\Idn' => $baseDir . '/src/Http/Idn.php',
    'Kirby\\Http\\Params' => $baseDir . '/src/Http/Params.php',
    'Kirby\\Http\\Path' => $baseDir . '/src/Http/Path.php',
    'Kirby\\Http\\Query' => $baseDir . '/src/Http/Query.php',
    'Kirby\\Http\\Remote' => $baseDir . '/src/Http/Remote.php',
    'Kirby\\Http\\Request' => $baseDir . '/src/Http/Request.php',
    'Kirby\\Http\\Request\\Auth' => $baseDir . '/src/Http/Request/Auth.php',
    'Kirby\\Http\\Request\\Auth\\BasicAuth' => $baseDir . '/src/Http/Request/Auth/BasicAuth.php',
    'Kirby\\Http\\Request\\Auth\\BearerAuth' => $baseDir . '/src/Http/Request/Auth/BearerAuth.php',
    'Kirby\\Http\\Request\\Auth\\SessionAuth' => $baseDir . '/src/Http/Request/Auth/SessionAuth.php',
    'Kirby\\Http\\Request\\Body' => $baseDir . '/src/Http/Request/Body.php',
    'Kirby\\Http\\Request\\Data' => $baseDir . '/src/Http/Request/Data.php',
    'Kirby\\Http\\Request\\Files' => $baseDir . '/src/Http/Request/Files.php',
    'Kirby\\Http\\Request\\Query' => $baseDir . '/src/Http/Request/Query.php',
    'Kirby\\Http\\Response' => $baseDir . '/src/Http/Response.php',
    'Kirby\\Http\\Route' => $baseDir . '/src/Http/Route.php',
    'Kirby\\Http\\Router' => $baseDir . '/src/Http/Router.php',
    'Kirby\\Http\\Uri' => $baseDir . '/src/Http/Uri.php',
    'Kirby\\Http\\Url' => $baseDir . '/src/Http/Url.php',
    'Kirby\\Http\\Visitor' => $baseDir . '/src/Http/Visitor.php',
    'Kirby\\Image\\Camera' => $baseDir . '/src/Image/Camera.php',
    'Kirby\\Image\\Darkroom' => $baseDir . '/src/Image/Darkroom.php',
    'Kirby\\Image\\Darkroom\\GdLib' => $baseDir . '/src/Image/Darkroom/GdLib.php',
    'Kirby\\Image\\Darkroom\\ImageMagick' => $baseDir . '/src/Image/Darkroom/ImageMagick.php',
    'Kirby\\Image\\Dimensions' => $baseDir . '/src/Image/Dimensions.php',
    'Kirby\\Image\\Exif' => $baseDir . '/src/Image/Exif.php',
    'Kirby\\Image\\Focus' => $baseDir . '/src/Image/Focus.php',
    'Kirby\\Image\\Image' => $baseDir . '/src/Image/Image.php',
    'Kirby\\Image\\Location' => $baseDir . '/src/Image/Location.php',
    'Kirby\\Option\\Option' => $baseDir . '/src/Option/Option.php',
    'Kirby\\Option\\Options' => $baseDir . '/src/Option/Options.php',
    'Kirby\\Option\\OptionsApi' => $baseDir . '/src/Option/OptionsApi.php',
    'Kirby\\Option\\OptionsProvider' => $baseDir . '/src/Option/OptionsProvider.php',
    'Kirby\\Option\\OptionsQuery' => $baseDir . '/src/Option/OptionsQuery.php',
    'Kirby\\Panel\\Assets' => $baseDir . '/src/Panel/Assets.php',
    'Kirby\\Panel\\ChangesDialog' => $baseDir . '/src/Panel/ChangesDialog.php',
    'Kirby\\Panel\\Dialog' => $baseDir . '/src/Panel/Dialog.php',
    'Kirby\\Panel\\Document' => $baseDir . '/src/Panel/Document.php',
    'Kirby\\Panel\\Drawer' => $baseDir . '/src/Panel/Drawer.php',
    'Kirby\\Panel\\Dropdown' => $baseDir . '/src/Panel/Dropdown.php',
    'Kirby\\Panel\\Field' => $baseDir . '/src/Panel/Field.php',
    'Kirby\\Panel\\File' => $baseDir . '/src/Panel/File.php',
    'Kirby\\Panel\\Home' => $baseDir . '/src/Panel/Home.php',
    'Kirby\\Panel\\Json' => $baseDir . '/src/Panel/Json.php',
    'Kirby\\Panel\\Menu' => $baseDir . '/src/Panel/Menu.php',
    'Kirby\\Panel\\Model' => $baseDir . '/src/Panel/Model.php',
    'Kirby\\Panel\\Page' => $baseDir . '/src/Panel/Page.php',
    'Kirby\\Panel\\PageCreateDialog' => $baseDir . '/src/Panel/PageCreateDialog.php',
    'Kirby\\Panel\\Panel' => $baseDir . '/src/Panel/Panel.php',
    'Kirby\\Panel\\Plugins' => $baseDir . '/src/Panel/Plugins.php',
    'Kirby\\Panel\\Redirect' => $baseDir . '/src/Panel/Redirect.php',
    'Kirby\\Panel\\Search' => $baseDir . '/src/Panel/Search.php',
    'Kirby\\Panel\\Site' => $baseDir . '/src/Panel/Site.php',
    'Kirby\\Panel\\User' => $baseDir . '/src/Panel/User.php',
    'Kirby\\Panel\\View' => $baseDir . '/src/Panel/View.php',
    'Kirby\\Parsley\\Element' => $baseDir . '/src/Parsley/Element.php',
    'Kirby\\Parsley\\Inline' => $baseDir . '/src/Parsley/Inline.php',
    'Kirby\\Parsley\\Parsley' => $baseDir . '/src/Parsley/Parsley.php',
    'Kirby\\Parsley\\Schema' => $baseDir . '/src/Parsley/Schema.php',
    'Kirby\\Parsley\\Schema\\Blocks' => $baseDir . '/src/Parsley/Schema/Blocks.php',
    'Kirby\\Parsley\\Schema\\Plain' => $baseDir . '/src/Parsley/Schema/Plain.php',
    'Kirby\\Query\\Argument' => $baseDir . '/src/Query/Argument.php',
    'Kirby\\Query\\Arguments' => $baseDir . '/src/Query/Arguments.php',
    'Kirby\\Query\\Expression' => $baseDir . '/src/Query/Expression.php',
    'Kirby\\Query\\Query' => $baseDir . '/src/Query/Query.php',
    'Kirby\\Query\\Segment' => $baseDir . '/src/Query/Segment.php',
    'Kirby\\Query\\Segments' => $baseDir . '/src/Query/Segments.php',
    'Kirby\\Sane\\DomHandler' => $baseDir . '/src/Sane/DomHandler.php',
    'Kirby\\Sane\\Handler' => $baseDir . '/src/Sane/Handler.php',
    'Kirby\\Sane\\Html' => $baseDir . '/src/Sane/Html.php',
    'Kirby\\Sane\\Sane' => $baseDir . '/src/Sane/Sane.php',
    'Kirby\\Sane\\Svg' => $baseDir . '/src/Sane/Svg.php',
    'Kirby\\Sane\\Svgz' => $baseDir . '/src/Sane/Svgz.php',
    'Kirby\\Sane\\Xml' => $baseDir . '/src/Sane/Xml.php',
    'Kirby\\Session\\AutoSession' => $baseDir . '/src/Session/AutoSession.php',
    'Kirby\\Session\\FileSessionStore' => $baseDir . '/src/Session/FileSessionStore.php',
    'Kirby\\Session\\Session' => $baseDir . '/src/Session/Session.php',
    'Kirby\\Session\\SessionData' => $baseDir . '/src/Session/SessionData.php',
    'Kirby\\Session\\SessionStore' => $baseDir . '/src/Session/SessionStore.php',
    'Kirby\\Session\\Sessions' => $baseDir . '/src/Session/Sessions.php',
    'Kirby\\Template\\Slot' => $baseDir . '/src/Template/Slot.php',
    'Kirby\\Template\\Slots' => $baseDir . '/src/Template/Slots.php',
    'Kirby\\Template\\Snippet' => $baseDir . '/src/Template/Snippet.php',
    'Kirby\\Template\\Template' => $baseDir . '/src/Template/Template.php',
    'Kirby\\Text\\KirbyTag' => $baseDir . '/src/Text/KirbyTag.php',
    'Kirby\\Text\\KirbyTags' => $baseDir . '/src/Text/KirbyTags.php',
    'Kirby\\Text\\Markdown' => $baseDir . '/src/Text/Markdown.php',
    'Kirby\\Text\\SmartyPants' => $baseDir . '/src/Text/SmartyPants.php',
    'Kirby\\Toolkit\\A' => $baseDir . '/src/Toolkit/A.php',
    'Kirby\\Toolkit\\Collection' => $baseDir . '/src/Toolkit/Collection.php',
    'Kirby\\Toolkit\\Component' => $baseDir . '/src/Toolkit/Component.php',
    'Kirby\\Toolkit\\Config' => $baseDir . '/src/Toolkit/Config.php',
    'Kirby\\Toolkit\\Controller' => $baseDir . '/src/Toolkit/Controller.php',
    'Kirby\\Toolkit\\Date' => $baseDir . '/src/Toolkit/Date.php',
    'Kirby\\Toolkit\\Dom' => $baseDir . '/src/Toolkit/Dom.php',
    'Kirby\\Toolkit\\Escape' => $baseDir . '/src/Toolkit/Escape.php',
    'Kirby\\Toolkit\\Facade' => $baseDir . '/src/Toolkit/Facade.php',
    'Kirby\\Toolkit\\Html' => $baseDir . '/src/Toolkit/Html.php',
    'Kirby\\Toolkit\\I18n' => $baseDir . '/src/Toolkit/I18n.php',
    'Kirby\\Toolkit\\Iterator' => $baseDir . '/src/Toolkit/Iterator.php',
    'Kirby\\Toolkit\\Locale' => $baseDir . '/src/Toolkit/Locale.php',
    'Kirby\\Toolkit\\Obj' => $baseDir . '/src/Toolkit/Obj.php',
    'Kirby\\Toolkit\\Pagination' => $baseDir . '/src/Toolkit/Pagination.php',
    'Kirby\\Toolkit\\Properties' => $baseDir . '/src/Toolkit/Properties.php',
    'Kirby\\Toolkit\\Silo' => $baseDir . '/src/Toolkit/Silo.php',
    'Kirby\\Toolkit\\Str' => $baseDir . '/src/Toolkit/Str.php',
    'Kirby\\Toolkit\\Tpl' => $baseDir . '/src/Toolkit/Tpl.php',
    'Kirby\\Toolkit\\V' => $baseDir . '/src/Toolkit/V.php',
    'Kirby\\Toolkit\\View' => $baseDir . '/src/Toolkit/View.php',
    'Kirby\\Toolkit\\Xml' => $baseDir . '/src/Toolkit/Xml.php',
    'Kirby\\Uuid\\BlockUuid' => $baseDir . '/src/Uuid/BlockUuid.php',
    'Kirby\\Uuid\\FieldUuid' => $baseDir . '/src/Uuid/FieldUuid.php',
    'Kirby\\Uuid\\FileUuid' => $baseDir . '/src/Uuid/FileUuid.php',
    'Kirby\\Uuid\\HasUuids' => $baseDir . '/src/Uuid/HasUuids.php',
    'Kirby\\Uuid\\Identifiable' => $baseDir . '/src/Uuid/Identifiable.php',
    'Kirby\\Uuid\\ModelUuid' => $baseDir . '/src/Uuid/ModelUuid.php',
    'Kirby\\Uuid\\PageUuid' => $baseDir . '/src/Uuid/PageUuid.php',
    'Kirby\\Uuid\\SiteUuid' => $baseDir . '/src/Uuid/SiteUuid.php',
    'Kirby\\Uuid\\StructureUuid' => $baseDir . '/src/Uuid/StructureUuid.php',
    'Kirby\\Uuid\\Uri' => $baseDir . '/src/Uuid/Uri.php',
    'Kirby\\Uuid\\UserUuid' => $baseDir . '/src/Uuid/UserUuid.php',
    'Kirby\\Uuid\\Uuid' => $baseDir . '/src/Uuid/Uuid.php',
    'Kirby\\Uuid\\Uuids' => $baseDir . '/src/Uuid/Uuids.php',
    'Laminas\\Escaper\\Escaper' => $vendorDir . '/laminas/laminas-escaper/src/Escaper.php',
    'Laminas\\Escaper\\Exception\\ExceptionInterface' => $vendorDir . '/laminas/laminas-escaper/src/Exception/ExceptionInterface.php',
    'Laminas\\Escaper\\Exception\\InvalidArgumentException' => $vendorDir . '/laminas/laminas-escaper/src/Exception/InvalidArgumentException.php',
    'Laminas\\Escaper\\Exception\\RuntimeException' => $vendorDir . '/laminas/laminas-escaper/src/Exception/RuntimeException.php',
    'League\\ColorExtractor\\Color' => $vendorDir . '/league/color-extractor/src/Color.php',
    'League\\ColorExtractor\\ColorExtractor' => $vendorDir . '/league/color-extractor/src/ColorExtractor.php',
    'League\\ColorExtractor\\Palette' => $vendorDir . '/league/color-extractor/src/Palette.php',
    'Michelf\\SmartyPants' => $vendorDir . '/michelf/php-smartypants/Michelf/SmartyPants.php',
    'Michelf\\SmartyPantsTypographer' => $vendorDir . '/michelf/php-smartypants/Michelf/SmartyPantsTypographer.php',
    'Normalizer' => $vendorDir . '/symfony/polyfill-intl-normalizer/Resources/stubs/Normalizer.php',
    'PHPMailer\\PHPMailer\\DSNConfigurator' => $vendorDir . '/phpmailer/phpmailer/src/DSNConfigurator.php',
    'PHPMailer\\PHPMailer\\Exception' => $vendorDir . '/phpmailer/phpmailer/src/Exception.php',
    'PHPMailer\\PHPMailer\\OAuth' => $vendorDir . '/phpmailer/phpmailer/src/OAuth.php',
    'PHPMailer\\PHPMailer\\OAuthTokenProvider' => $vendorDir . '/phpmailer/phpmailer/src/OAuthTokenProvider.php',
    'PHPMailer\\PHPMailer\\PHPMailer' => $vendorDir . '/phpmailer/phpmailer/src/PHPMailer.php',
    'PHPMailer\\PHPMailer\\POP3' => $vendorDir . '/phpmailer/phpmailer/src/POP3.php',
    'PHPMailer\\PHPMailer\\SMTP' => $vendorDir . '/phpmailer/phpmailer/src/SMTP.php',
    'Parsedown' => $baseDir . '/dependencies/parsedown/Parsedown.php',
    'ParsedownExtra' => $baseDir . '/dependencies/parsedown-extra/ParsedownExtra.php',
    'Psr\\Log\\AbstractLogger' => $vendorDir . '/psr/log/src/AbstractLogger.php',
    'Psr\\Log\\InvalidArgumentException' => $vendorDir . '/psr/log/src/InvalidArgumentException.php',
    'Psr\\Log\\LogLevel' => $vendorDir . '/psr/log/src/LogLevel.php',
    'Psr\\Log\\LoggerAwareInterface' => $vendorDir . '/psr/log/src/LoggerAwareInterface.php',
    'Psr\\Log\\LoggerAwareTrait' => $vendorDir . '/psr/log/src/LoggerAwareTrait.php',
    'Psr\\Log\\LoggerInterface' => $vendorDir . '/psr/log/src/LoggerInterface.php',
    'Psr\\Log\\LoggerTrait' => $vendorDir . '/psr/log/src/LoggerTrait.php',
    'Psr\\Log\\NullLogger' => $vendorDir . '/psr/log/src/NullLogger.php',
    'Spyc' => $baseDir . '/dependencies/spyc/Spyc.php',
    'Symfony\\Component\\Yaml\\Command\\LintCommand' => $vendorDir . '/symfony/yaml/Command/LintCommand.php',
    'Symfony\\Component\\Yaml\\Dumper' => $vendorDir . '/symfony/yaml/Dumper.php',
    'Symfony\\Component\\Yaml\\Escaper' => $vendorDir . '/symfony/yaml/Escaper.php',
    'Symfony\\Component\\Yaml\\Exception\\DumpException' => $vendorDir . '/symfony/yaml/Exception/DumpException.php',
    'Symfony\\Component\\Yaml\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/yaml/Exception/ExceptionInterface.php',
    'Symfony\\Component\\Yaml\\Exception\\ParseException' => $vendorDir . '/symfony/yaml/Exception/ParseException.php',
    'Symfony\\Component\\Yaml\\Exception\\RuntimeException' => $vendorDir . '/symfony/yaml/Exception/RuntimeException.php',
    'Symfony\\Component\\Yaml\\Inline' => $vendorDir . '/symfony/yaml/Inline.php',
    'Symfony\\Component\\Yaml\\Parser' => $vendorDir . '/symfony/yaml/Parser.php',
    'Symfony\\Component\\Yaml\\Tag\\TaggedValue' => $vendorDir . '/symfony/yaml/Tag/TaggedValue.php',
    'Symfony\\Component\\Yaml\\Unescaper' => $vendorDir . '/symfony/yaml/Unescaper.php',
    'Symfony\\Component\\Yaml\\Yaml' => $vendorDir . '/symfony/yaml/Yaml.php',
    'Symfony\\Polyfill\\Ctype\\Ctype' => $vendorDir . '/symfony/polyfill-ctype/Ctype.php',
    'Symfony\\Polyfill\\Intl\\Idn\\Idn' => $vendorDir . '/symfony/polyfill-intl-idn/Idn.php',
    'Symfony\\Polyfill\\Intl\\Idn\\Info' => $vendorDir . '/symfony/polyfill-intl-idn/Info.php',
    'Symfony\\Polyfill\\Intl\\Idn\\Resources\\unidata\\DisallowedRanges' => $vendorDir . '/symfony/polyfill-intl-idn/Resources/unidata/DisallowedRanges.php',
    'Symfony\\Polyfill\\Intl\\Idn\\Resources\\unidata\\Regex' => $vendorDir . '/symfony/polyfill-intl-idn/Resources/unidata/Regex.php',
    'Symfony\\Polyfill\\Intl\\Normalizer\\Normalizer' => $vendorDir . '/symfony/polyfill-intl-normalizer/Normalizer.php',
    'Symfony\\Polyfill\\Mbstring\\Mbstring' => $vendorDir . '/symfony/polyfill-mbstring/Mbstring.php',
    'Whoops\\Exception\\ErrorException' => $vendorDir . '/filp/whoops/src/Whoops/Exception/ErrorException.php',
    'Whoops\\Exception\\Formatter' => $vendorDir . '/filp/whoops/src/Whoops/Exception/Formatter.php',
    'Whoops\\Exception\\Frame' => $vendorDir . '/filp/whoops/src/Whoops/Exception/Frame.php',
    'Whoops\\Exception\\FrameCollection' => $vendorDir . '/filp/whoops/src/Whoops/Exception/FrameCollection.php',
    'Whoops\\Exception\\Inspector' => $vendorDir . '/filp/whoops/src/Whoops/Exception/Inspector.php',
    'Whoops\\Handler\\CallbackHandler' => $vendorDir . '/filp/whoops/src/Whoops/Handler/CallbackHandler.php',
    'Whoops\\Handler\\Handler' => $vendorDir . '/filp/whoops/src/Whoops/Handler/Handler.php',
    'Whoops\\Handler\\HandlerInterface' => $vendorDir . '/filp/whoops/src/Whoops/Handler/HandlerInterface.php',
    'Whoops\\Handler\\JsonResponseHandler' => $vendorDir . '/filp/whoops/src/Whoops/Handler/JsonResponseHandler.php',
    'Whoops\\Handler\\PlainTextHandler' => $vendorDir . '/filp/whoops/src/Whoops/Handler/PlainTextHandler.php',
    'Whoops\\Handler\\PrettyPageHandler' => $vendorDir . '/filp/whoops/src/Whoops/Handler/PrettyPageHandler.php',
    'Whoops\\Handler\\XmlResponseHandler' => $vendorDir . '/filp/whoops/src/Whoops/Handler/XmlResponseHandler.php',
    'Whoops\\Inspector\\InspectorFactory' => $vendorDir . '/filp/whoops/src/Whoops/Inspector/InspectorFactory.php',
    'Whoops\\Inspector\\InspectorFactoryInterface' => $vendorDir . '/filp/whoops/src/Whoops/Inspector/InspectorFactoryInterface.php',
    'Whoops\\Inspector\\InspectorInterface' => $vendorDir . '/filp/whoops/src/Whoops/Inspector/InspectorInterface.php',
    'Whoops\\Run' => $vendorDir . '/filp/whoops/src/Whoops/Run.php',
    'Whoops\\RunInterface' => $vendorDir . '/filp/whoops/src/Whoops/RunInterface.php',
    'Whoops\\Util\\HtmlDumperOutput' => $vendorDir . '/filp/whoops/src/Whoops/Util/HtmlDumperOutput.php',
    'Whoops\\Util\\Misc' => $vendorDir . '/filp/whoops/src/Whoops/Util/Misc.php',
    'Whoops\\Util\\SystemFacade' => $vendorDir . '/filp/whoops/src/Whoops/Util/SystemFacade.php',
    'Whoops\\Util\\TemplateHelper' => $vendorDir . '/filp/whoops/src/Whoops/Util/TemplateHelper.php',
    'claviska\\SimpleImage' => $vendorDir . '/claviska/simpleimage/src/claviska/SimpleImage.php',
);
