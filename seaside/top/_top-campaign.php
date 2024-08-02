<section class="l-top-campaign">
  <div class="top-campaign">
    <div class="top-campaign__inner inner">
      <div class="top-campaign__title">
        <div class="section-title">
          <p class="section-title__word">Campaign</p>
          <h2 class="section-title__japan">キャンペーン</h2>
        </div>
      </div>
      <div class="top-campaign__swiper">
        <?php
        $args = array(
          "post_type" => "campaign",
          'posts_per_page' => 4,
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
      </div>
      <div class="top-campaign__button">
        <a href="/seaside/campaign" class="button"><span class="button__text">View more</span></a>
      </div>
    </div>
  </div>
</section>