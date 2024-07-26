<div class="voice-cards">

  <?php
  $term_name = get_query_var('term');
  $taxonomy = 'voice_taxonomy';
  if ($term_name) {
    $term = get_term_by('name', urldecode($term_name), $taxonomy);
    $term_slug = $term ? $term->slug : '';
  } else {
    $term_slug = '';
  }
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $tax_query = [
    [
      'taxonomy' => $taxonomy,
      'field'    => 'slug',
      'terms'    => $term_slug ? $term_slug : [],
    ],
  ];
  $voice_args = [
    "post_type" => "voice",
    'posts_per_page' => 6,
    'paged' => $paged,
    'tax_query' => $term_slug ? $tax_query : ""
  ];
  ?>
  <?php
  $the_voice_query = new WP_Query($voice_args);
  if ($the_voice_query->have_posts()) :
    while ($the_voice_query->have_posts()) :
      $the_voice_query->the_post(); ?>
  <div class="voice-cards__item">
    <?php get_template_part("/common/_voice-card") ?>
  </div>
  <?php endwhile;
  endif; ?>
</div>