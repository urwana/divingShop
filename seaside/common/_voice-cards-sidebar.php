<div class="voice-cards--sidebar">
  <?php
  $args_voice = array(
    'post_type'      => 'voice',
    'posts_per_page' => 1,
    'orderby'        => 'date',
  );
  $query_voice = new WP_Query($args_voice);
  if ($query_voice->have_posts()) :
    while ($query_voice->have_posts()) :
      $query_voice->the_post(); ?>
  <div class="voice-cards-sidebar__item">
    <?php get_template_part("/common/_voice-card-sidebar"); ?>
  </div>
  <?php
    endwhile;
    wp_reset_postdata();
  endif;
  ?>
</div>