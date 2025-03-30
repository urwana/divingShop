<?php $top = $args['top']; ?>
<div class="about">
  <div class="about__inner inner <?php echo $top ? "" : "about__inner--fish about__inner--page" ?>">
    <?php if ($top) : ?>
    <div class="about__title">
      <div class="section-title">
        <p class="section-title__word">About us</p>
        <h2 class="section-title__japan">沖ツアーとは</h2>
      </div>
    </div>
    <?php endif ?>
    <div class="about__image-container<?php echo $top ? "" : " about__image-container--page" ?>">
      <figure class="about__image-left">
        <picture>
          <source media="(max-width: 767px)"
            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/bg-about-sp-left.jpg" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/bg-about-pc-left.jpg"
            alt="about セクションの背景画像 左" />
        </picture>
      </figure>
      <figure class="about__image-right">
        <picture>
          <source media="(max-width: 767px)"
            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/bg-about-sp-right.jpg" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/bg-about-pc-right.jpg"
            alt="about セクションの背景画像 右" />
        </picture>
      </figure>
    </div>
    <div class="about__contents<?php echo $top ? "" : " about__contents--page" ?>">
      <div class="about__catch-copy">
        Dive into<br />
        the Ocean
      </div>
      <div class="about__body">
        <div class="about__text">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
        </div>
        <?php if ($top) : ?>
        <div class="about__button">
          <a href="<?php echo esc_url(home_url("/about-us")); ?>" class="button"><span class="button__text">View
              more</span></a>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>