<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Privacy Policy",
    "imageClass" => "privacy-policy-background"
  ] ?>
  <?php get_template_part("./top/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]) ?>
  <?php $breadcrumbsData = [
    "white" => false,
    "list" => [["title" => "TOP", "url" => "/"], ["title" => $base["title"], "url" => "/privacy-policy.html"]]
  ];
  ?>
  <?php get_template_part("./common/_breadcrumbs", null, ["breadcrumbsData" => $breadcrumbsData]) ?>
  <section class="privacy-policy l-privacy-policy">
    <div class="static-page">
      <div class="static-page__inner inner">
        <h2 class="static-page__title"><?php the_title(); ?></h2>
        <?php echo get_field("privacy_policy"); ?>
      </div>
    </div>
  </section>
  <section class="l-top-contact">
    <?php get_template_part("./common/_contact") ?>
  </section>
</main>
<?php get_footer(); ?>