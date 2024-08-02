<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Blog",
    "imageClass" => "blog-background",
    "detail" => false
  ] ?>
  <?php get_template_part("/top/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
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
                    <?php get_template_part("/common/_blog-card"); ?>
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