<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Information",
    "imageClass" => "information-background",
    "detail" => false
  ] ?>
  <?php get_template_part("/top/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs"); ?>
  <div class="l-information">
    <div class="information">
      <div class="information__inner inner">
        <div class="information__tab-contents">
          <?php $informationTabData = [
            [
              "text" => "ライセンス",
              "text2" => "講習",
              "imagePath" => "/assets/images/common/whale-icon-w"
            ],
            [
              "text" => "ファン",
              "text2" => "ダイビング",
              "imagePath" => "/assets/images/common/whale-icon"
            ],
            [
              "text" => "体験",
              "text2" => "ダイビング",
              "imagePath" => "/assets/images/common/whale-icon"
            ],
          ];
          $informationTabContentsData = [[
            "title" => "ライセンス講習",
            "text" => "泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！",
            "imagePath" => "/assets/images/information/tab-contents1",
            "alt" => "ライセンス講座の画像"
          ], [
            "title" => "ファンダイビング",
            "text" => "ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！",
            "imagePath" => "/assets/images/information/tab-contents2",
            "alt" => "ファンダイビング"
          ], [
            "title" => "体験ダイビング",
            "text" => "ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！",
            "imagePath" => "/assets/images/information/tab-contents3",
            "alt" => "体験ダイビング"
          ],]; ?>
          <?php get_template_part("/common/_tab-contents-information", null, ["informationTabData" => $informationTabData, "informationTabContentsData" => $informationTabContentsData]); ?>
        </div>
      </div>
    </div>
  </div>
  <section class="l-top-contact">
    <?php get_template_part("/common/_contact") ?>
  </section>
</main>
<?php get_footer(); ?>