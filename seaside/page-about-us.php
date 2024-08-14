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
  <?php $fields = CFS()->get("gallery_images"); ?>
  <?php if ($fields): ?>
  <section class="l-gallery">
    <div class="gallery">
      <div class="gallery__inner inner">
        <div class="gallery__title">
          <div class="section-title">
            <p class="section-title__word">Gallery</p>
            <h2 class="section-title__japan">フォト</h2>
          </div>
        </div>
        <div class="gallery__item-container l-gallery__item-container">
          <?php foreach ($fields as $gallery) :
              if ($gallery): ?>
          <figure class="js-modalPhoto gallery__item">
            <picture>
              <source srcset="<?php echo get_template_directory_uri();
                                    echo $gallery["image"]; ?>-sp.jpg" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri();
                              echo $gallery["image"] ?>-pc.jpg" alt="<?php echo $gallery["alt"]; ?>"
                width="<?php echo $gallery["width"] ?>" height="<?php echo $gallery["height"]; ?>" />
            </picture>
            <?php endif; ?>
          </figure> <?php endforeach; ?>
        </div>
      </div>
    </div>
    <?php get_template_part("/common/_modal"); ?>
  </section>
  <?php endif; ?>
</main>
<?php get_footer(); ?>