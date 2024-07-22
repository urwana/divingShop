<?php $sideBar = isset($args["sideBar"]) ? $args["sideBar"] : false; ?>
<?php $page = $args["page"]; ?>

<?php
$args = array(
  "post_type" => "campaign",
  'posts_per_page' =>  -1
);
$the_query = new WP_Query($args);
?>

<div class="<?php echo $sideBar ? "campaign-cards--sidebar" : "campaign-cards"  ?>">
  <?php if (have_posts()) {
    while ($the_query->have_posts()) {
      $the_query->the_post();
  ?>
  <?php get_template_part("/common/_campaign-card-page", null, ["page" => $page, "sideBar" => $sideBar]) ?>
  <?php }
  }; ?>
</div>