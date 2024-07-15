<?php $base = ["path" => "./", "title" => "お問い合わせ", "description" => "沖縄那覇市のダイビングショップ CodeUps サイトのお問い合わせページです。営業時間:8:30-19:00 定休日:毎週火曜日"] ?>
<!DOCTYPE html>
<html lang="ja">
<?php get_template_part("./common/_head", null, ["base" => $base]) ?>

<body>
  <?php get_template_part("./common/_header", null, ["top" => false]) ?>
  <main>
    <?php $subKeyVisualData = [
      "pageTitle" => "Contact",
      "imageClass" => "contact-background"
    ] ?>
    <?php get_template_part("./top/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]) ?>
    <?php
    $breadcrumbsData =
      [
        "white" => false,
        "list" => [
          ["title" => "TOP", "url" => "/"],
          ["title" => $base["title"], "url" => "/contact.html"]
        ]
      ]; ?>
    <?php get_template_part("./common/_breadcrumbs", ["breadcrumbsData" => $breadcrumbsData]) ?>
    <section class="contact l-contact">
      <div class="contact__inner inner">
        <div class="contact__error-message">必須項目が入力されていません。<br class="u-mobile">入力してください。</div>
        <?php get_template_part("./common/_contact-form") ?>
      </div>
    </section>
  </main>
  <div class="l-footer">
    <?php get_template_part("./common/_scrollToTop") ?> <?php get_template_part("./common/_footer") ?>
  </div>
</body>

</html>