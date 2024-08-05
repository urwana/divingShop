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
          <div class="'campaign-cards">
            <?php
            $taxonomy = 'campaign_taxonomy';
            $term_slug = get_query_var('term');
            $campaign_args = [
              'post_type' => 'campaign',
              'posts_per_page' =>  4,
              'tax_query' => $term_slug ? [
                [
                  'taxonomy' => $taxonomy,
                  'field'    => 'slug',
                  'terms'    => $term_slug,
                ],
              ] : [],
              'paged' => get_query_var('paged', 1),
            ];
            if (have_posts()) :
              while (have_posts()) :
                the_post(); ?>
                <a class="campaign-card campaign-card--page js-card<?php echo $campaignCard["dataType"] ?>" href="<?php echo esc_url(home_url("/campaign")); ?>">
                  <figure class="campaign-card__image">
                    <?php
                    if (has_post_thumbnail()) :
                    ?>
                      <figure class=" campaign-card__image">
                        <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>" />
                      </figure>
                    <?php
                    endif;
                    ?>
                  </figure>
                  <div class="campaign-card__body campaign-card__body--page">
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
                      </div>
                      <div class="campaign-card__title campaign-card__title--page">
                        <?php the_title(); ?></div>
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
                    <?php if (!$sideBar) : ?>
                      <div class="campaign-card__bottom2">
                        <div class="campaign-card__text">
                          <?php $excerpt = get_the_excerpt();
                          echo $excerpt; ?></div>
                        <div class="campaign-card__date-container">
                          <p class="campaign-card__date">
                            <time datetime="2023-06-01"><?php the_field("start_date") ?></time>
                            -
                            <time datetime="2023-09-30"><?php the_field("end_date") ?></time>
                          </p>
                          <?php if (get_field("has_link")) : ?>
                            <p class="campaign-card__link">
                              ご予約・お問い合わせはコチラ</p>
                          <?php endif; ?>
                        </div>
                        <div class="campaign-card__button">
                          <div class="js-contact-button button"><span class="button__text">Contact us</span></div>
                        </div>
                      </div>
                    <?php endif; ?>
                  </div>
                </a>
              <?php endwhile; ?>
            <?php else : ?>
              <p>投稿が見つかりませんでした。</p>
            <?php endif;
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