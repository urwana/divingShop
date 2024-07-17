<?php $priceListData = $args["priceListData"]; ?>
<?php $priceListDataItems = $priceListData["items"]; ?>

<div class="price-lists__item">
  <div class="price-list">
    <div id="<?php echo $priceListData["id"] ?>" class="price-list__title">
      <div class="price-list__title-inner">
        <p><?php echo $priceListData["title"] ?></p>
        <figure class="price-list__title-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/whale.svg" alt="鯨のアイコン" width="64" height="64" />
        </figure>
      </div>
    </div>
    <dl class="price-list__body">
      <?php foreach ($priceListDataItems as $index => $item) { ?>
        <div class="price-list__item">
          <dt class="price-list__name">
            <?php echo $item["name"] ?><br class="u-mobile" /><?php echo $item["name2"] ?>
          </dt>
          <dd class="price-list__price"><?php echo $item["price"] ?></dd>
        </div>
      <?php }; ?>
    </dl>
  </div>
</div>