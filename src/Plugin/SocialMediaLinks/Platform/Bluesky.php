<?php
namespace Drupal\pixies_content_pack\Plugin\SocialMediaLinks\Platform;

use Drupal\social_media_links\PlatformBase;

/**
 * Provides 'behance' platform.
 *
 * @Platform(
 *   id = "bluesky",
 *   name = @Translation("Bluesky"),
 *   iconName = "bluesky",
 *   urlPrefix = "https://bsky.app/profile/",
 * )
 */
class Bluesky extends PlatformBase {}
