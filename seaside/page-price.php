<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Price",
    "imageClass" => "price-background",
    "detail" => false
  ]; ?>
  <?php get_template_part("/top/_sub-key-visual", null,  ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs"); ?>
  <div class="l-price">
    <div class="price">
      <div class="price__inner inner">
        <div class="price__contents">
          <?php get_template_part("/common/_price-lists"); ?>
        </div>
      </div>
    </div>
  </div>
  <section class="l-top-contact">
    <?php get_template_part("/common/_contact"); ?>
  </section>
</main>
<?php get_footer(); ?>