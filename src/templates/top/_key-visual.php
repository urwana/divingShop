<div class="js-key-visual key-visual">
  <div class="swiper key-visual__swiper">
    <div class="js-opening opening">
      <figure class="opening__image-left">
        <picture>
          <source media="(max-width: 767px)" srcset="./assets/images/top/opening/kv-l-sp.jpg" />
          <img src="./assets/images/top/opening/kv-l.jpg" alt="オープニング左側の画像" />
        </picture>
      </figure>
      <figure class="opening__image-right">
        <picture>
          <source media="(max-width: 767px)" srcset="./assets/images/top/opening/kv-r-sp.jpg" />
          <img src="./assets/images/top/opening/kv-r.jpg" alt="オープニング右側の画像" />
        </picture>
      </figure>
      <div class="opening__title-container">
        <div class="opening__title">
          DIVING
        </div>
        <p class="opening__subtitle">
          into the ocean
        </p>
      </div>
    </div>
    <div class="swiper-wrapper key-visual__swiper-wrapper">
      <?php $keyVisualDataAll = [
        [
          "imgPathPc" => "./assets/images/top/swiper/pc1.jpg",
          "imgPathSp" => "./assets/images/top/swiper/sp1.jpg",
          "alt" => "キービジュアル 泳ぐウミガメ",
        ],
        [
          "imgPathPc" => "./assets/images/top/swiper/pc2.jpg",
          "imgPathSp" => "./assets/images/top/swiper/sp2.jpg",
          "alt" => "キービジュアル 海中 ウミガメとダイバー",
        ],
        [
          "imgPathPc" => "./assets/images/top/swiper/pc3.jpg",
          "imgPathSp" => "./assets/images/top/swiper/sp3.jpg",
          "alt" => "キービジュアル 沖縄の海と空と船",
        ],
        [
          "imgPathPc" => "./assets/images/top/swiper/pc4.jpg",
          "imgPathSp" => "./assets/images/top/swiper/sp4.jpg",
          "alt" => "キービジュアル 沖縄の海と空と船",
        ],
      ];
      ?>
      <?php foreach ($keyVisualDataAll as $index => $keyVisualData) { ?>
      <figure class="swiper-slide key-visual__swiper-slide">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo $keyVisualData["imgPathSp"] ?>" />
          <img src="<?php echo $keyVisualData["imgPathPc"] ?>" alt="<?php echo $keyVisualData["alt"] ?>" />
        </picture>
      </figure>
      <?php }; ?>
    </div>
  </div>
</div>
</div>