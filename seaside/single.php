<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Blog",
    "imageClass" => "blog-background",
    "detail" => true
  ]; ?>
  <?php get_template_part("/common/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs"); ?>
  <section class="l-blog">
    <div class="blog">
      <div class="blog__inner inner">
        <div class="blog__body">
          <div class="blog__detail-contents-wrapper">
            <div class="blog__detail-contents">
              <div class="blog__detail-date">
                <?php if (have_posts()) : ?>
                  <?php while (have_posts()) : the_post(); ?>
                    <time datetime="<?php the_time("c"); ?>"><?php the_time("Y/m/d"); ?></time>
              </div>
              <h1 class="blog__detail-title title-line"><?php the_title(); ?></h1>
              <figure class="blog__detail-image">
                <?php
                    if (has_post_thumbnail()) :
                      the_post_thumbnail();
                    endif;
                ?>
              </figure>
              <div class="blog__detail-the-contents">
                <?php the_content(); ?>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          <div class="blog__detail-pager">
            <?php
            $prev_url = "";
            $next_url = "";
            $prev = get_previous_post();
            if (!empty($prev)) :
              $prev_url = get_permalink($prev->ID);
            endif;
            $next = get_next_post();
            if (!empty($next)) :
              $next_url = get_permalink($next->ID);
            endif;
            ?>
            <?php get_template_part("/common/_pager-detail", null, ["prev_url" => $prev_url, "next_url" => $next_url]); ?>
          </div>
            </div>
          </div> <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="l-top-contact">
    <?php get_template_part("./common/_contact") ?>
  </section>
</main>
<?php get_footer(); ?>