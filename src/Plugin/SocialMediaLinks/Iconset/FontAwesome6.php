<?php

namespace Drupal\pixies_content_pack\Plugin\SocialMediaLinks\Iconset;

use Drupal\social_media_links\IconsetBase;
use Drupal\social_media_links\IconsetInterface;

/**
 * Provides 'fontawesome 6' iconset.
 *
 * @Iconset(
 *   id = "fontawesome6",
 *   publisher = "Font Awesome 6",
 *   publisherUrl = "http://fontawesome.github.io/",
 *   downloadUrl = "http://fortawesome.github.io/Font-Awesome/",
 *   name = "Font Awesome 6",
 * )
 */
class FontAwesome6 extends IconsetBase implements IconsetInterface {

  /**
   * {@inheritdoc}
   */
  public function setPath($iconset_id) {
    $this->path = $this->finder->getPath($iconset_id) ? $this->finder->getPath($iconset_id) : 'library';
  }

  /**
   * {@inheritdoc}
   */
  public function getStyle() {
    return [
      '2x' => 'fa-2x',
      '3x' => 'fa-3x',
      '4x' => 'fa-4x',
      '5x' => 'fa-5x',
      'in' => 'fa-in',
      'lg' => 'fa-lg',
      'fw' => 'fa-fw',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getIconElement($platform, $style) {
    $icon_name = $platform->getIconName();

    switch ($icon_name) {
      case 'vimeo':
        $icon_name = $icon_name . '-square';
        break;

      case 'googleplus':
        $icon_name = 'google-plus';
        break;

      case 'email':
        $icon_name = 'envelope';
        break;

      case 'website':
        $icon_name = 'home';
        break;

      case 'googleplay':
        $icon_name = 'google-play';
        break;

      case 'meetup':
        $icon_name = 'meetup';
        break;

      case 'patreon':
        $icon_name = 'patreon';
        break;
    }

    if ($icon_name == 'envelope' || $icon_name == 'home' || $icon_name == 'rss') {
      $icon = [
        '#type' => 'markup',
        '#markup' => "<i class='fa-regular fa-$icon_name fa-$style'></i>",
      ];
    }
    else {
      $icon = [
        '#type' => 'markup',
        '#markup' => "<i class='fa-brands fa-$icon_name fa-$style'></i>",
      ];
    }

    return $icon;
  }

  /**
   * {@inheritdoc}
   */
  public function getLibrary() {
    if (\Drupal::service('module_handler')->moduleExists('fontawesome')) {
      return parent::getLibrary();
    }
    else {
      return [
        'pixies_content_pack/fontawesome6.component',
      ];
    }
  }

  /**
   * {@inheritdoc}
   */
  public function getIconPath($icon_name, $style) {
    return NULL;
  }

}
