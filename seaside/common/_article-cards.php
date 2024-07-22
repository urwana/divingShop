<div class="article-cards">
  <?php
  $args_voice = array(
    'post_type'      => 'voice',
    'posts_per_page' => 1,
    'orderby'        => 'date',
    'order'          => 'DESC',
  );
  $query_voice = new WP_Query($args_voice);
  if ($query_voice->have_posts()) :
    while ($query_voice->have_posts()) : $query_voice->the_post();
      get_template_part("/common/_article-card");
    endwhile;
    wp_reset_postdata();
  endif;
  $args_campaign = array(
    'post_type'      => 'campaign',
    'posts_per_page' => 2,
    'orderby'        => 'date',
    'order'          => 'DESC',
  );
  $query_campaign = new WP_Query($args_campaign);
  if ($query_campaign->have_posts()) :
    while ($query_campaign->have_posts()) : $query_campaign->the_post();
      get_template_part("/common/_article-card");
    endwhile;
    wp_reset_postdata();
  endif;
  ?>
</div>