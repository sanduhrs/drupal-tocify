<?php

namespace Drupal\tocify\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Config\ConfigFactory;

/**
 * Provides a 'TableOfContents' block.
 *
 * @Block(
 *  id = "tocify_table_of_contents",
 *  admin_label = @Translation("Table of contents"),
 * )
 */
class TableOfContents extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * ConfigManager definition.
   *
   * @var \Drupal\Core\Config\ConfigFactory
   */
  protected $configFactory;

  /**
   * Construct.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param string $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Config\ConfigFactory $config_factory
   *   The config manager definition.
   */
  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    ConfigFactory $config_factory
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->configFactory = $config_factory;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(
    ContainerInterface $container,
    array $configuration,
    $plugin_id,
    $plugin_definition
  ) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('config.factory')
    );
  }


  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $defaults = $this->configFactory
      ->getEditable('tocify.settings');

    $form['theme'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Theme'),
      '#default_value' => isset($this->configuration['_theme']) ? $this->configuration['_theme'] : $defaults->get('_theme'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['context'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Context'),
      '#default_value' => isset($this->configuration['_context']) ? $this->configuration['_context'] : $defaults->get('_context'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['selectors'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('selectors'),
      '#description' => $this->t('selectors'),
      '#default_value' => isset($this->configuration['selectors']) ? $this->configuration['selectors'] : $defaults->get('selectors'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['show_and_hide'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('show_and_hide'),
      '#description' => $this->t('show_and_hide'),
      '#default_value' => isset($this->configuration['show_and_hide']) ? $this->configuration['show_and_hide'] : $defaults->get('show_and_hide'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['show_effect'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('show_effect'),
      '#description' => $this->t('show_effect'),
      '#default_value' => isset($this->configuration['show_effect']) ? $this->configuration['show_effect'] : $defaults->get('show_effect'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['show_effect_speed'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('show_effect_speed'),
      '#description' => $this->t('show_effect_speed'),
      '#default_value' => isset($this->configuration['show_effect_speed']) ? $this->configuration['show_effect_speed'] : $defaults->get('show_effect_speed'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['hide_effect'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('hide_effect'),
      '#description' => $this->t('hide_effect'),
      '#default_value' => isset($this->configuration['hide_effect']) ? $this->configuration['hide_effect'] : $defaults->get('hide_effect'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['hide_effect_speed'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('hide_effect_speed'),
      '#description' => $this->t('hide_effect_speed'),
      '#default_value' => isset($this->configuration['hide_effect_speed']) ? $this->configuration['hide_effect_speed'] : $defaults->get('hide_effect_speed'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['smooth_scroll'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('smooth_scroll'),
      '#description' => $this->t('smooth_scroll'),
      '#default_value' => isset($this->configuration['smooth_scroll']) ? $this->configuration['smooth_scroll'] : $defaults->get('smooth_scroll'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['smooth_scroll_speed'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('smooth_scroll_speed'),
      '#description' => $this->t('smooth_scroll_speed'),
      '#default_value' => isset($this->configuration['smooth_scroll_speed']) ? $this->configuration['smooth_scroll_speed'] : $defaults->get('smooth_scroll_speed'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['scroll_to'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('scroll_to'),
      '#description' => $this->t('scroll_to'),
      '#default_value' => isset($this->configuration['scroll_to']) ? $this->configuration['scroll_to'] : $defaults->get('scroll_to'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['show_and_hide_on_scroll'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('show_and_hide_on_scroll'),
      '#description' => $this->t('show_and_hide_on_scroll'),
      '#default_value' => isset($this->configuration['show_and_hide_on_scroll']) ? $this->configuration['show_and_hide_on_scroll'] : $defaults->get('show_and_hide_on_scroll'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['highlight_on_scroll'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('highlight_on_scroll'),
      '#description' => $this->t('highlight_on_scroll'),
      '#default_value' => isset($this->configuration['highlight_on_scroll']) ? $this->configuration['highlight_on_scroll'] : $defaults->get('highlight_on_scroll'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['highlight_offset'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('highlight_offset'),
      '#description' => $this->t('highlight_offset'),
      '#default_value' => isset($this->configuration['highlight_offset']) ? $this->configuration['highlight_offset'] : $defaults->get('highlight_offset'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['extend_page'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('extend_page'),
      '#description' => $this->t('extend_page'),
      '#default_value' => isset($this->configuration['extend_page']) ? $this->configuration['extend_page'] : $defaults->get('extend_page'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['extend_page_offset'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('extend_page_offset'),
      '#description' => $this->t('extend_page_offset'),
      '#default_value' => isset($this->configuration['extend_page_offset']) ? $this->configuration['extend_page_offset'] : $defaults->get('extend_page_offset'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['history'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('history'),
      '#description' => $this->t('history'),
      '#default_value' => isset($this->configuration['history']) ? $this->configuration['history'] : $defaults->get('history'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['hash_generator'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('hash_generator'),
      '#description' => $this->t('hash_generator'),
      '#default_value' => isset($this->configuration['hash_generator']) ? $this->configuration['hash_generator'] : $defaults->get('hash_generator'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['highlight_default'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('highlight_default'),
      '#description' => $this->t('highlight_default'),
      '#default_value' => isset($this->configuration['highlight_default']) ? $this->configuration['highlight_default'] : $defaults->get('highlight_default'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['ignore_selector'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('ignore_selector'),
      '#description' => $this->t('ignore_selector'),
      '#default_value' => isset($this->configuration['ignore_selector']) ? $this->configuration['ignore_selector'] : $defaults->get('ignore_selector'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['scroll_history'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('scroll_history'),
      '#description' => $this->t('scroll_history'),
      '#default_value' => isset($this->configuration['scroll_history']) ? $this->configuration['scroll_history'] : $defaults->get('scroll_history'),
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['_theme'] = $form_state->getValue('theme');
    $this->configuration['_context'] = $form_state->getValue('context');
    $this->configuration['selectors'] = $form_state->getValue('selectors');
    $this->configuration['show_and_hide'] = $form_state->getValue('show_and_hide');
    $this->configuration['show_effect'] = $form_state->getValue('show_effect');
    $this->configuration['show_effect_speed'] = $form_state->getValue('show_effect_speed');
    $this->configuration['hide_effect'] = $form_state->getValue('hide_effect');
    $this->configuration['hide_effect_speed'] = $form_state->getValue('hide_effect_speed');
    $this->configuration['smooth_scroll'] = $form_state->getValue('smooth_scroll');
    $this->configuration['smooth_scroll_speed'] = $form_state->getValue('smooth_scroll_speed');
    $this->configuration['scroll_to'] = $form_state->getValue('scroll_to');
    $this->configuration['show_and_hide_on_scroll'] = $form_state->getValue('show_and_hide_on_scroll');
    $this->configuration['highlight_on_scroll'] = $form_state->getValue('highlight_on_scroll');
    $this->configuration['highlight_offset'] = $form_state->getValue('highlight_offset');
    $this->configuration['extend_page'] = $form_state->getValue('extend_page');
    $this->configuration['extend_page_offset'] = $form_state->getValue('extend_page_offset');
    $this->configuration['history'] = $form_state->getValue('history');
    $this->configuration['hash_generator'] = $form_state->getValue('hash_generator');
    $this->configuration['highlight_default'] = $form_state->getValue('highlight_default');
    $this->configuration['ignore_selector'] = $form_state->getValue('ignore_selector');
    $this->configuration['scroll_history'] = $form_state->getValue('scroll_history');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [
      '#theme' => 'tableofcontents',
      '#_theme' => $this->configuration['_theme'],
      '#context' => $this->configuration['_context'],
      '#selectors' => $this->configuration['selectors'],
      '#show_and_hide' => $this->formatBoolean($this->configuration['show_and_hide']),
      '#show_effect' => $this->configuration['show_effect'],
      '#show_effect_speed' => $this->configuration['show_effect_speed'],
      '#hide_effect' => $this->configuration['hide_effect'],
      '#hide_effect_speed' => $this->configuration['hide_effect_speed'],
      '#smooth_scroll' => $this->formatBoolean($this->configuration['smooth_scroll']),
      '#smooth_scroll_speed' => $this->configuration['smooth_scroll_speed'],
      '#scroll_to' => (string) $this->configuration['scroll_to'],
      '#show_and_hide_on_scroll' => $this->formatBoolean($this->configuration['show_and_hide_on_scroll']),
      '#highlight_on_scroll' => $this->formatBoolean($this->configuration['highlight_on_scroll']),
      '#highlight_offset' => (string) $this->configuration['highlight_offset'],
      '#extend_page' => $this->formatBoolean($this->configuration['extend_page']),
      '#extend_page_offset' => (string) $this->configuration['extend_page_offset'],
      '#history' => $this->formatBoolean($this->configuration['history']),
      '#hash_generator' => $this->configuration['hash_generator'],
      '#highlight_default' => $this->formatBoolean($this->configuration['highlight_default']),
      '#ignore_selector' => $this->configuration['ignore_selector'],
      '#scroll_history' => $this->formatBoolean($this->configuration['scroll_history']),
      '#attached' => array(
        'library' => array(
          'tocify/tocify',
        ),
      ),
    ];
    return $build;
  }

  /**
   * Format a boolean as string.
   *
   * @param bool $bool
   *   A boolean to be reformatted as string.
   *
   * @return string
   *   A string in the form of 'true' or 'false'.
   */
  private function formatBoolean($bool) {
    return $bool ? 'true' : 'false';
  }

}
