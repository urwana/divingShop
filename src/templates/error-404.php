<?php $base = ["path" =>  "./", "title" =>  "404", "description" => "沖縄那覇市のダイビングショップ CodeUpsのサイトの404ページです。営業時間:8:30-19:00 定休日:毎週火曜日"]; ?>
<!DOCTYPE html>
<html lang="ja">
<?php get_template_part("common/_head", ["base" =>  $base]) ?>

<body class="body-404">
  <?php get_template_part("./common/_header", ["top" =>  false]) ?>
  <main>
    <div class="error-404">
      <?php $breadcrumbsData = ["white" => true, "list" => [
        ["title" => "TOP", "url" => "/"], ["title" => $base["title"], "url" => "/404.html"]
      ]]; ?> <?php get_template_part("./common/_breadcrumbs", ["breadcrumbsData" => $breadcrumbsData]) ?>
      <div class="error-404__inner inner">
        <div class="error-404__main-text">404</div>
        <div class="error-404__sub-text">
          申し訳ありません。<br />
          お探しのページが見つかりません。
        </div>
        <div class="error-404__button">
          <a href="/" class="button button--reverse"><span class="button__text">Page Top</span></a>
        </div>
      </div>
    </div>
  </main>
  <div class="l-footer--error-404">
    <?php get_template_part("./common/_footer") ?>
  </div>
</body>

</html>