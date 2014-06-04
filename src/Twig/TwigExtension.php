<?php

/**
 * @file
 * Contains \Drupal\supermegaultra\Twig\TwigExtension.
 */

namespace Drupal\supermegaultra\Twig;

/**
 * Provides additional filters and functions to Twig templates.
 */
class TwigExtension extends \Twig_Extension {

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return 'supermegaultra';
  }

  /**
   * {@inheritdoc}
   */
  public function getFunctions() {
    return array(
      new \Twig_SimpleFunction('get_path', 'drupal_get_path'),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFilters() {
    return array(
      new \Twig_SimpleFilter('classify', 'drupal_html_class'),
    );
  }

}
