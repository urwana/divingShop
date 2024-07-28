<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "About us",
    "imageClass" => "about-us-background",
    "detail" => false
  ];
  ?>
  <?php get_template_part("/top/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs"); ?>
  <div class="l-about-us">
    <div class="about-us">
      <div class="about-us__inner">
        <?php get_template_part("/common/_about", null, ["top" => false]); ?>
      </div>
    </div>
  </div>
  <section class="l-gallery">
    <div class="gallery">
      <div class="gallery__inner inner">
        <div class="gallery__title">
          <?php get_template_part("/common/_section-title", null, ["englishTitle" => "Gallery", "japaneseTitle" => "フォト"]); ?>
        </div>
        <div class="gallery__item-container l-gallery__item-container">
          <?php $fields = CFS()->get("gallery_images"); ?>
          <?php foreach ($fields as $field) { ?>
          <?php get_template_part("/common/_gallery-item", null, ["gallery" => $field]); ?>
          <?php }; ?>
        </div>
      </div>
    </div>
    <?php get_template_part("./common/_modal"); ?>
  </section>
  <section class="l-top-contact">
    <?php get_template_part("./common/_contact"); ?>
  </section>
</main>
<?php get_footer(); ?>