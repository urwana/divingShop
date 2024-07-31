<div class="article-cards">
  <?php
  $popular_posts = get_popular_posts();
  if ($popular_posts->have_posts()) :

    while ($popular_posts->have_posts()) : $popular_posts->the_post();
      get_template_part("/common/_article-card");
    endwhile;
    wp_reset_postdata();
  endif;
  ?>
</div>