<?php

namespace Drupal\aemusic\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Creates an 'AEPlayer' Block
 * @Block(
 * id = "aeplayer",
 * admin_label = @Translation("AE Player"),
 * category = @Translation("AE Music"),
 * )
 */
class AEPlayer extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
	  '#type' => 'markup',
      '#markup' => $this->t('<audio id="aeplayer" controls><source id="aeplayer-src" src="" type="audio/mpeg" /></audio><div id="aeplayer-details"></div>'),
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
