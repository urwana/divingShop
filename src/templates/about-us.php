<?php $base = ["path" => "./", "title" => "私たちについて", "description" => "沖縄那覇市のダイビングショップ CodeUps のサイトの私たちについてページです。営業時間:8:30-19:00 定休日:毎週火曜日"] ?>
<!DOCTYPE html>
<html lang="ja">
<?php get_template_part("./common/_head", null, ["base" => $base]) ?>

<body>
  <?php get_template_part($base["path"] + "./common/_header", null, ["top" => false]) ?>
  <main>
    <?php $subKeyVisualData = [
      "pageTitle" => "About us", "imageClass" => "about-us-background"
    ] ?> <?php get_template_part("./top/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]) ?>
    <?php $breadcrumbsData = ["white" => false, "list" => [
      ["title" => "TOP", "url" => "/"],
      ["title" => $base["title"], "url" => "/about-us.html"]
    ]]; ?>
    <?php get_template_part("./common/_breadcrumbs", null, ["breadcrumbsData" => $breadcrumbsData])
    ?>
    <div class="l-about-us">
      <div class="about-us">
        <div class="about-us__inner">
          <?php get_template_part("./common/_about", null, ["top" => false]) ?>
        </div>
      </div>
    </div>
    <section class="l-gallery">
      <div class="gallery">
        <div class="gallery__inner inner">
          <div class="gallery__title">
            <?php get_template_part("./common/_section-title", null, ["englishTitle" => "Gallery", "japaneseTitle" => "フォト"]) ?>
          </div>
          <div class="gallery__item-container l-gallery__item-container">
            <?php $galleryDataAll = [
              [
                "imagePath" => "./assets/images/about-us/gallery1",
                "alt" => "珊瑚の海",
                "width" => "492",
                "height" => "746"
              ],
              [
                "imagePath" => "./assets/images/about-us/gallery2",
                "alt" => "石垣の海",
                "width" => "580",
                "height" => "369"
              ],
              [
                "imagePath" => "./assets/images/about-us/gallery3",
                "alt" => "魚たち1",
                "width" => "580",
                "height" => "369"
              ],
              [
                "imagePath" => "./assets/images/about-us/gallery4",
                "alt" => "魚たち2",
                "width" => "580",
                "height" => "369"
              ],
              [
                "imagePath" => "./assets/images/about-us/gallery5",
                "alt" => "魚たち3",
                "width" => "580",
                "height" => "369"
              ],
              [
                "imagePath" => "./assets/images/about-us/gallery6",
                "alt" => "魚たち4",
                "width" => "492",
                "height" => "746"
              ],
              [
                "imagePath" => "./assets/images/about-us/gallery1",
                "alt" => "珊瑚の海",
                "width" => "492",
                "height" => "746"
              ],
            ]; ?>
            <?php foreach ($galleryDataAll as $index => $gallery) { ?>
            <?php get_template_part("./common/_gallery-item", null, ["gallery" => $gallery, "index" => $index]) ?>
            <?php }; ?>
          </div>
        </div>
      </div>
      <?php get_template_part("./common/_modal") ?>
    </section>
    <section class="l-top-contact">
      <?php get_template_part("./common/_contact") ?>
    </section>
  </main>
  <div class="l-footer">
    <?php get_template_part("./common/_scrollToTop") ?> <?php get_template_part("./common/_footer") ?>
  </div>
</body>

</html>