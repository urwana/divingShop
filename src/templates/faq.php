<?php $base = ["path" => "./", "title" => "よくある質問", "description" => "沖縄那覇市のダイビングショップ CodeUps のサイトのよくある質問ページです。営業時間:8:30-19:00 定休日:毎週火曜日"] ?>
<!DOCTYPE html>
<html lang="ja">
<?php get_template_part("./common/_head", ["base" => $base]) ?>

<body>
  <?php get_template_part("./common/_header", ["top" => false]) ?>
  <main>
    <?php $subKeyVisualData = [
      "pageTitle" => "FAQ",
      "imageClass" => "faq-background"
    ] ?> <?php get_template_part("./top/_sub-key-visual", ["subKeyVisualData" => $subKeyVisualData]) ?>
    <?php
    $breadcrumbsData = [
      "white" => false, "list" => [
        ["title" => "TOP", "url" => "/"], ["title" => $base["title"], "url" => "/faq.html"]
      ]
    ]; ?>
    <?php get_template_part("./common/_breadcrumbs", null, ["breadcrumbsData" => $breadcrumbsData]) ?>
    <div class="faq l-faq">
      <div class="faq__inner inner">
        <div class="faq__contents">
          <?php get_template_part("./common/_qa-boxes") ?>
        </div>
      </div>
    </div>
    <section class="l-top-contact">
      <?php get_template_part("./common/_contact") ?>
    </section>
  </main>
  <div class="l-footer">
    <?php get_template_part("./common/_scrollToTop") ?>
    <?php get_template_part("./common/_footer") ?>
  </div>
</body>

</html>