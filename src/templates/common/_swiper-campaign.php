<?php $campaignCardDataAll = [
  [
    "link" => "/campaign#licence",
    "imgPath" => "./assets/images/top/campaign-card1.jpg",
    "alt" => "ライセンス取得の画像",
    "label" => "ライセンス講習",
    "title" => "ライセンス取得",
    "text" => "全部コミコミ(お一人様)",
    "cancelledPrice" => "¥56,000",
    "price" => "¥46,000"
  ],
  [
    "link" => "/campaign#diving-rental",
    "imgPath" => "./assets/images/top/campaign-card2.jpg",
    "alt" => "貸切体験ダイビングの画像",
    "label" => "体験ダイビング",
    "title" => "貸切体験ダイビング",
    "text" => "全部コミコミ(お一人様)",
    "cancelledPrice" => "¥24,000",
    "price" => "¥18,000"
  ],
  [
    "link" => "/campaign#diving-night",
    "imgPath" => "./assets/images/top/campaign-card3.jpg",
    "alt" => "ナイトダイビングの画像",
    "label" => "体験ダイビング",
    "title" => "ナイトダイビング",
    "text" => "全部コミコミ(お一人様)",
    "cancelledPrice" => "¥10,000",
    "price" => "¥8,000"
  ],
  [
    "link" => "/campaign#diving-fun",
    "imgPath" => "./assets/images/top/campaign-card4.jpg",
    "alt" => "貸切ファンダイビングの画像",
    "label" => "ファンダイビング",
    "title" => "貸切ファンダイビング",
    "text" => "全部コミコミ(お一人様)",
    "cancelledPrice" => "¥20,000",
    "price" => "¥16,000"
  ],
];
?>
<div class="js-swiper-campaign swiper-campaign">
  <div class="swiper-wrapper swiper-campaign__wrapper">
    <?php foreach ($campaignCardDataAll as $index => $campaignCardData) { ?>
    <div class="swiper-slide swiper-campaign__swiper-slide">
      <div class="top-campaign__card">
        <?php get_template_part('./_campaign-card', null, ["campaignCardData" => $campaignCardData]) ?>
      </div>
    </div>
    <?php }; ?>
  </div>
  <div class="swiper-campaign__button-prev u-desktop">
    <div class="button-scroll--left"></div>
  </div>
  <div class="swiper-campaign__button-next u-desktop">
    <div class="button-scroll--right"></div>
  </div>
</div>