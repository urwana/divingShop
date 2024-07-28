<?php if (get_post_type() == 'voice') : ?>
<div class="voice-card-sidebar">
  <div>
    <div class="voice-card-sidebar__head">
      <div class="voice-card-sidebar__info">
        <div class="voice-card-sidebar__meta">
        </div>
        <figure class="js-colorAnimation voice-card-sidebar__image">
          <?php
            if (has_post_thumbnail()) : ?>
          <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>" width="294" height="218" />
        </figure>
        <?php
            endif;
        ?>
        </picture>
        </figure>
        <div class="voice-card-sidebar__person">
          <?php echo get_field("person"); ?>
        </div>
        <div class="voice-card-sidebar__title">
          <div><?php the_title(); ?></div>
        </div>
      </div>
    </div>
    <div class="voice-card-sidebar__button">
      <a href="<?php echo $voiceCardData["link"]; ?>" class="button"><span class="button__text">View more</span></a>
    </div>
  </div>
</div>
<?php endif; ?>