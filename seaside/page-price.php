<?php $base = ["path" => "./", "title" => "料金一覧", "description" => "沖縄那覇市のダイビングショップ CodeUps のサイトの料金一覧ページです。営業時間:8:30-19:00 定休日:毎週火曜日"] ?>
<!DOCTYPE html>
<html lang="ja">
<?php get_template_part("./common/_head", null, ["base" => $base]) ?>

<body>
  <?php get_template_part("./common/_header", null,  ["top" => false]) ?>
  <main>
    <?php $subKeyVisualData = [
      "pageTitle" => "Price", "imageClass" => "price-background"
    ] ?> <?php get_template_part("./top/_sub-key-visual", null,  ["subKeyVisualData" => $subKeyVisualData]) ?>
    <?php
    $breadcrumbsData = [
      "white" => false, "list" => [
        ["title" => "TOP", "url" => "/"], ["title" => $base["title"], "url" => "/price.html"]
      ]
    ]; ?> <?php get_template_part("./common/_breadcrumbs", ["breadcrumbsData" =>
          $breadcrumbsData]) ?>
    <div class="l-price">
      <div class="price">
        <div class="price__inner inner">
          <div class="price__contents">
            <?php get_template_part("./common/_price-lists") ?>
          </div>
        </div>
      </div>
    </div>
    <section class="l-top-contact">
      <?php get_template_part("./common/_contact") ?>
    </section>
  </main>
  <div class="l-footer">
    <?php get_template_part("./common/_scrollToTop") ?> <?php get_template_part("./common/_footer") ?>
  </div>
</body>

</html>