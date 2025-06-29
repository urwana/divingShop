<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "料金",
    "imageClass" => "price-background",
    "detail" => false
  ]; ?>
  <?php get_template_part("/common/_sub-key-visual", null,  ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs"); ?>
  <div class="l-price">
    <div class="price">
      <div class="price__inner inner">
        <div class="price__contents">
          <?php $price_lists = CFS()->get('price_lists');
          $price_lists_item = $price_lists[0]["price_lists_item"]; ?>
          <?php if (!empty($price_lists) && isset($price_lists_item)) : ?>
          <div class="price-lists">
            <?php foreach ($price_lists_item as $price_list_group) : ?>
            <div class="price-lists__item" id="<?php echo $price_list_group["price_list_id"]; ?>">
              <div class="price-list">
                <div id="licence" class="price-list__title">
                  <div class="price-list__title-inner">
                    <p><?php echo $price_list_group["price_list_title"]; ?></p>
                    <figure class="price-list__title-icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/bg-ceaser.webp"
                        alt="鯨のアイコン" width="64" height="64" />
                    </figure>
                  </div>
                </div>
                <dl class="price-list__body">
                  <?php
                      $price_list_body = $price_list_group["price_list_body"];
                      foreach ($price_list_body as $price_list) : ?>
                  <div class="price-list__item">
                    <dt class="price-list__name">
                      <?php echo $price_list["price_title"] ?>
                    </dt>
                    <dd class="price-list__price">¥ <?php echo number_format((int)$price_list["price"]); ?></dd>
                  </div>
                  <?php endforeach; ?>
                </dl>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <?php else: ?>
          <div>料金表は現在準備中です</div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>