<?php
$posts_by_months = get_posts_by_months(); ?>
<div class="sidebar-archive">
  <?php get_template_part("/common/_sidebar-title", null, ["title" => "アーカイブ", "className" => "sidebar-archive__title"]); ?>
  <div class="sidebar-archive__lists">
    <div class="sidebar-archive__toggle-hierarchy">
      <div class="sidebar-archive__toggle-hierarchy-inner">
        <?php foreach ($posts_by_months as $year => $months) : ?>
        <div class="sidebar-archive__year">
          <?php $url = add_query_arg(array('year' => $year, 'monthnum' => $month), home_url('/date/')); ?>
          <a href="" class="js-yearLabel sidebar-archive__year-label"><?php echo esc_html($year); ?></a>
          <div class="js-yearBody sidebar-archive__year-body">
            <?php foreach ($months as $month) : ?>
            <div class="sidebar-archive__month">
              <a href="<?php echo esc_url($url); ?>"
                class="js-monthLabel sidebar-archive__month-label"><?php echo esc_html($month); ?>月</a>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>