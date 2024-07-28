<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Campaign",
    "imageClass" => "campaign-background",
    "detail" => false
  ] ?>
  <?php get_template_part("/top/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs"); ?>
  <div class="l-campaign">
    <div class="campaign">
      <div class="campaign__inner inner">
        <div class="campaign__tab">
          <?php get_template_part("/common/_tab-card", null, ["post_type" => "campaign", "taxonomy" => "campaign_taxonomy"]); ?>
        </div>
        <div class="campaign__cards">
          <?php get_template_part("/common/_campaign-cards", null, ["page" => true]); ?>
        </div>
        <div class="campaign__pager">
          <?php get_template_part("/common/_pager"); ?>
        </div>
      </div>
    </div>
  </div>
  <section class="l-top-contact">
    <?php get_template_part("/common/_contact"); ?>
  </section>
</main>
<?php get_footer(); ?>