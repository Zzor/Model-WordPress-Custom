<?php 
/**
 * Register Menus
 */
function themeNameMenus() {
  register_nav_menus(
    [
      'principal-nav' => __('Menu principal'),
    ]
  );
}
add_action('after_setup_theme', 'themeNameMenus');