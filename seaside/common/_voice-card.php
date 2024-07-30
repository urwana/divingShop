<div class="voice-card js-card<?php echo $voiceCardData["dataType"]; ?>">
  <a href="">
    <div class="voice-card__head">
      <div class="voice-card__info">
        <div class="voice-card__meta">
          <div class="voice-card__person"><?php echo get_field("person"); ?></div>
          <div class="voice-card__label">
            <span class="label">
              <?php
              $post_id = get_the_ID();
              $campaign_terms = get_the_terms($post_id, 'voice_taxonomy');
              if ($campaign_terms && !is_wp_error($campaign_terms)) :
                foreach ($campaign_terms as $term) :
                  echo esc_html($term->name) . ' ';
                endforeach;
              endif; ?>
            </span>
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
        if (has_post_thumbnail()) :
        ?>
        <figure class="campaign-card__image">
          <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>" />
        </figure>
        <?php
        endif;
        ?>
      </figure>
    </div>
    <div class="voice-card__text">
      <?php get_custom_excerpt(250); ?>
    </div>
  </a>
</div>