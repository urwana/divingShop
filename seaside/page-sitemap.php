<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Site MAP",
    "imageClass" => "sitemap-background"
  ] ?>
  <?php get_template_part(
    "./top/_sub-key-visual",
    null,
    ["subKeyVisualData" => $subKeyVisualData]
  ) ?>
  <?php
  $breadcrumbsData =
    [
      "white" => false, "list" => [
        ["title" => "TOP", "url" => "/"],
        [
          "title" => $base["title"],
          "url" => "/sitemap.html"
        ]
      ]
    ]; ?>
  <?php get_template_part("./common/_breadcrumbs", ["breadcrumbsData" => $breadcrumbsData]) ?>
  <section class="l-sitemap">
    <div class="sitemap">
      <div class="sitemap__inner inner">
        <?php get_template_part(
          "./common/_navigation-responsive",
          ["footer" => false]
        ) ?>
      </div>
    </div>
  </section>
  <section class="l-top-contact">
    <?php get_template_part("./common/_contact") ?>
  </section>
</main>
<?php get_footer(); ?>