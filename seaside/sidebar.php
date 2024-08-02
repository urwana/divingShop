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
        <div class="campaign-cards--sidebar">
          <?php
          $taxonomy = 'campaign_taxonomy';
          $term_slug = get_query_var('term');
          $campaign_args = [
            'post_type' => 'campaign',
            'posts_per_page' => $sideBar ? 2 : 4,
            'tax_query' => $term_slug ? [
              [
                'taxonomy' => $taxonomy,
                'field'    => 'slug',
                'terms'    => $term_slug,
              ],
            ] : [],
            'paged' => get_query_var('paged', 1),
          ];

          $the_query = new WP_Query($campaign_args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) :
              $the_query->the_post(); ?>
              <?php get_template_part('/common/_campaign-card-page', null, ['page' => false, 'sideBar' => true]); ?>
            <?php endwhile;
          else : ?>
            <p>投稿が見つかりませんでした。</p>
          <?php endif;
          wp_reset_postdata();
          ?>
        </div>
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
                      $url = get_month_link($year, $month);
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