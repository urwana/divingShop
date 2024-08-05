<?php $post_type = $args["post_type"]; ?>
<?php $taxonomy = $args["taxonomy"]; ?>

<div class="tab-card">
  <a href="<?php echo esc_url(get_post_type_archive_link($post_type)); ?>"
    class="tab-card__item <?php echo empty(get_query_var($taxonomy)) ? 'current' : ''; ?>">ALL</a>
  <?php
  if (taxonomy_exists($taxonomy)) :
    $terms = get_terms([
      'taxonomy' => $taxonomy,
      'hide_empty' => false,
    ]);
    if (is_wp_error($terms)) : ?>
  <div>タブの取得に失敗しました:<?php $terms->get_error_message() ?></div>
  <?php elseif (empty($terms)) : ?>
  <div>タブがありません。</div>
  <?php else :
      foreach ($terms as $term) :
        $term_link = get_term_link($term, $taxonomy); ?>
  <a href="<?php esc_url($term_link) ?>"
    class="tab-card__item <?php echo is_tax($taxonomy, $term->slug) ? 'current' : ''; ?>"><?php echo esc_html($term->name) ?></a>
  <?php endforeach;
    endif; ?>
  <?php else : ?>
  <div>指定されたタクソノミーが存在しません。</div>
  <?php endif ?>
</div>