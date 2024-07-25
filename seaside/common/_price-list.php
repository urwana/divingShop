<?php $price_list_group = $args["price_list_group"]; ?>

<?php
// echo '<pre>';
// var_dump($price_lists_item);
// echo '</pre>';
?>

<div class="price-list">
  <div id="licence" class="price-list__title">
    <div class="price-list__title-inner">
      <p><?php echo $price_list_group["price_list_title"] ?></p>
      <figure class="price-list__title-icon">
        <img src="http://seaside.local/wp-content/themes/seaside/assets/images/price/whale.svg" alt="鯨のアイコン" width="64"
          height="64" />
      </figure>
    </div>
  </div>


  <dl class="price-list__body">
    <?php
    $price_list_body = $price_list_group["price_list_body"];
    foreach ($price_list_body as $price_list) { ?>
    <div class="price-list__item">
      <dt class="price-list__name">
        <?php echo $price_list["price_title"] ?>
      </dt>
      <dd class="price-list__price"> <?php echo $price_list["price"] ?></dd>
    </div>
    <?php } ?>
  </dl>
</div>