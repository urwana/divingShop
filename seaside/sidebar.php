<aside class="sidebar">
  <div class="sidebar__popular-articles">
    <div class="sidebar-popular-articles">
      <h2 class="sidebar-popular-articles__title sidebar-title">
        <figure class="sidebar-title__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/title-whale.svg" alt="クジラアイコン"
            width="50" height="50" />
        </figure>
        <p class="sidebar-title__text">
          人気記事
        </p>
      </h2>
      <div class="sidebar-popular-articles__cards">
        <div class="article-cards">
          <?php
          $popular_posts = get_popular_posts();
          if ($popular_posts->have_posts()) :
            while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
          <div class="article-card">
            <a class="article-card__inner" href="<?php the_permalink(); ?>">
              <figure class="article-card__image">
                <?php
                    if (has_post_thumbnail()) :
                    ?>
                <figure class="campaign-card__image">
                  <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>" width="121"
                    height="90" />
                </figure>
                <?php
                    endif;
                    ?>
              </figure>
              <div class="article-card__body">
                <time class="article-card__date" datetime="<?php the_time("c") ?>"><?php the_time("Y/m/d"); ?>
                </time>
                <div class="article-card__title"><?php the_title(); ?></div>
              </div>
            </a>
          </div> <?php endwhile;
                    wp_reset_postdata();
                  endif;
                      ?>
        </div>
      </div>
    </div>
  </div>
  <div class="sidebar__voice">
    <div class="sidebar-voice">
      <h2 class="sidebar-voice__title sidebar-title">
        <figure class="sidebar-title__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/title-whale.svg" alt="クジラアイコン"
            width="50" height="50" />
        </figure>
        <p class="sidebar-title__text">
          口コミ
        </p>
      </h2>
      <div class="sidebar-voice__card">
        <div class="voice-cards--sidebar">
          <?php
          $args_voice = array(
            'post_type'      => 'voice',
            'posts_per_page' => 1,
            'orderby'        => 'date',
          );
          $query_voice = new WP_Query($args_voice);
          if ($query_voice->have_posts()) :
            while ($query_voice->have_posts()) :
              $query_voice->the_post(); ?>
          <div class="voice-cards-sidebar__item">
            <div class="voice-card-sidebar">
              <div>
                <div class="voice-card-sidebar__head">
                  <div class="voice-card-sidebar__info">
                    <div class="voice-card-sidebar__meta">
                    </div>
                    <figure class="js-colorAnimation voice-card-sidebar__image">
                      <?php
                          if (has_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>" width="294"
                        height="218" />
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
                  <a href="<?php echo esc_url(home_url("/voice")); ?>" class="button"><span class="button__text">View
                      more</span></a>
                </div>
              </div>
            </div>
          </div>
          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="sidebar__campaign">
    <div class="sidebar-campaign">
      <h2 class="sidebar-campaign__title sidebar-title">
        <figure class="sidebar-title__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/title-whale.svg" alt="クジラアイコン"
            width="50" height="50" />
        </figure>
        <p class="sidebar-title__text">
          キャンペーン
        </p>
      </h2>
      <div class="sidebar-campaign__cards">
        <div class="campaign-cards--sidebar">
          <?php
          $campaign_args = [
            'post_type' => 'campaign',
            'posts_per_page' =>  2,
          ];
          $the_query = new WP_Query($campaign_args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) :
              $the_query->the_post(); ?>
          <a class="campaign-card js-card<?php echo $campaignCard["dataType"] ?>"
            href="<?php echo esc_url(home_url("/campaign")); ?>">
            <figure class="campaign-card__image campaign-card__image--sidebar">
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
            <div class="campaign-card__body campaign-card__body--side-bar">
              <div class="campaign-card__top">
                <div class="campaign-card__title campaign-card__title--sidebar">
                  <?php the_title(); ?></div>
              </div>
              <div class="campaign-card__bottom">
                <p class="campaign-card__explain campaign-card__explain--sidebar">
                  <?php the_field("main_text"); ?>
                </p>
                <div class="campaign-card__price-container">
                  <div class="price-container">
                    <span
                      class="price-container__cancelled-price price-container__cancelled-price--sidebar">¥<?php the_field("cancelled_price") ?></span>
                    <span
                      class="price-container__price price-container__price--sidebar">¥<?php the_field("price") ?></span>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <?php endwhile;
          else : ?>
          <p>投稿が見つかりませんでした。</p>
          <?php endif;
          wp_reset_postdata();
          ?>
        </div>
        <div class="sidebar-campaign__button">
          <a href="<?php echo esc_url(home_url("/blog")); ?>" class="button"><span class="button__text">View
              more</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="sidebar__archive">
    <?php
    $posts_by_months = get_posts_by_months();
    ?>
    <div class=" sidebar-archive">
      <h2 class="sidebar-archive__title sidebar-title">
        <figure class="sidebar-title__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/title-whale.svg" alt="クジラアイコン"
            width="50" height="50" />
        </figure>
        <p class="sidebar-title__text">
          アーカイブ
        </p>
      </h2>
      <div class="sidebar-archive__lists">
        <div class="sidebar-archive__toggle-hierarchy">
          <div class="sidebar-archive__toggle-hierarchy-inner">
            <?php foreach ($posts_by_months as $year => $months) : ?>
            <div class="sidebar-archive__year">
              <a href="" class="js-yearLabel sidebar-archive__year-label"><?php echo esc_html($year); ?></a>
              <div class=" js-yearBody sidebar-archive__year-body">
                <?php foreach ($months as $month) : ?>
                <div class="sidebar-archive__month">
                  <?php $url = get_month_link($year, $month); ?>
                  <a href="<?php echo esc_url($url); ?>" class="js-monthLabel sidebar-archive__month-label">
                    <?php echo esc_html($month); ?>月
                  </a>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</aside>