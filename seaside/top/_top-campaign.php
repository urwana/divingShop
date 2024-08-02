<section class="l-top-campaign">
  <div class="top-campaign">
    <div class="top-campaign__inner inner">
      <div class="top-campaign__title">
        <div class="section-title">
          <p class="section-title__word">Campaign</p>
          <h2 class="section-title__japan">キャンペーン</h2>
        </div>
      </div>
      <div class="top-campaign__swiper">
        <?php
        $args = array(
          "post_type" => "campaign",
          'posts_per_page' => 4,
        );
        $the_query = new WP_Query($args);
        ?>
        <div class="js-swiper-campaign swiper-campaign">
          <div class="swiper-wrapper swiper-campaign__wrapper">
            <?php if (have_posts()) {
              while ($the_query->have_posts()) {
                $the_query->the_post();
            ?>
                <div class="swiper-slide swiper-campaign__swiper-slide">
                  <div class="top-campaign__card">




                    <a class="campaign-card" href="/seaside/campaign/">
                      <?php
                      if (has_post_thumbnail()) :
                      ?>
                        <figure class="campaign-card__image">
                          <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>" />
                        </figure>
                      <?php
                      endif;
                      ?>
                      <div class="campaign-card__body">
                        <div class="campaign-card__top">
                          <div class="campaign-card__label label-container">
                            <span class="label">
                              <?php
                              $post_id = get_the_ID();
                              $campaign_terms = get_the_terms($post_id, 'campaign_taxonomy');
                              if ($campaign_terms && !is_wp_error($campaign_terms)) :
                                foreach ($campaign_terms as $term) :
                                  echo esc_html($term->name) . ' ';
                                endforeach;
                              endif; ?>
                            </span>
                          </div>
                          <div class="campaign-card__title"><?php the_title(); ?></div>
                        </div>
                        <div class="campaign-card__bottom">
                          <p class="campaign-card__explain">
                            <?php the_field("main_text"); ?>
                          </p>
                          <div class="campaign-card__price-container">
                            <div class="price-container">
                              <span class="price-container__cancelled-price">¥<?php the_field("cancelled_price") ?></span>
                              <span class="price-container__price">¥<?php the_field("price") ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>









                  </div>
                </div>
            <?php }
            }; ?>
          </div>
          <div class="swiper-campaign__button-prev u-desktop">
            <div class="button-scroll--left"></div>
          </div>
          <div class="swiper-campaign__button-next u-desktop">
            <div class="button-scroll--right"></div>
          </div>
        </div>
      </div>
      <div class="top-campaign__button">
        <a href="/seaside/campaign" class="button"><span class="button__text">View more</span></a>
      </div>
    </div>
  </div>
</section>