<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Site MAP",
    "imageClass" => "sitemap-background",
    "detail" => false
  ] ?>
  <?php get_template_part(
    "/top/_sub-key-visual",
    null,
    ["subKeyVisualData" => $subKeyVisualData]
  ) ?>
  <?php get_template_part("./common/_breadcrumbs") ?>
  <section class="l-sitemap">
    <div class="sitemap">
      <div class="sitemap__inner inner">
        <?php get_template_part(
          "/common/_navigation-responsive",
          null,
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