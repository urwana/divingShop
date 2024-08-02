<?php get_header(); ?>
<main>
  <?php
  $year = get_query_var('year');
  $month = get_query_var('month');
  echo "Year: " . esc_html($year) . "<br>";
  echo "Month: " . esc_html($month) . "<br>";
  $title = esc_html($year) . "年" . esc_html($month) . "月";
  $subKeyVisualData = [
    "pageTitle" => $title,
    "imageClass" => "blog-background",
    "detail" => false
  ] ?>
  <?php get_template_part("/top/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs"); ?>
  <div class="l-blog">
    <div class="blog">
      <div class="blog__inner inner">
        <div class="blog__body">
          <div class="blog__cards">
            <?php get_template_part("/common/_blog-cards", null, ["page" => true]); ?>
            <div class="blog__pager">
              <?php get_template_part("/common/_pager"); ?>
            </div>
          </div>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>
  <section class="l-top-contact">
    <?php get_template_part("/common/_contact"); ?>
  </section>
</main>
<?php get_footer(); ?>