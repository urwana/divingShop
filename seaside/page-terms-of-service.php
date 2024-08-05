<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Terms of Service ",
    "imageClass" => "terms-of-service-background",
    "detail" => false
  ]; ?>
  <?php get_template_part("/common/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs"); ?>
  <section class="terms-of-service l-terms-of-service">
    <div class="terms-of-service__contents static-page">
      <div class="static-page__inner inner">
        <h2 class="static-page__title"><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>