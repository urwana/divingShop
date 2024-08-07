<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Campaign",
    "imageClass" => "campaign-background",
    "detail" => false
  ] ?>
  <?php get_template_part("/common/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs"); ?>
  <div class="l-campaign">
    <div class="campaign">
      <div class="campaign__inner inner">
        <div class="campaign__tab">
          <?php get_template_part("/common/_tab-card", null, ["post_type" => "campaign", "taxonomy" => "campaign_taxonomy"]); ?>
        </div>
        <div class="campaign__cards">
          <div class="campaign-cards">
            <?php
            if (have_posts()) :
              while (have_posts()) :
                the_post(); ?>
            <a class="campaign-card campaign-card--page" href="<?php echo esc_url(home_url("/campaign/")); ?>">
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
            <?php endwhile; ?>
            <?php else : ?>
            <p>投稿が見つかりませんでした。</p>
            <?php endif;
            wp_reset_postdata();
            ?>
          </div>
        </div>
        <div class="campaign__pager">
          <?php get_template_part("/common/_pager"); ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>