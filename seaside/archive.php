<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Voice",
    "imageClass" => "voice-background",
    "detail" => false
  ]; ?>
  <?php get_template_part("/top/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs"); ?>
  <section class="l-voice">
    <div class="voice">
      <div class="voice__inner inner">
        <div class="voice__tab-contents">
          <?php get_template_part("/common/_tab-card", null, ["post_type" => "voice", "taxonomy" => "voice_taxonomy"]); ?>
          <div class="voice__cards">
            <?php get_template_part("/common/_voice-cards", null, ["top" => false]); ?>
          </div>
        </div>
        <div class="voice__pager">
          <?php get_template_part("/common/_pager"); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="l-top-contact">
    <?php get_template_part("./common/_contact"); ?>
  </section>
</main>
<?php get_footer(); ?>