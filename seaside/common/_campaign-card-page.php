<?php $campaignCard = $args["campaignCard"]; ?>
<?php $page = $args["page"]; ?>
<?php $cardType = $args["cardType"]; ?>
<?php $sideBar = $args["sideBar"]; ?>

<a class="campaign-card<?php echo $page ? " campaign-card--page" : "" ?> js-card<?php echo $campaignCard["dataType"] ?>"
  href="<?php echo $campaignCard["link"] ?>">
  <figure class="campaign-card__image<?php echo $sideBar ? " campaign-card__image--sidebar" : "" ?>">
    <!-- retina sp 3倍対応のため PC 版画像を流用する -->
    <img src="<?php echo get_template_directory_uri();
              echo $campaignCard["imgPath"] ?>-pc.jpg" alt="<?php echo $campaignCard["alt"] ?>"
      width="<?php echo $campaignCard["width"] ?>" height="<?php echo $campaignCard["height"] ?>" />
  </figure>
  <div
    class="campaign-card__body <?php echo $page ? "campaign-card__body--page" : ""; ?> <?php echo $sideBar ? "campaign-card__body--side-bar" : ""; ?>">
    <div class="campaign-card__top">
      <?php if (!$sideBar) { ?>
      <div class="campaign-card__label label-container">
        <span class="label"><?php echo $campaignCard["label"] ?></span>
      </div>
      <?php } ?>
      <div
        class="campaign-card__title<?php echo $page ? " campaign-card__title--page" : "" ?><?php echo $sideBar ? " campaign-card__title--sidebar" : "" ?>">
        <?php echo $campaignCard["title"] ?></div>
    </div>
    <div class="campaign-card__bottom">
      <p class="campaign-card__explain<?php echo $sideBar ? " campaign-card__explain--sidebar" : "" ?>">
        <?php echo $campaignCard["text"] ?>
      </p>
      <div class="campaign-card__price-container">
        <div class="price-container">
          <span
            class="price-container__cancelled-price<?php echo $sideBar ? " price-container__cancelled-price--sidebar" : "" ?>"><?php echo $campaignCard["cancelledPrice"] ?></span>
          <span
            class="price-container__price<?php echo $sideBar ? " price-container__price--sidebar" : "" ?>"><?php echo $campaignCard["price"] ?></span>
        </div>
      </div>
    </div>
    <?php if (!$sideBar) { ?>
    <div class="campaign-card__bottom2">
      <div class="campaign-card__text">
        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
      </div>
      <div class="campaign-card__date-container">
        <p class="campaign-card__date">
          <time datetime="2023-06-01">2023/6/1</time>
          -
          <time datetime="2023-09-30">9/30</time>
        </p>
        <p class="campaign-card__link">ご予約・お問い合わせはコチラ</p>
      </div>
      <div class="campaign-card__button">
        <div class="js-contact-button button"><span class="button__text">Contact us</span></div>
      </div>
    </div>
    <?php } ?>
  </div>
</a>