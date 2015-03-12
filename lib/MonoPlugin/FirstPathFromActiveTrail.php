<?php

/**
 * Crumbs plugin that returns the first (right) path of the active trail.
 *
 * Basically, it makes the Crumb module understand the Menu position module.
 */
class amazee_crumbs_MonoPlugin_FirstPathFromActiveTrail implements crumbs_MonoPlugin_FindParentInterface {

  /**
   * {@inheritdoc}
   */
  function describe($api) {
    return t('First path from active trail. Be sure to put it after the <code>menu.hierarchy.*</code> plugin.');
  }

  /**
   * {@inheritdoc}
   */
  function findParent($path, $item) {
    // We return the active trail path only when searching the parent of the
    // current path.
    if ($path == crumbs()->page->path) {
      $active_trail = menu_get_active_trail();
      if ($item = end($active_trail)) {
        return $item['link_path'];
      }
    }
    return FALSE;
  }

}
