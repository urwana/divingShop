<?php get_header(); ?>
<main>
  <?php
  $year = get_query_var('year');
  $month = get_query_var('month');
  echo "Year: " . esc_html($year) . "<br>";
  echo "Month: " . esc_html($month) . "<br>";
  $title = esc_html($year) . "年" . esc_html($month) . "月";
  $subKeyVisualData = [
    "pageTitle" => $title,
    "imageClass" => "blog-background",
    "detail" => false
  ] ?>
  <?php get_template_part("/common/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs"); ?>
  <div class="l-blog">
    <div class="blog">
      <div class="blog__inner inner">
        <div class="blog__body">
          <div class="blog__cards">
            <div class="blog-cards blog-cards--2col">
              <?php
              if (have_posts()) :
                while (have_posts()) :
                  the_post(); ?>
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
              else : ?>
                <p>ブログ記事の投稿はありません。</p>
              <?php endif;
              ?>
            </div>
            <div class="blog__pager">
              <?php get_template_part("/common/_pager"); ?>
            </div>
          </div>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>
  <section class="l-top-contact">
    <?php get_template_part("/common/_contact"); ?>
  </section>
</main>
<?php get_footer(); ?>