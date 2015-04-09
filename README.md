# Amazee Crumbs

A Drupal module providing a set of [Crumbs](https://www.drupal.org/project/crumbs) plugins/extensions.

Some features require [AmazeeLabs/crumbs](https://github.com/AmazeeLabs/crumbs) module version.

## Plugins

The `amazee_crumbs.firstPathFromActiveTrail` plugin provides integration with the [menu_position](https://www.drupal.org/project/menu_position) module.

The `amazee_crumbs.nodeTitle` plugin works only if "Show the current page at the end of the breadcrumb trail?" option is set to "Show, \*". It fixes all possible issues with the last breadcrumb on `node/%` pages.

## Other features

If `$conf['amazee_crumbs_main_menu_mini_panel']` is set in the `settings.php`, the queries performed by `menu.*` plugins will be corrected to use only the one active main menu. Basically, we need this on all websites using the menu-per-domain system.
