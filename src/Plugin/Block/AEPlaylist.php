<?php

namespace Drupal\aemusic\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Creates an 'AEPlaylist' Block
 * @Block(
 * id = "aeplaylist",
 * admin_label = @Translation("AE Playlist"),
 * category = @Translation("AE Music"),
 * )
 */
class AEPlaylist extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
	  '#type' => 'markup',
      '#markup' => $this->t('<div id="aeplaylist-ctrls"><i class="fas fa-random"></i></div>'),
      '#attached' => array(
	    'library' => array(
		  'aemusic/fontawesome',
		  'aemusic/aemusic',
		)
	  )
	);
  }
}
?>
