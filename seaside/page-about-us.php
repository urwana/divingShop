<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "About us",
    "imageClass" => "about-us-background",
    "detail" => false
  ];
  ?>
  <?php get_template_part("/common/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
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
          <?php foreach ($fields as $gallery) { ?>
            <figure class="js-modalPhoto gallery__item">
              <picture>
                <source srcset="<?php echo get_template_directory_uri();
                                echo $gallery["image"]; ?>-sp.jpg" media="(max-width: 767px)" />
                <img src="<?php echo get_template_directory_uri();
                          echo $gallery["image"] ?>-pc.jpg" alt="<?php echo $gallery["alt"]; ?>" width="<?php echo $gallery["width"] ?>" height="<?php echo $gallery["height"]; ?>" />
              </picture>
            </figure> <?php }; ?>
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