<div class="voice-card js-card<?php echo $voiceCardData["dataType"] ?>">
  <a href="">
    <div class="voice-card__head">
      <div class="voice-card__info">
        <div class="voice-card__meta">
          <div class="voice-card__person">人</div>
          <div class="voice-card__label">
            <span class="label">ラベル</span>
          </div>
        </div>
        <div class="voice-card__title">
          <div class="lined-title">
            <?php the_title(); ?>
          </div>
        </div>
      </div>
      <figure class="js-colorAnimation voice-card__image">
        <?php
        if (has_post_thumbnail()) {
        ?>
        <figure class="campaign-card__image">
          <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>" />
        </figure>
        <?php
        };
        ?>
      </figure>
    </div>
    <div class="voice-card__text">
      <?php the_excerpt() ?>
    </div>
  </a>
</div>