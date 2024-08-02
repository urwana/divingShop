<aside class="blog__sidebar">
  <div class="blog__sidebar-popular-articles">
    <div class="sidebar-popular-articles">
      <?php get_template_part("/common/_sidebar-title", null, ["title" => "人気記事", "className" => "sidebar-popular-articles__title"]) ?>
      <!--TODO: ランキング実装確認 -->
      <div class="sidebar-popular-articles__cards">
        <?php get_template_part("/common/_article-cards"); ?>
      </div>
    </div>
  </div>
  <div class="blog__sidebar-voice">
    <div class="sidebar-voice">
      <?php get_template_part(
        "/common/_sidebar-title",
        null,
        ["title" => "口コミ", "className" => "sidebar-voice__title"]
      ); ?>
      <div class="sidebar-voice__card">
        <?php get_template_part("/common/_voice-cards-sidebar"); ?>
      </div>
    </div>
  </div>
  <div class="blog__sidebar-campaign">
    <div class="sidebar-campaign">
      <?php get_template_part("/common/_sidebar-title", null, ["title" => "キャンペーン", "className" => "sidebar-campaign__title"]); ?>
      <div class="sidebar-campaign__cards">
        <?php get_template_part("/common/_campaign-cards", null, ["page" => false, "sideBar" => true]); ?>
        <div class="sidebar-campaign__button">
          <a href="/seaside/blog" class="button"><span class="button__text">View more</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="blog__sidebar-archive">
    <?php
    $posts_by_months = get_posts_by_months(); // 投稿を年と月でグループ化するカスタム関数
    ?>
    <div class="sidebar-archive">
      <?php get_template_part("/common/_sidebar-title", null, ["title" => "アーカイブ", "className" => "sidebar-archive__title"]); ?>
      <div class="sidebar-archive__lists">
        <div class="sidebar-archive__toggle-hierarchy">
          <div class="sidebar-archive__toggle-hierarchy-inner">
            <?php foreach ($posts_by_months as $year => $months) : ?>
              <div class="sidebar-archive__year">
                <a href="#" class="js-yearLabel sidebar-archive__year-label"><?php echo esc_html($year); ?></a>
                <div class="js-yearBody sidebar-archive__year-body">
                  <?php foreach ($months as $month) : ?>
                    <div class="sidebar-archive__month">
                      <?php
                      // URL の生成
                      $url = add_query_arg(array(
                        'year' => $year,
                        'monthnum' => $month // 正しいクエリパラメーターを設定
                      ), home_url('/date/'));
                      ?>
                      <a href="<?php echo esc_url($url); ?>" class="js-monthLabel sidebar-archive__month-label">
                        <?php echo esc_html($month); ?>月
                      </a>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</aside>