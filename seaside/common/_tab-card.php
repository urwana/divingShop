<?php $post_type = $args["post_type"]; ?>
<?php $taxonomy = $args["taxonomy"]; ?>

<div class="tab-card">
  <a href="<?php echo esc_url(get_post_type_archive_link($post_type)); ?>"
    class="tab-card__item <?php echo empty(get_query_var($taxonomy)) ? 'current' : ''; ?>">ALL</a>
  <?php
  if (taxonomy_exists($taxonomy)) {
    $terms = get_terms([
      'taxonomy' => $taxonomy,
      'hide_empty' => false,
    ]);

    if (is_wp_error($terms)) {
      echo '<div>タブの取得に失敗しました: ' . $terms->get_error_message() . '</div>';
    } elseif (empty($terms)) {
      echo '<div>タブがありません。</div>';
    } else {
      foreach ($terms as $term) {
        $term_link = get_term_link($term, $taxonomy);
        echo '<a href="' . esc_url($term_link) . '" class="tab-card__item ' . (is_tax($taxonomy, $term->slug) ? 'current' : '') . '">' . esc_html($term->name) . '</a>';
      }
    }
  } else {
    echo '<div>指定されたタクソノミーが存在しません。</div>';
  }
  ?>
</div>