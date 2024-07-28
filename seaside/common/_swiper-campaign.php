<?php
$args = array(
  "post_type" => "campaign"
);
$the_query = new WP_Query($args);
?>
<div class="js-swiper-campaign swiper-campaign">
  <div class="swiper-wrapper swiper-campaign__wrapper">
    <?php if (have_posts()) {
      while ($the_query->have_posts()) {
        $the_query->the_post();
    ?>
    <div class="swiper-slide swiper-campaign__swiper-slide">
      <div class="top-campaign__card">
        <?php get_template_part('/common/_campaign-card', null, ["page" => false]) ?>
      </div>
    </div>
    <?php }
    }; ?>
  </div>
  <div class="swiper-campaign__button-prev u-desktop">
    <div class="button-scroll--left"></div>
  </div>
  <div class="swiper-campaign__button-next u-desktop">
    <div class="button-scroll--right"></div>
  </div>
</div>