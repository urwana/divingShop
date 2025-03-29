<?php get_header(); ?>
<main>
  <div class="js-key-visual key-visual">
    <div class="swiper key-visual__swiper">
      <div class="js-opening opening">
        <figure class="opening__image-left">
          <picture>
            <source media="(max-width: 767px)"
              srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/opening/kv-l-sp.webp" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/opening/kv-l.webp"
              alt="オープニング左側の画像" />
          </picture>
        </figure>
        <figure class="opening__image-right">
          <picture>
            <source media="(max-width: 767px)"
              srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/opening/kv-r-sp.webp" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/opening/kv-r.webp"
              alt="オープニング右側の画像" />
          </picture>
        </figure>
        <div class="opening__title-container">
          <div class="opening__title">
            OKI tour
          </div>
          <p class="opening__subtitle">
            The jewel islands of Japan’s tropical south, welcome to Okinawa.
          </p>
        </div>
      </div>
      <div class="swiper-wrapper key-visual__swiper-wrapper">
        <?php for ($i = 1; $i <= 9; $i++) : ?>
          <?php
          $image = get_field("top_swiper_$i");
          $image_sp = get_field("top_swiper_sp$i");
          $image_alt = get_field("top_swiper_alt$i");
          $fallback_image = "no-image.jpg";
          $fallback_alt = "フォールバック画像";
          ?>
          <?php if (!empty($image) && !empty($image_sp)) : ?>
            <figure class="swiper-slide key-visual__swiper-slide">
              <picture>
                <?php if ($image_sp) : ?>
                  <source media="(max-width: 767px)" srcset="<?php echo esc_url($image_sp); ?>" />
                <?php endif; ?>
                <?php if ($image): ?>
                  <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image_alt); ?>" />
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.svg"
                    alt="画像がない場合の代替画像" />
                <?php endif; ?>
              </picture>
            </figure>
          <?php endif; ?>
        <?php endfor; ?>
      </div>
    </div>
  </div>
  <section class="l-top-tour">
    <div class="top-tour">
      <div class="top-tour__inner inner">
        <div class="top-tour__title">
          <div class="section-title">
            <p class="section-title__word">tour</p>
            <h2 class="section-title__japan">キャンペーン</h2>
          </div>
        </div>
        <div class="top-tour__swiper">
          <?php
          $args = array(
            "post_type" => "tour",
            'posts_per_page' => 4,
          );
          $the_query = new WP_Query($args);
          ?>
          <div class="js-swiper-tour swiper-tour">
            <div class="swiper-wrapper swiper-tour__wrapper">
              <?php if (have_posts()) {
                while ($the_query->have_posts()) {
                  $the_query->the_post();
              ?>
                  <div class="swiper-slide swiper-tour__swiper-slide">
                    <div class="top-tour__card">
                      <a class="tour-card" href="<?php echo esc_url(home_url("/tour")); ?>">
                        <?php
                        if (has_post_thumbnail()) :
                        ?>
                          <figure class="tour-card__image">
                            <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>" />
                          </figure>
                        <?php
                        endif;
                        ?>
                        <p class="">
                          <?php the_field("ranking"); ?>
                        </p>
                        <p class="">
                          <?php the_field("area"); ?>
                        </p>
                        <p class="">
                          <?php the_field("tel"); ?>
                        </p>
                        <p class="">
                          <?php the_field("zip"); ?>
                          <?php the_field("address"); ?>
                        </p>
                        <p class="">
                          <?php the_field("web"); ?>
                        </p>
                        <div class="tour-card__body">
                          <div class="tour-card__top">
                            <div class="tour-card__label label-container">
                              <?php
                              $post_id = get_the_ID();
                              $tour_terms = get_the_terms($post_id, 'tour_taxonomy');
                              if ($tour_terms && !is_wp_error($tour_terms)) :
                                foreach ($tour_terms as $term) : ?>
                                  <span class="label">
                                    <?php echo esc_html($term->name); ?>
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
                                <?php if (get_field("cancelled_price")): ?>
                                  <span
                                    class="price-container__cancelled-price">¥<?php the_field("cancelled_price"); ?></span>
                                <?php endif ?>
                                <?php if (get_field("price")): ?>
                                  <span class="price-container__price">¥<?php the_field("price") ?></span>
                                <?php endif ?>
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
            <div class="swiper-tour__button-prev u-desktop">
              <div class="button-scroll--left"></div>
            </div>
            <div class="swiper-tour__button-next u-desktop">
              <div class="button-scroll--right"></div>
            </div>
          </div>
        </div>
        <div class="top-tour__button">
          <a href="<?php echo esc_url(home_url("/tour")); ?>" class="button"><span class="button__text">View
              more</span></a>
        </div>
      </div>
    </div>
  </section>
  <section class="l-top-about">
    <?php get_template_part("/common/_about", null, ["top" => true]); ?>
  </section>
  <section class=" l-top-information">
    <div class="top-information">
      <div class="top-information__inner inner">
        <div class="top-information__title">
          <div class="section-title">
            <p class="section-title__word">Information</p>
            <h2 class="section-title__japan">ダイビング情報</h2>
          </div>
        </div>
        <div class="top-information__contents">
          <figure class="js-colorAnimation top-information__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/information.jpg" alt="海の中 珊瑚と魚たち"
              width="540" height="356" />
          </figure>
          <div class="top-information__info">
            <div class="top-information__info-title">
              <div class="lined-title lined-title--medium">ライセンス講習</div>
            </div>
            <p class="top-information__text">
              当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />
              正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
            </p>
            <div class="top-information__button">
              <a href="<?php echo esc_url(home_url("/information")); ?>" class="button"><span class="button__text">View
                  more</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="l-top-blog">
    <div class="top-blog">
      <div class="top-blog__inner inner">
        <div class="top-blog__title">
          <div class="section-title section-title--blog">
            <p class="section-title__word">Blog</p>
            <h2 class="section-title__japan">ブログ</h2>
          </div>
        </div>
        <div class="top-blog__cards">
          <div class="blog-cards">
            <?php
            $query_args = array(
              'posts_per_page' => 3
            );
            $the_query = new WP_Query($query_args);
            if ($the_query->have_posts()) :
              while ($the_query->have_posts()) :
                $the_query->the_post(); ?>
                <div class=" blog-cards__item">
                  <div class="blog-card">
                    <a href="<?php the_permalink() ?>">
                      <div class="blog-card__inner">
                        <?php
                        if (has_post_thumbnail()) :
                        ?>
                          <figure class="tour-card__image">
                            <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>" />
                          </figure>
                        <?php
                        endif;
                        ?>
                        <div class="blog-card__content">
                          <time class="blog-card__date"
                            datetime="<?php the_time("c"); ?>"><?php the_time("Y/m/d"); ?></time>
                          <div class="blog-card__title"><?php the_title(); ?></div>
                          <div class="blog-card__text">
                            <?php get_custom_excerpt(92); ?>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_postdata(); ?>
            <?php else : ?>
              <div>ブログ記事の投稿はありません。</div>
            <?php endif;
            ?>
          </div>
        </div>
        <div class="top-blog__button">
          <a href="<?php echo esc_url(home_url("/blog")); ?>" class="button"><span class="button__text">View
              more</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="l-top-voice">
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
            $voice_args = [
              'post_type' => 'voice',
              'posts_per_page' => 2,
            ];
            $the_voice_query = new WP_Query($voice_args);
            if ($the_voice_query->have_posts()) :
              while ($the_voice_query->have_posts()) :
                $the_voice_query->the_post(); ?>
                <div class=" voice-cards__item">
                  <div class="voice-card js-card<?php echo $voiceCardData["dataType"]; ?>">
                    <a href="">
                      <div class="voice-card__head">
                        <div class="voice-card__info">
                          <div class="voice-card__meta">
                            <?php $age_type = get_field('age_type'); ?>
                            <?php $age = $age_type['age']; ?>
                            <?php $type = $age_type['type']; ?>
                            <?php if ($age && $type): ?>
                              <div class="voice-card__person">
                                <?php echo $age; ?>(<?php echo $type; ?>)
                              </div>
                            <?php endif; ?>
                            <div class=" voice-card__label">
                              <span class="label">
                                <?php
                                $post_id = get_the_ID();
                                $tour_terms = get_the_terms($post_id, 'voice_taxonomy');
                                if ($tour_terms && !is_wp_error($tour_terms)) :
                                  foreach ($tour_terms as $term) :
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
                            <figure class="tour-card__image">
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
              <div>投稿が見つかりませんでした。</div>
            <?php endif;
            wp_reset_postdata();
            ?>
          </div>
        </div>
        <div class="top-voice__button">
          <a href="<?php echo esc_url(home_url("/voice")); ?>" class="button"><span class="button__text">View
              more</span></a>
        </div>
      </div>
    </div>
  </section>
  <?php $price_lists = CFS()->get('price_lists', 13); ?>
  <?php if ($price_lists): ?>
    <section class="l-top-price">
      <div class="top-price">
        <div class="top-price__inner inner">
          <div class="top-price__title">
            <div class="section-title">
              <p class="section-title__word">Price</p>
              <h2 class="section-title__japan">料金一覧</h2>
            </div>
          </div>
          <div class="top-price__contents">
            <figure class="js-colorAnimation top-price__image">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-price-sp.jpg"
                  media="(max-width: 767px)" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-price-pc.jpg" alt="沖縄の海 イメージ"
                  width="492" height="746" />
              </picture>
            </figure>
            <div class="top-price__list">
              <div class="top-price-list">
                <?php $price_lists_item = $price_lists[0]["price_lists_item"]; ?>
                <?php if (!empty($price_lists) && isset($price_lists_item)) : ?>
                  <?php foreach ($price_lists_item as $price_list_group) : ?>
                    <div class="top-price-list__group">
                      <div class="top-price-list__subtitle lined-title--no-change">
                        <?php echo $price_list_group["price_list_title"]; ?>
                      </div>
                      <dl>
                        <?php
                        $price_list_body = $price_list_group["price_list_body"];
                        foreach ($price_list_body as $price_list) : ?>
                          <div class="top-price-list__item">
                            <dt><?php echo $price_list["price_title"] ?></dt>
                            <dd>¥ <?php echo number_format((int)$price_list["price"]); ?></dd>
                          </div>
                        <?php endforeach; ?>
                      </dl>
                    </div>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="top-price__button">
            <a href="<?php echo esc_url(home_url("/price")); ?>" class="button"><span class="button__text">View
                more</span></a>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
</main>
<?php get_footer(); ?>