<?php $top = isset($args["top"]) ? $args["top"] : false; ?>

<div class="<?php echo $top ? 'blog-cards' : 'blog-cards blog-cards--2col'; ?>">
  <?php
  $year = get_query_var('year');
  $month = get_query_var('monthnum');

  // クエリ引数の初期設定
  $query_args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'post_status' => 'publish'
  );
  if ($year) {
    $query_args['year'] = $year;
  }
  if ($month) {
    $query_args['monthnum'] = $month;
  }
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