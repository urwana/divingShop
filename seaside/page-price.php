<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Price", "imageClass" => "price-background"
  ] ?> <?php get_template_part("/top/_sub-key-visual", null,  ["subKeyVisualData" => $subKeyVisualData]) ?>
  <?php
  $breadcrumbsData = [
    "white" => false, "list" => [
      ["title" => "TOP", "url" => "/"], ["title" => $base["title"], "url" => "/price"]
    ]
  ]; ?> <?php get_template_part("/common/_breadcrumbs", null, ["breadcrumbsData" =>
        $breadcrumbsData]) ?>
  <div class="l-price">
    <div class="price">
      <div class="price__inner inner">
        <div class="price__contents">
          <?php get_template_part("/common/_price-lists") ?>
        </div>
      </div>
    </div>
  </div>
  <section class="l-top-contact">
    <?php get_template_part("/common/_contact") ?>
  </section>
</main>
<?php get_footer(); ?>