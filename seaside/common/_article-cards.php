<div class="article-cards">
  <?php
  // 投稿タイプとステータスを確認するクエリ
  // $test_query = new WP_Query(array(
  //   'post_type' => 'post',
  //   'post_status' => array('publish', 'acf-disabled'),
  //   'posts_per_page' => -1
  // ));

  $popular_posts = get_popular_posts();
  if ($popular_posts->have_posts()) :

    while ($popular_posts->have_posts()) : $popular_posts->the_post();
      get_template_part("/common/_article-card");
    endwhile;
    wp_reset_postdata();
  endif;
  ?>
</div>