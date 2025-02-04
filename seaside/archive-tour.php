<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "キャンペーン",
    "imageClass" => "tour-background",
    "detail" => false
  ] ?>
  <?php get_template_part("/common/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs"); ?>
  <div class="l-tour">
    <div class="tour">
      <div class="tour__inner inner">
        <div class="tour__tab">
          <?php get_template_part("/common/_tab-card", null, ["post_type" => "tour", "taxonomy" => "tour_taxonomy"]); ?>
        </div>
        <div class="tour__cards">
          <div class="tour-cards">
            <?php
            if (have_posts()) :
              while (have_posts()) :
                the_post(); ?>
                <a class="tour-card tour-card--page" href="<?php echo esc_url(home_url("/tour/")); ?>">
                  <figure class="tour-card__image">
                    <?php if (has_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>" />
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.svg"
                        alt="画像がない場合の代替画像" style="object-fit:contain" />
                    <?php endif; ?>
                  </figure>
                  <div class="tour-card__body">
                    <div class="tour-card__top">
                      <div class="tour-card__label label-container">
                        <?php
                        $post_id = get_the_ID();
                        $tour_terms = get_the_terms($post_id, 'tour_taxonomy');
                        if ($tour_terms && !is_wp_error($tour_terms)) :
                          foreach ($tour_terms as $term) : ?>
                            <span class="label">
                              <?php echo esc_html($term->name) . ' '; ?>
                            </span>
                        <?php endforeach;
                        endif; ?>
                      </div>
                      <div class="tour-card__title"><?php the_title(); ?></div>
                    </div>
                    <div class="tour-card__bottom">
                      <p class="tour-card__explain">
                        <?php the_field("main_text"); ?>
                      </p>
                      <div class="tour-card__price-container">
                        <div class="price-container">
                          <?php if (!empty(get_field("cancelled_price"))): ?>
                            <span class="price-container__cancelled-price">¥<?php the_field("cancelled_price") ?></span>
                          <?php endif; ?>
                          <?php if (!empty(get_field("price"))): ?>
                            <span class="price-container__price">¥<?php the_field("price") ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <div class="tour-card__bottom2">
                      <div class="tour-card__text">
                        <?php $excerpt = get_the_excerpt();
                        echo $excerpt; ?></div>
                      <div class="tour-card__date-container">
                        <p class="tour-card__date">
                          <?php
                          $start_date_raw = get_field('start_date');
                          $end_date_raw = get_field('end_date');
                          if ($start_date_raw) {
                            $start_date = DateTime::createFromFormat('Ymd', $start_date_raw);
                          }
                          if ($end_date_raw) {
                            $end_date = DateTime::createFromFormat('Ymd', $end_date_raw);
                          }
                          ?>
                          <?php if ($start_date && $end_date): ?>
                            <time
                              datetime="<?php echo esc_attr($start_date->format('Y-m-d')); ?>"><?php echo esc_html($start_date->format('Y/m/d')); ?></time>
                            -
                            <time
                              datetime="<?php echo esc_attr($end_date->format('Y-m-d')); ?>"><?php echo esc_html($end_date->format('Y/m/d')); ?></time>
                          <?php endif; ?>
                        </p>
                        <?php if (get_field("has_link")) : ?>
                          <p class="tour-card__link">
                            ご予約・お問い合わせはコチラ</p>
                        <?php endif; ?>
                      </div>
                      <div class="tour-card__button">
                        <div class="js-contact-button button"><span class="button__text">Contact us</span></div>
                      </div>
                    </div>
                  </div>
                </a>
              <?php endwhile; ?>
            <?php else : ?>
              <div>現在キャンペーンはございません。</div>
            <?php endif;
            wp_reset_postdata();
            ?>
          </div>
        </div>
        <div class="tour__pager">
          <?php get_template_part("/common/_pager"); ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>