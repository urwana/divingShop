<header class="header">
  <div class="header__inner">
    <?php if (is_front_page()) : ?>
    <h1 class="header__logo">
      <a href="/">
        <img src="./assets/images/common/logo.svg" alt="codeUps コードアップスのロゴ" width="133" height="50" />
      </a>
    </h1>
    <?php else : ?>
    <div class="header__logo">
      <a href="/">
        <img src="./assets/images/common/logo.svg" alt="codeUps コードアップスのロゴ" width="133" height="50" />
      </a>
    </div>
    <?php endif; ?>
    <button class="header__drawer-button hamburger js-hamburger">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <nav class="header__navigation-pc">
      <ul class="navigation-pc">
        <li class="navigation-pc__item">
          <a class="navigation-pc__link" href="/campaign.html">
            <div class="navigation-pc__link-inner">
              <div class="navigation-pc__english">Campaign</div>
              <div class="navigation-pc__japanese">キャンペーン</div>
            </div>
          </a>
        </li>
        <li class="navigation-pc__item">
          <a class="navigation-pc__link" href="/about-us.html">
            <div class="navigation-pc__link-inner">
              <div class="navigation-pc__english">About us</div>
              <div class="navigation-pc__japanese">私たちについて</div>
            </div>
          </a>
        </li>
        <li class="navigation-pc__item">
          <a class="navigation-pc__link" href="/information.html">
            <div class="navigation-pc__link-inner">
              <div class="navigation-pc__english">Information</div>
              <div class="navigation-pc__japanese">ダイビング情報</div>
            </div>
          </a>
        </li>
        <li class="navigation-pc__item">
          <a class="navigation-pc__link" href="/blog.html">
            <div class="navigation-pc__link-inner">
              <div class="navigation-pc__english">Blog</div>
              <div class="navigation-pc__japanese">ブログ</div>
            </div>
          </a>
        </li>
        <li class="navigation-pc__item">
          <a class="navigation-pc__link" href="/voice.html">
            <div class="navigation-pc__link-inner">
              <div class="navigation-pc__english">Voice</div>
              <div class="navigation-pc__japanese">お客様の声</div>
            </div>
          </a>
        </li>
        <li class="navigation-pc__item">
          <a class="navigation-pc__link" href="/price.html">
            <div class="navigation-pc__link-inner">
              <div class="navigation-pc__english">Price</div>
              <div class="navigation-pc__japanese">料金一覧</div>
            </div>
          </a>
        </li>
        <li class="navigation-pc__item">
          <a class="navigation-pc__link" href="/faq.html">
            <div class="navigation-pc__link-inner">
              <div class="navigation-pc__english">FAQ</div>
              <div class="navigation-pc__japanese">よくある質問</div>
            </div>
          </a>
        </li>
        <li class="navigation-pc__item">
          <a class="navigation-pc__link" href="/contact.html">
            <div class="navigation-pc__link-inner">
              <div class="navigation-pc__english">Contact</div>
              <div class="navigation-pc__japanese">お問い合わせ</div>
            </div>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <nav class="header__navigation-sp js-drawer-menu">
    <div class="header__navigation-sp-inner">
      <div class="navigation-sp">
        <div class="navigation-sp__parts">
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/campaign.html">
                <div class="navigation-sp__label">キャンペーン</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/campaign.html#licence">
                <div class="navigation-sp__label">ライセンス講習</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/campaign.html#trial">
                <div class="navigation-sp__label">貸切体験ダイビング</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/campaign.html#fun">
                <div class="navigation-sp__label">ナイトダイビング</div>
              </a>
            </div>
          </div>
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/about-us.html">
                <div class="navigation-sp__label">私たちについて</div>
              </a>
            </div>
          </div>
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/information.html">
                <div class="navigation-sp__label">ダイビング情報</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/information.html#licence">
                <div class="navigation-sp__label">ライセンス講習</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/information.html#trial">
                <div class="navigation-sp__label">体験ダイビング</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/information.html#fun">
                <div class="navigation-sp__label">ファンダイビング</div>
              </a>
            </div>
          </div>
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/blog.html">
                <div class="navigation-sp__label">ブログ</div>
              </a>
            </div>
          </div>
        </div>
        <div class="navigation-sp__parts">
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/voice.html">
                <div class="navigation-sp__label">お客様の声</div>
              </a>
            </div>
          </div>
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/price.html">
                <div class="navigation-sp__label">料金一覧</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/price.html#licence">
                <div class="navigation-sp__label">ライセンス講習</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/price.html#trial">
                <div class="navigation-sp__label">体験ダイビング</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/price.html#fun">
                <div class="navigation-sp__label">ファンダイビング</div>
              </a>
            </div>
          </div>
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/faq.html">
                <div class="navigation-sp__label">よくある質問</div>
              </a>
            </div>
          </div>
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/privacy-policy.html">
                <div class="navigation-sp__label">
                  プライバシー<br />
                  ポリシー
                </div>
              </a>
            </div>
          </div>
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/terms-of-service.html">
                <div class="navigation-sp__label">利用規約</div>
              </a>
            </div>
          </div>
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/contact.html">
                <div class="navigation-sp__label">お問い合わせ</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>