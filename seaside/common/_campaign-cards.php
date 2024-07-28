<?php $sideBar = isset($args["sideBar"]) ? $args["sideBar"] : false; ?>
<?php $page = $args["page"]; ?>

<div class="<?php echo $sideBar ? 'campaign-cards--sidebar' : 'campaign-cards'; ?>">
  <?php
  $taxonomy = 'campaign_taxonomy';
  $term_slug = '';
  $queried_object = get_queried_object();

  if ($queried_object && is_a($queried_object, 'WP_Term')) {
    $term_slug = $queried_object->slug; // taxonomy filter 用
  } elseif ($queried_object && is_a($queried_object, 'WP_Post_Type')) {
    $term_slug = ''; // 全件表示する ALL 用にスラッグを空に設定
  }

  $tax_query = [];
  if ($term_slug) {
    $tax_query = [
      [
        'taxonomy' => $taxonomy,
        'field'    => 'slug',
        'terms'    => $term_slug,
      ],
    ];
  }

  echo 'get_query_var(paged)===============================';
  echo get_query_var('paged');

  $args = [
    'post_type' => 'campaign',
    'posts_per_page' => $sideBar ? 2 : 4,
    'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
    'tax_query' => $tax_query,
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