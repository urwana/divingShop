<div class="voice-cards">

  <?php
  $taxonomy = 'voice_taxonomy';
  $term_slug = get_query_var('term'); // 変更3: 現在のタームスラッグを取得

  $tax_query = [];
  if ($term_slug) {
    $tax_query = [
      [
        'taxonomy' => $taxonomy,
        'field'    => 'slug',
        'terms'    => $term_slug,
      ],
    ];
  }

  $voice_args = [
    'post_type' => 'voice', // または 'voice'
    'posts_per_page' => 6,
    'tax_query' => $tax_query, // 変更5: タクソノミークエリを動的に設定
    'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1, // 変更6: ページネーション対応
  ];

  ?>
  <?php
  $the_voice_query = new WP_Query($voice_args);
  if ($the_voice_query->have_posts()) :
    while ($the_voice_query->have_posts()) :
      $the_voice_query->the_post(); ?>
  <div class="voice-cards__item">
    <?php get_template_part("/common/_voice-card") ?>
  </div>
  <?php endwhile; ?>
  <?php else : ?>
  <p>投稿が見つかりませんでした。</p>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
</div>