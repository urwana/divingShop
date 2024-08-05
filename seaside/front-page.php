<?php get_header(); ?>
<main>
  <div class="js-key-visual key-visual">
    <div class="swiper key-visual__swiper">
      <div class="js-opening opening">
        <figure class="opening__image-left">
          <picture>
            <source media="(max-width: 767px)"
              srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/opening/kv-l-sp.jpg" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/opening/kv-l.jpg"
              alt="オープニング左側の画像" />
          </picture>
        </figure>
        <figure class="opening__image-right">
          <picture>
            <source media="(max-width: 767px)"
              srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/opening/kv-r-sp.jpg" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/opening/kv-r.jpg"
              alt="オープニング右側の画像" />
          </picture>
        </figure>
        <div class="opening__title-container">
          <div class="opening__title">
            DIVING
          </div>
          <p class="opening__subtitle">
            into the ocean
          </p>
        </div>
      </div>
      <div class="swiper-wrapper key-visual__swiper-wrapper">
        <figure class="swiper-slide key-visual__swiper-slide">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php the_field("top_swiper_sp1") ?>" />
            <img src="<?php the_field("top_swiper_1") ?>" alt="<?php the_field("top_swiper_alt1") ?>" />
          </picture>
        </figure>
        <figure class="swiper-slide key-visual__swiper-slide">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php the_field("top_swiper_sp2") ?>" />
            <img src="<?php the_field("top_swiper_2") ?>" alt="<?php the_field("top_swiper_alt2") ?>" />
          </picture>
        </figure>
        <figure class="swiper-slide key-visual__swiper-slide">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php the_field("top_swiper_sp3") ?>" />
            <img src="<?php the_field("top_swiper_3") ?>" alt="<?php the_field("top_swiper_alt3") ?>" />
          </picture>
        </figure>
        <figure class="swiper-slide key-visual__swiper-slide">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php the_field("top_swiper_sp4") ?>" />
            <img src="<?php the_field("top_swiper_4") ?>" alt="<?php the_field("top_swiper_alt4") ?>" />
          </picture>
        </figure>
      </div>
    </div>
  </div>
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
  <section class="l-top-about">
    <?php get_template_part("/common/_about", null, ["top" => true]); ?>
  </section>
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
            <a href="/seaside/information" class="button"><span class="button__text">View more</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
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
              'post_type' => 'post',
              'posts_per_page' => 3
            );
            $the_query = new WP_Query($query_args);
            if ($the_query->have_posts()) :
              while ($the_query->have_posts()) :
                $the_query->the_post(); ?>
            <div class="blog-cards__item">
              <div class="blog-card">
                <a href="<?php the_permalink() ?>">
                  <div class="blog-card__inner">
                    <?php
                        if (has_post_thumbnail()) :
                        ?>
                    <figure class="campaign-card__image">
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
            <p>ブログ記事の投稿はありません。</p>
            <?php endif;
            ?>
          </div>
        </div>
        <div class="top-blog__button">
          <a href="/seaside/blog" class="button"><span class="button__text">View more</span>
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
  </section>
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
              <div class="top-price-list__group">
                <div class="top-price-list__subtitle lined-title--no-change">
                  ライセンス講習
                </div>
                <dl>
                  <div class="top-price-list__item">
                    <dt>オープンウォーターダイバーコース</dt>
                    <dd>¥50,000</dd>
                  </div>
                  <div class="top-price-list__item">
                    <dt>アドバンスドオープンウォーターコース</dt>
                    <dd>¥60,000</dd>
                  </div>
                  <div class="top-price-list__item">
                    <dt>レスキュー＋EFRコース</dt>
                    <dd>¥70,000</dd>
                  </div>
                </dl>
              </div>
              <div class="top-price-list__group">
                <div class="top-price-list__subtitle lined-title--no-change">
                  体験ダイビング
                </div>
                <dl>
                  <div class="top-price-list__item">
                    <dt>ビーチ体験ダイビング(半日)</dt>
                    <dd>¥7,000</dd>
                  </div>
                  <div class="top-price-list__item">
                    <dt>ビーチ体験ダイビング(1日)</dt>
                    <dd>¥14,000</dd>
                  </div>
                  <div class="top-price-list__item">
                    <dt>ボート体験ダイビング(半日)</dt>
                    <dd>¥10,000</dd>
                  </div>
                  <div class="top-price-list__item">
                    <dt>ボート体験ダイビング(1日)</dt>
                    <dd>¥18,000</dd>
                  </div>
                </dl>
              </div>
              <div class="top-price-list__group">
                <div class="top-price-list__subtitle lined-title--no-change">
                  ファンダイビング
                </div>
                <dl>
                  <div class="top-price-list__item">
                    <dt>ビーチダイビング(2ダイブ)</dt>
                    <dd>¥14,000</dd>
                  </div>
                  <div class="top-price-list__item">
                    <dt>ボートダイビング(2ダイブ)</dt>
                    <dd>¥18,000</dd>
                  </div>
                  <div class="top-price-list__item">
                    <dt>スペシャルダイビング(2ダイブ)</dt>
                    <dd>¥24,000</dd>
                  </div>
                  <div class="top-price-list__item">
                    <dt>ナイトダイビング(1ダイブ)</dt>
                    <dd>¥10,000</dd>
                  </div>
                </dl>
              </div>
              <div class="top-price-list__group">
                <div class="top-price-list__subtitle lined-title--no-change">
                  スペシャルダイビング
                </div>
                <dl>
                  <div class="top-price-list__item">
                    <dt>貸切ダイビング(2ダイブ)</dt>
                    <dd>¥24,000</dd>
                  </div>
                  <div class="top-price-list__item">
                    <dt>1日ダイビング(3ダイブ)</dt>
                    <dd>¥32,000</dd>
                  </div>
                  <div class="top-price-list__item">
                    <dt>ナイトダイビング(2ダイブ)</dt>
                    <dd>¥14,000</dd>
                  </div>
                </dl>
              </div>
            </div>
          </div>
        </div>
        <div class="top-price__button">
          <a href="/seaside/price" class="button"><span class="button__text">View more</span></a>
        </div>
      </div>
    </div>
  </section>
  <section class="l-top-contact">
    <?php get_template_part("/common/_contact"); ?>
  </section>
</main>
<?php get_footer(); ?>