<?php $voiceCardData = $args["voiceCardData"]; ?>
<div class="voice-card-sidebar">
  <div>
    <div class="voice-card-sidebar__head">
      <div class="voice-card-sidebar__info">
        <div class="voice-card-sidebar__meta">
        </div>
        <figure class="js-colorAnimation voice-card-sidebar__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri();
                            echo $voiceCardData["imgPathSp"] ?>" media="(max-width: 767px)" />
            <img src="<?php echo get_template_directory_uri();
                      echo $voiceCardData["imgPathPc"] ?>" alt="<?php echo $voiceCardData["alt"] ?>" width="294"
              height="218" />
          </picture>
        </figure>
        <div class="voice-card-sidebar__person">
          <?php echo $voiceCardData["person"] ?>
        </div>
        <div class="voice-card-sidebar__title">
          <div><?php echo $voiceCardData["title"] ?></div>
        </div>
      </div>
    </div>
    <div class="voice-card-sidebar__button">
      <a href="<?php echo $voiceCardData["link"] ?>" class="button"><span class="button__text">View more</span></a>
    </div>
  </div>
</div>