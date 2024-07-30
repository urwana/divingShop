<div class="js-key-visual key-visual">
  <div class="swiper key-visual__swiper">
    <div class="js-opening opening">
      <figure class="opening__image-left">
        <picture>
          <source media="(max-width: 767px)"
            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/opening/kv-l-sp.jpg" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/opening/kv-l.jpg" alt="オープニング左側の画像" />
        </picture>
      </figure>
      <figure class="opening__image-right">
        <picture>
          <source media="(max-width: 767px)"
            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/opening/kv-r-sp.jpg" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/opening/kv-r.jpg" alt="オープニング右側の画像" />
        </picture>
      </figure>
      <div class="opening__title-container">
        <div class="opening__title">
          DIVING
        </div>
        <p class="opening__subtitle">
          into the ocean
        </p>
      </div>
    </div>
    <div class="swiper-wrapper key-visual__swiper-wrapper">
      <figure class="swiper-slide key-visual__swiper-slide">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php the_field("top_swiper_sp1") ?>" />
          <img src="<?php the_field("top_swiper_1") ?>" alt="<?php the_field("top_swiper_alt1") ?>" />
        </picture>
      </figure>
      <figure class="swiper-slide key-visual__swiper-slide">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php the_field("top_swiper_sp2") ?>" />
          <img src="<?php the_field("top_swiper_2") ?>" alt="<?php the_field("top_swiper_alt2") ?>" />
        </picture>
      </figure>
      <figure class="swiper-slide key-visual__swiper-slide">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php the_field("top_swiper_sp3") ?>" />
          <img src="<?php the_field("top_swiper_3") ?>" alt="<?php the_field("top_swiper_alt3") ?>" />
        </picture>
      </figure>
      <figure class="swiper-slide key-visual__swiper-slide">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php the_field("top_swiper_sp4") ?>" />
          <img src="<?php the_field("top_swiper_4") ?>" alt="<?php the_field("top_swiper_alt4") ?>" />
        </picture>
      </figure>
    </div>
  </div>
</div>