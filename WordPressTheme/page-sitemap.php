<?php $base = ["path" => "./", "title" => "サイトマップ", "description" => "沖縄那覇市のダイビングショップ CodeUps のサイトのサイトマップページです。営業時間:8:30-19:00 定休日:毎週火曜日"] ?>
<!DOCTYPE html>
<html lang="ja">
<?php get_template_part("./common/_head", null, ["base" => $base]) ?>

<body>
  <?php get_template_part("./common/_header", null, ["top" => false]) ?>
  <main>
    <?php $subKeyVisualData = [
      "pageTitle" => "Site MAP",
      "imageClass" => "sitemap-background"
    ] ?>
    <?php get_template_part(
      "./top/_sub-key-visual",
      null,
      ["subKeyVisualData" => $subKeyVisualData]
    ) ?>
    <?php
    $breadcrumbsData =
      [
        "white" => false, "list" => [
          ["title" => "TOP", "url" => "/"],
          [
            "title" => $base["title"],
            "url" => "/sitemap.html"
          ]
        ]
      ]; ?>
    <?php get_template_part("./common/_breadcrumbs", ["breadcrumbsData" => $breadcrumbsData]) ?>
    <section class="l-sitemap">
      <div class="sitemap">
        <div class="sitemap__inner inner">
          <?php get_template_part(
            "./common/_navigation-responsive",
            ["footer" => false]
          ) ?>
        </div>
      </div>
    </section>
    <section class="l-top-contact">
      <?php get_template_part("./common/_contact") ?>
    </section>
  </main>
  <div class="l-footer">
    <?php get_template_part("./common/_scrollToTop") ?>
    <?php get_template_part(
      "./common/_footer"
    ) ?>
  </div>
</body>

</html>