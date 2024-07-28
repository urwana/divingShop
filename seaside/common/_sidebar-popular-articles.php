<div class="sidebar-popular-articles">
  <?php get_template_part("/common/_sidebar-title", null, ["title" => "人気記事", "className" => "sidebar-popular-articles__title"]) ?>
  <!--TODO: ランキング実装確認 -->
  <div class="sidebar-popular-articles__cards">
    <?php get_template_part("/common/_article-cards"); ?>
  </div>
</div>