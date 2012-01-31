<?php

function SAIVA_form_user_login_block_alter(&$form) {
  unset($form['links']);
  $form['actions']['#weight'] = 5;
  $form['actions']['request_password'] = array(
    '#markup' => l('&raquo; ' . t('Forgot your password?'), 'user/password', array('html' => TRUE)));
  $form['actions']['submit']['#value'] = 'Enter';
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
