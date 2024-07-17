<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Voice",
    "imageClass" => "voice-background"
  ] ?>
  <?php get_template_part(
    "./top/_sub-key-visual",
    ["subKeyVisualData" => $subKeyVisualData]
  ) ?>
  <?php
  $breadcrumbsData = ["white" => false, "list" => [
    ["title" => "TOP", "url" => "/"], ["title" => $base["title"], "url" => "/voice.html"]
  ]]; ?>
  <?php get_template_part("./common/_breadcrumbs", null, ["breadcrumbsData" =>
  $breadcrumbsData]) ?>
  <section class="l-voice">
    <div class="voice">
      <div class="voice__inner inner">
        <div class="voice__tab-contents">
          <?php get_template_part("./common/_tab-card") ?>
          <div class="voice__cards">
            <?php get_template_part("./common/_voice-cards") ?>
          </div>
        </div>
        <div class="voice__pager">
          <?php get_template_part("./common/_pager") ?>
        </div>
      </div>
    </div>
  </section>
  <section class="l-top-contact">
    <?php get_template_part("./common/_contact") ?>
  </section>
</main>
<?php get_footer(); ?>