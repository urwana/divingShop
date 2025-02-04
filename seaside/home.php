<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "ブログ",
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
              else : ?>
                <p>ブログ記事の投稿はありません。</p>
              <?php endif;
              ?>
            </div>
            <div class="blog__pager">
              <?php get_template_part("/common/_pager"); ?>
            </div>
          </div>
          <div class="blog__sidebar">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>