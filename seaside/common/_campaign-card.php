<?php $page = $args["page"]; ?>

<a class="campaign-card<?php echo $page ? " campaign-card--page" : "" ?>"
  href="<?php echo $campaignCardData["link"] ?>">
  <?php
  if (has_post_thumbnail()) {
  ?>
  <figure class="campaign-card__image">
    <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>" />
  </figure>
  <?php
  };
  ?>

  <div class="campaign-card__body">
    <div class="campaign-card__top">
      <div class="campaign-card__label label-container">
        <span class="label">カテゴリー</span>
      </div>
      <div class="campaign-card__title"><?php the_title(); ?></div>
    </div>
    <div class="campaign-card__bottom">
      <p class="campaign-card__explain">
        テキスト
      </p>
      <div class="campaign-card__price-container">
        <div class="price-container">
          <span class="price-container__cancelled-price">cancelledPrice"</span>
          <span class="price-container__price">price</span>
        </div>
      </div>
    </div>
  </div>
</a>