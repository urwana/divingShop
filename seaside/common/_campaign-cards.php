<?php $sideBar = isset($args["sideBar"]) ? $args["sideBar"] : false; ?>
<?php $page = $args["page"]; ?>

<div class="<?php echo $sideBar ? 'campaign-cards--sidebar' : 'campaign-cards'; ?>">

  <?php
  $taxonomy = 'campaign_taxonomy';
  $term_slug = get_queried_object() ? get_queried_object()->slug : '';

  $args = [
    'post_type' => 'campaign',
    'posts_per_page' => $sideBar ? 1 : -1,
    'tax_query' => $term_slug ? [
      [
        'taxonomy' => $taxonomy,
        'field'    => 'slug',
        'terms'    => $term_slug,
        'operator' => 'IN',
      ],
    ] : [],
  ];

  $the_query = new WP_Query($args);
  ?>

  <?php if ($the_query->have_posts()) :
    while ($the_query->have_posts()) :
      $the_query->the_post(); ?>
  <?php get_template_part('/common/_campaign-card-page', null, ['page' => $page, 'sideBar' => $sideBar]); ?>
  <?php endwhile;
  else : ?>
  <p>投稿が見つかりませんでした。</p>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
</div>