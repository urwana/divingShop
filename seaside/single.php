<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Blog",
    "imageClass" => "blog-background",
    "detail" => true
  ]; ?>

  <?php get_template_part("/top/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs"); ?>
  <section class="l-blog">
    <div class="blog">
      <div class="blog__inner inner">
        <div class="blog__body">
          <?php get_template_part("./common/_blog-detail-contents"); ?>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="l-top-contact">
    <?php get_template_part("./common/_contact") ?>
  </section>
</main>
<?php get_footer(); ?>