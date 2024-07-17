<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Contact",
    "imageClass" => "contact-background"
  ] ?>
  <?php get_template_part("./top/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]) ?>
  <?php
  $breadcrumbsData =
    [
      "white" => false,
      "list" => [
        ["title" => "TOP", "url" => "/"],
        ["title" => $base["title"], "url" => "/contact.html"]
      ]
    ]; ?>
  <?php get_template_part("./common/_breadcrumbs", ["breadcrumbsData" => $breadcrumbsData]) ?>
  <section class="contact l-contact">
    <div class="contact__inner inner">
      <div class="contact__error-message">必須項目が入力されていません。<br class="u-mobile">入力してください。</div>
      <?php get_template_part("./common/_contact-form") ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>