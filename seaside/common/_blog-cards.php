<?php $page = isset($args["page"]) ? $args["page"] : false; ?>

<div class="<?php echo $page ? 'blog-cards blog-cards--2col' : 'blog-cards'; ?>">
  <?php
  if ($page) {
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
  } else {
    $query_args = array(
      'post_type' => 'post',
      'posts_per_page' => 3
    );
    $the_query = new WP_Query($query_args);
    if ($the_query->have_posts()) :
      while ($the_query->have_posts()) :
        $the_query->the_post(); ?>
  <div class="blog-cards__item">
    <?php get_template_part("/common/_blog-card"); ?>
  </div>
  <?php endwhile;
      wp_reset_postdata();
    else : ?>
  <p>ブログ記事の投稿はありません。</p>
  <?php endif;
  }
  ?>
</div>