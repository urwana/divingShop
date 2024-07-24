<?php $price_lists_item = $args["price_lists_item"]; ?>

<div class="price-lists__item">
  <div class="price-list">
    <div id="licence" class="price-list__title">
      <div class="price-list__title-inner">
        <p><?php $price_lists_item["plice_list_title"] ?></p>
        <figure class="price-list__title-icon">
          <img src="http://seaside.local/wp-content/themes/seaside/assets/images/price/whale.svg" alt="鯨のアイコン"
            width="64" height="64" />
        </figure>
      </div>
    </div>
    <dl class="price-list__body">
      <?php
        $price_list_body=$price_lists_item["price_list_body"];
        foreach ($pricelist_body as $price_list) { ?>
      <div class="price-list__item">
        <dt class="price-list__name">
          <?php $price_list["price_title"] ?>
        </dt>
        <dd class="price-list__price"> <?php $price_list["price"] ?></dd>
      </div>
      <?php } ?>
    </dl>
  </div>
</div>