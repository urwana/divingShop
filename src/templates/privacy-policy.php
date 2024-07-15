<?php $base = ["path" => "./", "title" => "プライバシーポリシー", "description" => "沖縄那覇市のダイビングショップ CodeUps のサイトのプライバシーポリシーページです。営業時間:8:30-19:00 定休日:毎週火曜日"] ?>
<!DOCTYPE html>
<html lang="ja">
<?php get_template_part("./common/_head", null, ["base" => $base]) ?>

<body>
  <?php get_template_part("./common/_header", null, ["top" => false]) ?>
  <main>
    <?php $subKeyVisualData = [
      "pageTitle" => "Privacy Policy",
      "imageClass" => "privacy-policy-background"
    ] ?>
    <?php get_template_part("./top/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]) ?>
    <?php $breadcrumbsData = [
      "white" => false,
      "list" => [["title" => "TOP", "url" => "/"], ["title" => $base["title"], "url" => "/privacy-policy.html"]]
    ];
    ?>
    <?php get_template_part("./common/_breadcrumbs", null, ["breadcrumbsData" => $breadcrumbsData]) ?>
    <section class="privacy-policy l-privacy-policy">
      <div class="static-page">
        <div class="static-page__inner inner">
          <h2 class="static-page__title">プライバシーポリシー</h2>
          <div class="static-page__group">
            <p class="static-page__text">
              以下は、Webサイトで使用するための一般的なプライバシーポリシーの例です。
            </p>
          </div>
          <div class="static-page__group">
            <ol class="static-page__list">
              <li class="static-page__list-item">
                概要
                当社は、お客様の個人情報を大切に扱い、個人情報保護に努めています。本プライバシーポリシーには、当社がどのように個人情報を収集し、使用するかについて説明しています。
              </li>
              <li class="static-page__list-item">
                収集する情報
                当社は、お客様が当社のサービスを利用する際に、お名前、住所、電話番号、メールアドレスなどの個人情報を収集する場合があります。
              </li>
            </ol>
          </div>
          <div class="static-page__group">
            <p class="static-page__text">
              また、当社のサイトを閲覧する際に、IPアドレス、ブラウザの種類、言語設定、アクセス日時などの情報も収集する場合があります。
            </p>
            <ol class="static-page__list">
              <li class="static-page__list-item">
                情報の使用
                当社は、お客様から収集した個人情報を、以下の目的で使用することがあります。
              </li>
            </ol>
          </div>
          <div class="static-page__group">
            <p class="static-page__text">
              ・お客様からのお問い合わせやサポートの提供
              ・当社のサービスや製品の提供
              ・当社のサイトの改善や新しいサービスの開発
              ・法律や規制に基づく義務の履行
            </p>
            <ol class="static-page__list">
              <li class="static-page__list-item">
                情報の共有
                当社は、お客様から収集した個人情報を、以下の場合に限り第三者に提供することがあります。
              </li>
            </ol>
          </div>
          <div class="static-page__group">
            <p class="static-page__text">
              ・お客様の同意がある場合 ・法律や規制に基づく場合
              ・当社が信頼できると判断した業務委託先に必要な範囲で提供する場合
            </p>
            <ol class="static-page__list">
              <li class="static-page__list-item">
                セキュリティ
                当社は、お客様の個人情報を適切に保護するために、適切な安全対策を講じます。個人情報への不正アクセス、紛失、改ざん、漏洩等を防止するための措置を講じます。
              </li>
              <li class="static-page__list-item">
                Cookieの使用
                当社は、お客様により良いサイトの利用体験を提供するために、Cookieを使用する場合があります。Cookieは、お客様が当社のサイトを訪れた際に、お客様のブラウザに保存される小さなデータファイルです。Cookieには個人情報は含まれません。
              </li>
              <li class="static-page__list-item">
                お問い合わせ先
                当社のプライバシーポリシーに関するご質問やご意見は、以下の連絡先までお問い合わせください。
                [会社名] [住所] [電話番号] [メールアドレス]
              </li>
              <li class="static-page__list-item">
                プライバシーポリシーの変更
                当社は、必要に応じて本プライバシーポリシーを変更することがあります。変更後のプライバシーポリシーは、当社のサイトに掲載された時点から効力を有するものとします。変更があった場合、当社は適切な手段でお知らせします。
              </li>
            </ol>
          </div>
          <div class="static-page__group">
            <p class="static-page__text">
              以上が、当社のプライバシーポリシーの概要です。お客様の個人情報保護のために、常に努めてまいります。
            </p>
          </div>
        </div>
      </div>
    </section>
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