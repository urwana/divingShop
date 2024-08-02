<div class="top-voice">
  <div class="top-voice__inner inner">
    <div class="top-voice__title">
      <div class="section-title">
        <p class="section-title__word">Voice</p>
        <h2 class="section-title__japan">お客様の声</h2>
      </div>
    </div>
    <div class="top-voice__cards">

      <div class="voice-cards">
        <?php
        $taxonomy = 'voice_taxonomy';
        $term_slug = get_query_var('term');

        $tax_query = [];
        if ($term_slug) {
          $tax_query = [
            [
              'taxonomy' => $taxonomy,
              'field'    => 'slug',
              'terms'    => $term_slug,
            ],
          ];
        }
        $voice_args = [
          'post_type' => 'voice',
          'posts_per_page' => 2,
          'tax_query' => $tax_query,
          'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
        ];
        $the_voice_query = new WP_Query($voice_args);
        if ($the_voice_query->have_posts()) :
          while ($the_voice_query->have_posts()) :
            $the_voice_query->the_post(); ?>
            <div class="voice-cards__item">
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
            </div>
          <?php endwhile; ?>
        <?php else : ?>
          <p>投稿が見つかりませんでした。</p>
        <?php endif;

        wp_reset_postdata();
        ?>
      </div>
    </div>





















    <div class="top-voice__button">
      <a href="/seaside/voice" class="button"><span class="button__text">View more</span></a>
    </div>
  </div>
</div>