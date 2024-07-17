<?php $campaignCardData = $args["campaignCardData"]; ?>
<?php $page = $args["page"]; ?>

<a class="campaign-card<?php echo $page ? " campaign-card--page" : "" ?>"
  href="<?php echo $campaignCardData["link"] ?>">
  <figure class="campaign-card__image">
    <img src="<?php echo $campaignCardData["imgPath"] ?>" alt="<?php echo $campaignCardData["alt"] ?>" />
  </figure>
  <div class="campaign-card__body">
    <div class="campaign-card__top">
      <div class="campaign-card__label label-container">
        <span class="label"><?php echo $campaignCardData["label"] ?></span>
      </div>
      <div class="campaign-card__title"><?php echo $campaignCardData["title"] ?></div>
    </div>
    <div class="campaign-card__bottom">
      <p class="campaign-card__explain">
        <?php echo $campaignCardData["text"] ?>
      </p>
      <div class="campaign-card__price-container">
        <div class="price-container">
          <span class="price-container__cancelled-price"><?php echo $campaignCardData["cancelledPrice"] ?></span>
          <span class="price-container__price"><?php echo $campaignCardData["price"] ?></span>
        </div>
      </div>
    </div>
  </div>
</a>