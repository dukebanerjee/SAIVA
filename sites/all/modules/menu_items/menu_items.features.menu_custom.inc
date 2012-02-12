<?php
/**
 * @file
 * menu_items.features.menu_custom.inc
 */

/**
 * Implements hook_menu_default_menu_custom().
 */
function menu_items_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: main-menu
  $menus['main-menu'] = array(
    'menu_name' => 'main-menu',
    'title' => 'Main menu',
    'description' => 'The <em>Main</em> menu is used on many sites to show the major sections of the site, often in a top navigation bar.',
  );
  // Exported menu: menu-destinations
  $menus['menu-destinations'] = array(
    'menu_name' => 'menu-destinations',
    'title' => 'Destinations',
    'description' => '',
  );
  // Exported menu: menu-quick-links
  $menus['menu-quick-links'] = array(
    'menu_name' => 'menu-quick-links',
    'title' => 'Quick Links',
    'description' => '',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Destinations');
  t('Main menu');
  t('Quick Links');
  t('The <em>Main</em> menu is used on many sites to show the major sections of the site, often in a top navigation bar.');


  return $menus;
}
