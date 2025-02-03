<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "サイトマップ",
    "imageClass" => "sitemap-background",
    "detail" => false
  ]; ?>
  <?php get_template_part("/common/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs") ?>
  <section class="l-sitemap">
    <div class="sitemap">
      <div class="sitemap__inner inner">
        <?php get_template_part("/common/_navigation-responsive", null, ["footer" => false]); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>