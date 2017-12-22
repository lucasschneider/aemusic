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
      '#markup' => $this->t('
        <div id="aeplaylist-ctrls">
          <div id="ae-shuffle" class="ae-ctrl">
            <i class="fas fa-random"></i>
          </div>
          <div id="ae-back" class="ae-ctrl">
            <i class="fas fa-step-backward"></i>
          </div>
          <div id="ae-play" class="ae-ctrl">
            <i class="fas fa-play"></i>
          </div>
          <div id="ae-pause" class="ae-ctrl">
            <i class="fas fa-pause"></i>
          </div>
          <div id="ae-fwd" class="ae-ctrl">
            <i class="fas fa-step-forward"></i>
          </div>
          <div id="ae-repeat" class="ae-ctrl">
            <span class="fa-layers fa-fw">
              <i class="fas fa-sync"></i>
              <span id="ae-repeat-counter" class="fa-layers-counter">1</span>
            </span>
          </div>
        </div>
        <div id="aeplaylistWrapper">
          <div id="noPlaylist">The playlist is empty. click \'+\' next to a song to add it to the playlist.</div>
          <ol id="playlist">
          </ol>
        </div>'),
      '#attached' => array(
        'library' => array(
          'aemusic/fontawesome',
          'aemusic/aemusic',
          'aemusic/aeplaylist',
        )
      )
    );
  }
}
?>
