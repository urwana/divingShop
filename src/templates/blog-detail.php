<?php $base = ["path" => "./", "title" => "ブログ詳細", "description" => "沖縄那覇市のダイビングショップ CodeUps のサイトのブログ詳細ページです。営業時間:8:30-19:00 定休日:毎週火曜日"] ?>
<!DOCTYPE html>
<html lang="ja">
<?php get_template_part("./common/_head", null,  ["base" => $base]) ?>

<body>
  <?php get_template_part("./common/_header", null, ["top" => false]) ?>
  <main>
    <?php $subKeyVisualData = [
      "pageTitle" => "Blog",
      "imageClass" => "blog-background",
      "detail" => true
    ] ?>

    <?php get_template_part("./top/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]) ?>
    <?php
    $breadcrumbsData =
      [
        "white" => false,
        "list" => [["title" => "TOP", "url" => "/"], ["title" => "ブログ一覧", "url" => "/blog.html"], ["title" => $base["title"], "url" => "/blog-detail.html"]]
      ]; ?>

    <?php get_template_part("./common/_breadcrumbs", null,  ["breadcrumbsData" => $breadcrumbsData]) ?>
    <section class="l-blog">
      <div class="blog">
        <div class="blog__inner inner">
          <div class="blog__body">
            <?php get_template_part("./common/_blog-detail-contents") ?>
            <div class="blog__sidebar">
              <div class="blog__sidebar-popular-articles">
                <?php get_template_part("./common/_sidebar-popular-articles");
                ?>
              </div>
              <div class="blog__sidebar-voice">
                <?php get_template_part("./common/_sidebar-voice"); ?>
              </div>
              <div class="blog__sidebar-campaign">
                <?php get_template_part("./common/_sidebar-campaign"); ?>
              </div>
              <div class="blog__sidebar-archive">
                <?php get_template_part("./common/_sidebar-archive"); ?>
              </div>
            </div>
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