<?php $top = $args["top"]; ?>

<div class="<?php echo $top ? 'blog-cards' : 'blog-cards blog-cards--2col' ?>">
  <?php
  if (is_front_page()) {
    $front_page_args = array(
      'post_type' => 'post',
      'posts_per_page' => 5
    );
    $front_page_query = new WP_Query($front_page_args);
    if ($front_page_query->have_posts()) :
      while ($front_page_query->have_posts()) :
        $front_page_query->the_post(); ?>
  <div class="blog-cards__item">
    <?php get_template_part("/common/_blog-card") ?>
  </div>
  <?php endwhile;
      wp_reset_postdata();
    else : ?>
  <p>ブログ記事の投稿はありません。</p>
  <?php endif;
  } elseif (is_home()) {
    if (have_posts()) :
      while (have_posts()) :
        the_post(); ?>
  <div class="blog-cards__item">
    <?php get_template_part("/common/_blog-card") ?>
  </div>
  <?php endwhile;
    else : ?>
  <p>ブログ記事の投稿はありません。</p>
  <?php endif;
  }
  ?>
</div>