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
      '#markup' => $this->t('<div id="aeplaylist-ctrls"><div class="ae-ctrl"><i class="fas fa-random"></i></div><div class="ae-ctrl"><i class="fas fa-step-backward"></i></div><div class="ae-ctrl"><i class="fas fa-play"></i></div><div class="ae-ctrl"><i class="fas fa-pause"></i></div><div class="ae-ctrl"><i class="fas fa-step-forward"></i></div><div class="ae-ctrl"><i class="fas fa-sync"></i></div></div>'),
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
