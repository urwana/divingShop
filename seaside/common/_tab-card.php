<?php $post_type = $args["post_type"]; ?>
<?php $taxonomy = $args["taxonomy"]; ?>

<div class="tab-card">
  <a href="<?php echo esc_url(get_post_type_archive_link($post_type)); ?>" class="tab-card__item current">ALL</a>
  <?php
  //$taxonomy = "campaign_taxonomy";
  if (taxonomy_exists($taxonomy)) {
    $terms = get_terms(
      [
        'taxonomy' => $taxonomy,
        'hide_empty' => false,
      ]
    );

    if (is_wp_error($terms)) {
      echo '<div>タブの取得に失敗しました: ' . $terms->get_error_message() . '</div>';
    } elseif (empty($terms)) {
      echo '<div>タブがありません。</div>';
    } else {
      foreach ($terms as $term) {
        $term_link = add_query_arg('term', $term->slug, get_post_type_archive_link($post_type));
        echo '<a href="' . esc_url($term_link) . '" class="tab-card__item">' . esc_html($term->name) . '</a>'; // タームのリンク
      }
    }
  } else {
    echo '<li>指定されたタクソノミーが存在しません。</li>';
  }
  ?>
</div>