<?php

declare(strict_types=1);

/**
 * @file
 * Theme settings form for Our Travel Home theme.
 */

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function our_travel_home_form_system_theme_settings_alter(array &$form, FormState $form_state): void {

  $form['our_travel_home'] = [
    '#type' => 'details',
    '#title' => t('Our Travel Home'),
    '#open' => TRUE,
  ];

  $form['our_travel_home']['example'] = [
    '#type' => 'textfield',
    '#title' => t('Example'),
    '#default_value' => theme_get_setting('example'),
  ];

}
