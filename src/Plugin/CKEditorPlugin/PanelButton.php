<?php

/**
 * @file
 * Definition of \Drupal\panelbutton\Plugin\CKEditorPlugin\PanelButton.
 */

namespace Drupal\panelbutton\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "PanelButton" plugin.
 *
 * @CKEditorPlugin(
 *   id = "panelbutton",
 *   label = @Translation("PanelButton")
 * )
 */
class PanelButton extends PluginBase implements CKEditorPluginInterface {

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getDependencies().
   */
  function getDependencies(Editor $editor) {
    return array();
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getLibraries().
   */
  function getLibraries(Editor $editor) {
    return array();
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::isInternal().
   */
  function isInternal() {
    return FALSE;
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getFile().
   */
  function getFile() {
    return drupal_get_path('module', 'panelbutton') . '/js/plugins/panelbutton/plugin.js';
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getConfig().
   */
  public function getConfig(Editor $editor) {
    return array();
  }
}
