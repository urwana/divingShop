<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Blog",
    "imageClass" => "blog-background",
    "detail" => false
  ] ?>
  <?php get_template_part(
    "/top/_sub-key-visual",
    null,
    ["subKeyVisualData" => $subKeyVisualData]
  ) ?>
  <?php $breadcrumbsData = ["white" => false, "list" => [["title" => "TOP", "url" => "/"], ["title" => "ブログ", "url" => "/blog.html"]]]; ?>
  <?php get_template_part("/common/_breadcrumbs", null, ["breadcrumbsData" => $breadcrumbsData]) ?>
  <div class="l-blog">
    <div class="blog">
      <div class="blog__inner inner">
        <div class="blog__body">
          <div class="blog__cards">
            <?php get_template_part("/common/_blog-cards", null, ["top" => false]) ?>
            <div class="blog__pager">
              <?php get_template_part("/common/_pager") ?>
            </div>
          </div>
          <div class="blog__sidebar">
            <div class="blog__sidebar-popular-articles">
              <?php get_template_part("/common/_sidebar-popular-articles");
              ?>
            </div>
            <div class="blog__sidebar-voice">
              <?php get_template_part("/common/_sidebar-voice"); ?>
            </div>
            <div class="blog__sidebar-campaign">
              <?php get_template_part("/common/_sidebar-campaign"); ?>
            </div>
            <div class="blog__sidebar-archive">
              <?php get_template_part("/common/_sidebar-archive"); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="l-top-contact">
    <?php get_template_part("/common/_contact") ?>
  </section>
</main>
<?php get_footer(); ?>