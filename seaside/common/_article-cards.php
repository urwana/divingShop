<div class="article-cards">
  <?php
  $popular_posts = get_popular_posts();
  echo "===============";
  var_dump($popular_posts);

  if ($popular_posts->have_posts()) :
  
    while ($query_voice->have_posts()) : $query_voice->the_post();
      get_template_part("/common/_article-card");
    endwhile;
    wp_reset_postdata();
  endif;
  ?>
</div>