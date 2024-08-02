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
                      <time class="blog-card__date" datetime="<?php the_time("c"); ?>"><?php the_time("Y/m/d"); ?></time>
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