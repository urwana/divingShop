<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Privacy Policy",
    "imageClass" => "privacy-policy-background",
    "detail" => false
  ] ?>
  <?php get_template_part("/common/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs"); ?>
  <section class="privacy-policy l-privacy-policy">
    <div class="static-page">
      <div class="static-page__inner inner">
        <h2 class="static-page__title"><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>