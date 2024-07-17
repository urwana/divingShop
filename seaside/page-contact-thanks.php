<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Contact",
    "imageClass" => "contact-background"
  ] ?>
  <?php get_template_part(
    "./top/_sub-key-visual",
    null,
    ["subKeyVisualData" => $subKeyVisualData]
  ) ?>
  <?php
  $breadcrumbsData = [
    "white" => false,
    "list" => [
      ["title" => "TOP", "url" => "/"],
      [
        "title" => "お問い合わせ",
        "url" => "/contact.html"
      ],
      [
        "title" => $base["title"],
        "url" => "/thanks.html"
      ]
    ]
  ]; ?>
  <?php get_template_part("./common/_breadcrumbs", null, ["breadcrumbsData" => $breadcrumbsData]) ?>
  <div class="l-contact">
    <div class="contact">
      <div class="contact__inner">
        <div class="thanks">
          <p class="thanks__title">お問い合わせ内容を送信完了しました。</p>
          <p class="thanks__explain">
            このたびは、お問い合わせ頂き<br class="u-mobile" />誠にありがとうございます。<br />
            お送り頂きました内容を確認の上、<br class="u-mobile" />3営業日以内に折り返しご連絡させて頂きます。<br />
            また、ご記入頂いたメールアドレスへ、<br class="u-mobile" />自動返信の確認メールをお送りしております。
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>