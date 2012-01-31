<?php

function SAIVA_links(array $variables) {
  if(array_key_exists('id', $variables['attributes']) &&
     $variables['attributes']['id'] == 'main-menu') {
    $pid = variable_get('menu_main_links_source', 'main-menu');
    $tree = menu_tree($pid);
    return drupal_render($tree);
  }
  return theme_links($variables);
}

function SAIVA_menu_link(array $variables) {
  $element = $variables['element'];

  $element['#attributes']['class'][] = 'saiva_button';
  $sub_menu = $element['#below'] ? drupal_render($element['#below']) : '';
  $element['#localized_options']['attributes']['class'][] = 'saiva_button';
  $element['#localized_options']['html'] = TRUE;
  $output = l('<span>'. t($element['#title']) . '</span>', $element['#href'], $element['#localized_options']); 

  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
?>
