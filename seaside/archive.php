<?php $base = ["path" => "./", "title" => "お客様の声", "description" => "沖縄那覇市のダイビングショップ CodeUps のサイトのお客様の声ページです。営業時間:8:30-19:00 定休日:毎週火曜日"] ?>
<!DOCTYPE html>
<html lang="ja">
<?php get_template_part("./common/_head", null, ["base" => $base]) ?>

<body>
  <?php get_template_part("./common/_header", null, ["top" => false]) ?>
  <main>
    <?php $subKeyVisualData = [
      "pageTitle" => "Voice",
      "imageClass" => "voice-background"
    ] ?>
    <?php get_template_part(
      "./top/_sub-key-visual",
      ["subKeyVisualData" => $subKeyVisualData]
    ) ?>
    <?php
    $breadcrumbsData = ["white" => false, "list" => [
      ["title" => "TOP", "url" => "/"], ["title" => $base["title"], "url" => "/voice.html"]
    ]]; ?>
    <?php get_template_part("./common/_breadcrumbs", null, ["breadcrumbsData" =>
    $breadcrumbsData]) ?>
    <section class="l-voice">
      <div class="voice">
        <div class="voice__inner inner">
          <div class="voice__tab-contents">
            <?php get_template_part("./common/_tab-card") ?>
            <div class="voice__cards">
              <?php get_template_part("./common/_voice-cards") ?>
            </div>
          </div>
          <div class="voice__pager">
            <?php get_template_part("./common/_pager") ?>
          </div>
        </div>
      </div>
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