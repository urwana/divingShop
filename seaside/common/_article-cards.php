<div class="article-cards">
  <?php
  $args_voice = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'orderby'        => 'date',
    'order'          => 'ASC',
  );
  $query_voice = new WP_Query($args_voice);
  if ($query_voice->have_posts()) :
    while ($query_voice->have_posts()) : $query_voice->the_post();
      get_template_part("/common/_article-card");
    endwhile;
    wp_reset_postdata();
  endif;
  ?>
</div>