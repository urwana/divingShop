<?php $top = isset($args["top"]) ? $args["top"] : false; ?>

<div class="<?php echo $top ? 'blog-cards' : 'blog-cards blog-cards--2col'; ?>">
  <?php
  $year = get_query_var('year');
  $monthnum = get_query_var('monthnum');

  if (!$year) {
    $year = date('Y');
  }
  if (!$monthnum) {
    $monthnum = date('n');
  }

  $query_args = array(
    'post_type' => 'blog',
    'posts_per_page' => -1,
    'year' => $year,
    'monthnum' => $monthnum,
    'post_status' => 'publish'
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
  <?php endif; ?>
</div>