# Display Wiki Page for DokuWiki

## License

* **Author**: [Terence J. Grant](mailto:tjgrant@tatewake.com) (with special thanks to Etienne Gauthier)
* **License**: [GNU GPL v2](http://opensource.org/licenses/GPL-2.0)
* **Latest Release**: v1.0.0 on Sep 19th, 2020
* **Changes**: See [CHANGELOG.md](CHANGELOG.md) for full details.
* **Donate**: [Donations](http://tjgrant.com/wiki/donate) and [Sponsorships](https://github.com/sponsors/tatewake) are appreciated!

## About

The plugin also exports a function for use with your template, so you will have to insert the following code into your template, somewhere inside of the `<head></head>` tags.

	<?php if (file_exists(DOKU_PLUGIN.'displaywikipage/code.php')) include_once(DOKU_PLUGIN.'displaywikipage/code.php'); ?>

**Note**: Inserting the code above is **required**, not optional.

To display a wiki page at any point in your document, use the following code:

	<?php if (function_exists('dwp_display_wiki_page')) dwp_display_wiki_page(":path:to:page"); ?>

Doing it in this fashion will allow your users to use the template whether or not you have the plugin installed.

## Install / Upgrade

Search and install the plugin using the [Extension Manager](https://www.dokuwiki.org/plugin:extension). Refer to [Plugins](https://www.dokuwiki.org/plugins) on how to install plugins manually.

## Setup

All further documentation for this plugin can be found at:

 * [https://www.dokuwiki.org/plugin:displaywikipage](https://www.dokuwiki.org/plugin:displaywikipage)

## Contributing

The official repository for this plugin is available on GitHub:

* [https://github.com/tatewake/dokuwiki-plugin-displaywikipage](https://github.com/tatewake/dokuwiki-plugin-displaywikipage)

The plugin thrives from community contributions. If you're able to provide useful code changes or bug fixes, they will likely be accepted to future versions of the plugin.

If you find my work helpful and would like to give back, [consider joining me as a GitHub sponsor](https://github.com/sponsors/tatewake).

Thanks!

--Terence
