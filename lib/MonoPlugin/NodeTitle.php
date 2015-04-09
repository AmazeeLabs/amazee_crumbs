<?php

/**
 * Crumbs plugin that returns node title for the currently viewed node.
 */
class amazee_crumbs_MonoPlugin_NodeTitle implements crumbs_MonoPlugin_FindTitleInterface {

  /**
   * {@inheritdoc}
   */
  function describe($api) {
    return t('Title of a currently viewed node.
<br/>It is better to put it right after the "crumbs.home_title" plugin.
<br />Works only if "Show the current page at the end of the breadcrumb trail?" option is set to "Show, *".');
  }

  /**
   * {@inheritdoc}
   */
  function findTitle($path, $item) {
    if ($path == crumbs()->page->path) {
      if ($node = menu_get_object()) {
        return entity_label('node', $node);
      }
    }
    return NULL;
  }

}
