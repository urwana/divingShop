<?php $top = isset($args["top"]) ? $args["top"] : false; ?>

<div class="<?php echo $top ? 'blog-cards' : 'blog-cards blog-cards--2col'; ?>">
  <?php
  if (is_front_page()) :
    $query_args = array(
      'post_type' => 'post',
      'posts_per_page' => $top ? 3 : 10
    );
    $the_query = new WP_Query($query_args);
  else :
    $the_query = $wp_query; // デフォルトのクエリを使用
  endif;

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