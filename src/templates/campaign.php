<?php $base = ["path" => "./", "title" => "キャンペーン", "description" => "沖縄那覇市のダイビングショップ CodeUps のサイトのキャンペーンページです。営業時間:8:30-19:00 定休日:毎週火曜日"] ?>
<!DOCTYPE html>
<html lang="ja">
<?php get_template_part("./common/_head", null, ["base" => $base]) ?>

<body>
  <?php get_template_part("./common/_header", null, ["top" => false]) ?>
  <main>
    <?php $subKeyVisualData = ["pageTitle" => "Campaign", "imageClass" => "campaign-background"] ?>
    <?php get_template_part("./top/_sub-key-visual", ["subKeyVisualData" => $subKeyVisualData]) ?>
    <?php $breadcrumbsData = ["white" => false, "list" => [
      ["title" => "TOP", "url" => "/"], ["title" => $base["title"], "url" => "/campaign.html"]
    ]]; ?>
    <?php get_template_part("./common/_breadcrumbs", null, ["breadcrumbsData" => $breadcrumbsData]) ?>
    <div class="l-campaign">
      <div class="campaign">
        <div class="campaign__inner inner">
          <div class="campaign__tab">
            <?php get_template_part("./common/_tab-card") ?>
          </div>
          <div class="campaign__cards">
            <?php $campaignCardDataAll = [
              [
                "link" => "/information.html#licence", "dataType" => "1",
                "imgPath" => "./assets/images/campaign/campaign-card-page1", "alt" =>
                "ライセンス取得の画像", "label" => "ライセンス講習", "title" =>
                "ライセンス取得", "text" => "全部コミコミ(お一人様)全部コミコミ", "cancelledPrice" => "¥56,000", "price" =>
                "¥46,000", "width" => "520", "height" => "347"
              ],
              [
                "link" => "/information.html#trial", "dataType" => "2", "imgPath" =>
                "./assets/images/campaign/campaign-card-page2", "alt" =>
                "貸切体験ダイビングの画像", "label" => "体験ダイビング", "title" =>
                "貸切体験ダイビング", "text" => "全部コミコミ(お一人様)",
                "cancelledPrice" => "¥24,000", "price" => "¥18,000", "width" => "520", "height" => "347"
              ],
              [
                "link" =>
                "/information.html#trial", "dataType" => "2", "imgPath" =>
                "./assets/images/campaign/campaign-card-page3", "alt" =>
                "ナイトダイビングの画像", "label" => "体験ダイビング", "title" =>
                "ナイトダイビング", "text" => "全部コミコミ(お一人様)",
                "cancelledPrice" => "¥10,000", "price" => "¥8,000", "width" => "520", "height" => "347"
              ],
              [
                "link" =>
                "/information.html#fun", "dataType" => "3", "imgPath" =>
                "./assets/images/campaign/campaign-card-page4", "alt" =>
                "貸切ファンダイビングの画像", "label" => "ファンダイビング", "title" =>
                "貸切ファンダイビング", "text" => "全部コミコミ(お一人様)",
                "cancelledPrice" => "¥20,000", "price" => "¥16,000", "width" => "520", "height" => "347"
              ],
            ];
            $cardType = "page";
            ?>
            <?php get_template_part("./common/_campaign-cards", ["campaignCardDataAll" => $campaignCardDataAll, "cardType" => $cardType, "page" => true]) ?>
          </div>
          <div class="campaign__pager">
            <?php get_template_part("./common/_pager") ?>
          </div>
        </div>
      </div>
    </div>
    <section class="l-top-contact">
      <?php get_template_part("./common/_contact") ?>
    </section>
  </main>
  <div class="l-footer">
    <?php get_template_part("./common/_scrollToTop") ?>
    <?php get_template_part("./common/_footer") ?>
  </div>
</body>

</html>