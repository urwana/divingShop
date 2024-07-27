<?php get_header(); ?>
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
        <a href="/seaside" class="button button--reverse"><span class="button__text">Page Top</span></a>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>