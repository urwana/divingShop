<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "FAQ",
    "imageClass" => "faq-background"
  ] ?> <?php get_template_part("/top/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]) ?>
  <?php
  $breadcrumbsData = [
    "white" => false, "list" => [
      ["title" => "TOP", "url" => "/"], ["title" => $base["title"], "url" => "/faq"]
    ]
  ]; ?>
  <?php get_template_part("/common/_breadcrumbs", null, ["breadcrumbsData" => $breadcrumbsData]) ?>
  <div class="faq l-faq">
    <div class="faq__inner inner">
      <div class="faq__contents">
        <?php get_template_part("/common/_qa-boxes") ?>
      </div>
    </div>
  </div>
  <section class="l-top-contact">
    <?php get_template_part("/common/_contact") ?>
  </section>
</main>
<?php get_footer(); ?>