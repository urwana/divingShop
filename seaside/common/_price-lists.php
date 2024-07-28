<?php
$price_lists = CFS()->get('price_lists');
?>

<?php
$price_lists_item = $price_lists[0]["price_lists_item"];
?>
<?php if (!empty($price_lists) && isset($price_lists_item)) : ?>
<div class="price-lists">
  <?php foreach ($price_lists_item as $price_list_group) : ?>
  <div class="price-lists__item">
    <?php get_template_part("/common/_price-list", null,  ["price_list_group" => $price_list_group]); ?>
  </div>
  <?php endforeach; ?>
</div>
<?php endif; ?>