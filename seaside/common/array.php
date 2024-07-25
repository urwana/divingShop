<?php
$array = [
    [
        "plice_list_title" => "ライセンス講習",
        "price_list_body" => [
            [
                "price_title" => "オープンウォーターダイバーコース",
                "price" => "¥50,000"
            ],
            [
                "price_title" => "アドバンスドオープンウォーターコース",
                "price" => "¥60,000"
            ],
            [
                "price_title" => "レスキュー＋EFRコース",
                "price" => "¥70,000"
            ]
        ]
    ],
    [
        "plice_list_title" => "体験ダイビング",
        "price_list_body" => [
            [
                "price_title" => "ビーチ体験ダイビング(半日)",
                "price" => "¥7,000"
            ],
            [
                "price_title" => "ビーチ体験ダイビング(1日)",
                "price" => "¥14,000"
            ],
            [
                "price_title" => "ボート体験ダイビング",
                "price" => "¥10,000"
            ],
            [
                "price_title" => "ボート体験ダイビング",
                "price" => "¥18,000"
            ]
        ]
    ],
    [
        "plice_list_title" => "ファンダイビング",
        "price_list_body" => [
            [
                "price_title" => "ビーチダイビング(2ダイブ)",
                "price" => "¥14,000"
            ],
            [
                "price_title" => "ボートダイビング(2ダイブ)",
                "price" => "¥18,000"
            ],
            [
                "price_title" => "スペシャルダイビング(2ダイブ)",
                "price" => "¥24,000"
            ],
            [
                "price_title" => "ナイトダイビング(1ダイブ)",
                "price" => "¥10,000"
            ]
        ]
    ],
    [
        "plice_list_title" => "スペシャルダイビング",
        "price_list_body" => [
            [
                "price_title" => "貸切ダイビング(2ダイブ)",
                "price" => "¥24,000"
            ],
            [
                "price_title" => "1日ダイビング(3ダイブ)",
                "price" => "¥32,000"
            ],
            [
                "price_title" => "ナイトダイビング(2ダイブ)",
                "price" => "¥14,000"
            ]
        ]
    ]
];

?>

<div class="price-lists__item">
  <div class="price-list">
    <div id="licence" class="price-list__title">
      <div class="price-list__title-inner">
        <p><?php echo $price_lists_item["plice_list_title"] ?></p>
        <figure class="price-list__title-icon">
          <img src="http://seaside.local/wp-content/themes/seaside/assets/images/price/whale.svg" alt="鯨のアイコン"
            width="64" height="64" />
        </figure>
      </div>
    </div>
    <dl class="price-list__body">
      <?php
            $price_list_body = $price_lists_item["price_list_body"];
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