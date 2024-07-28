<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Privacy Policy",
    "imageClass" => "privacy-policy-background",
    "detail" => false
  ] ?>
  <?php get_template_part("/top/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs"); ?>
  <section class="privacy-policy l-privacy-policy">
    <div class="static-page">
      <div class="static-page__inner inner">
        <h2 class="static-page__title"><?php the_title(); ?></h2>
        <?php echo get_field("privacy_policy"); ?>
      </div>
    </div>
  </section>
  <section class="l-top-contact">
    <?php get_template_part("./common/_contact"); ?>
  </section>
</main>
<?php get_footer(); ?>