<?php $sideBar = isset($args["sideBar"]) ? $args["sideBar"] : false; ?>
<?php $page = $args["page"]; ?>

<?php
$term_name = get_query_var('term');
$taxonomy = 'campaign_taxonomy';
if ($term_name) {
  $term = get_term_by('name', urldecode($term_name), $taxonomy);
  $term_slug = $term ? $term->slug : '';
} else {
  $term_slug = '';
}
$tax_query = [
  [
    'taxonomy' => $taxonomy,
    'field'    => 'slug',
    'terms'    => $term_slug ? $term_slug : [],
  ],
];
$args = [
  "post_type" => "campaign",
  'posts_per_page' =>  $sideBar ? 1 : -1,
  'tax_query' => $term_slug ? $tax_query : ""
];
$the_query = new WP_Query($args);
?>

<div class="<?php echo $sideBar ? "campaign-cards--sidebar" : "campaign-cards"  ?>">
  <?php if ($the_query->have_posts()) :
    while ($the_query->have_posts()) :
      $the_query->the_post(); ?>
  <?php get_template_part("/common/_campaign-card-page", null, ["page" => $page, "sideBar" => $sideBar]) ?>
  <?php endwhile;
  else : ?>
  <p>投稿が見つかりませんでした。</p>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
</div>