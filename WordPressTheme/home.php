<?php $base = ["path" => "./", "title" => "ブログ一覧", "description" => "沖縄那覇市のダイビングショップ CodeUpsのサイトのブログ一覧ページです。営業時間:8:30-19:00 定休日:毎週火曜日"] ?>
<!DOCTYPE html>
<html lang="ja">
<?php get_template_part("./common/_head", ["base" => $base]) ?>

<body>
  <?php get_template_part("./common/_header", ["top" => false]) ?>
  <main>
    <?php $subKeyVisualData = [
      "pageTitle" => "Blog",
      "imageClass" => "blog-background"
    ] ?> <?php get_template_part(
            "./top/_sub-key-visual",
            null,
            ["subKeyVisualData" => $subKeyVisualData]
          ) ?>
    <?php $breadcrumbsData = ["white" => false, "list" => [["title" => "TOP", "url" => "/"], ["title" => $base["title"], "url" => "/blog.html"]]]; ?>
    <?php get_template_part("./common/_breadcrumbs", ["breadcrumbsData" => $breadcrumbsData]) ?>
    <div class="l-blog">
      <div class="blog">
        <div class="blog__inner inner">
          <div class="blog__body">
            <div class="blog__cards">
              <?php get_template_part("./common/_blog-cards", null, ["top" => false]) ?>
              <div class="blog__pager">
                <?php get_template_part("./common/_pager") ?>
              </div>
            </div>
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