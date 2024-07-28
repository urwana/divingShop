<header class="header">
  <div class="header__inner">
    <?php if (is_front_page()) : ?>
    <h1 class="header__logo">
      <a href="/seaside">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="codeUps コードアップスのロゴ"
          width="133" height="50" />
      </a>
    </h1>
    <?php else : ?>
    <div class="header__logo">
      <a href="/seaside">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="codeUps コードアップスのロゴ"
          width="133" height="50" />
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
          <a class="navigation-pc__link" href="/seaside/campaign">
            <div class="navigation-pc__link-inner">
              <div class="navigation-pc__english">Campaign</div>
              <div class="navigation-pc__japanese">キャンペーン</div>
            </div>
          </a>
        </li>
        <li class="navigation-pc__item">
          <a class="navigation-pc__link" href="/seaside/about-us">
            <div class="navigation-pc__link-inner">
              <div class="navigation-pc__english">About us</div>
              <div class="navigation-pc__japanese">私たちについて</div>
            </div>
          </a>
        </li>
        <li class="navigation-pc__item">
          <a class="navigation-pc__link" href="/seaside/information">
            <div class="navigation-pc__link-inner">
              <div class="navigation-pc__english">Information</div>
              <div class="navigation-pc__japanese">ダイビング情報</div>
            </div>
          </a>
        </li>
        <li class="navigation-pc__item">
          <a class="navigation-pc__link" href="/seaside/blog">
            <div class="navigation-pc__link-inner">
              <div class="navigation-pc__english">Blog</div>
              <div class="navigation-pc__japanese">ブログ</div>
            </div>
          </a>
        </li>
        <li class="navigation-pc__item">
          <a class="navigation-pc__link" href="/seaside/voice">
            <div class="navigation-pc__link-inner">
              <div class="navigation-pc__english">Voice</div>
              <div class="navigation-pc__japanese">お客様の声</div>
            </div>
          </a>
        </li>
        <li class="navigation-pc__item">
          <a class="navigation-pc__link" href="/seaside/price">
            <div class="navigation-pc__link-inner">
              <div class="navigation-pc__english">Price</div>
              <div class="navigation-pc__japanese">料金一覧</div>
            </div>
          </a>
        </li>
        <li class="navigation-pc__item">
          <a class="navigation-pc__link" href="/seaside/faq">
            <div class="navigation-pc__link-inner">
              <div class="navigation-pc__english">FAQ</div>
              <div class="navigation-pc__japanese">よくある質問</div>
            </div>
          </a>
        </li>
        <li class="navigation-pc__item">
          <a class="navigation-pc__link" href="/seaside/contact">
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
              <a class="navigation-sp__link" href="/seaside/campaign">
                <div class="navigation-sp__label">キャンペーン</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/seaside/campaign#licence">
                <div class="navigation-sp__label">ライセンス講習</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/seaside/campaign#trial">
                <div class="navigation-sp__label">貸切体験ダイビング</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/seaside/campaign#fun">
                <div class="navigation-sp__label">ナイトダイビング</div>
              </a>
            </div>
          </div>
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/seaside/about-us">
                <div class="navigation-sp__label">私たちについて</div>
              </a>
            </div>
          </div>
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/seaside/information">
                <div class="navigation-sp__label">ダイビング情報</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/seaside/information#licence">
                <div class="navigation-sp__label">ライセンス講習</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/seaside/information#trial">
                <div class="navigation-sp__label">体験ダイビング</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/seaside/information#fun">
                <div class="navigation-sp__label">ファンダイビング</div>
              </a>
            </div>
          </div>
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/seaside/blog">
                <div class="navigation-sp__label">ブログ</div>
              </a>
            </div>
          </div>
        </div>
        <div class="navigation-sp__parts">
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/seaside/voice">
                <div class="navigation-sp__label">お客様の声</div>
              </a>
            </div>
          </div>
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/seaside/price">
                <div class="navigation-sp__label">料金一覧</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/seaside/price#licence">
                <div class="navigation-sp__label">ライセンス講習</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/seaside/price#trial">
                <div class="navigation-sp__label">体験ダイビング</div>
              </a>
            </div>
            <div class="navigation-sp__item">
              <a class="navigation-sp__link" href="/seaside/price#fun">
                <div class="navigation-sp__label">ファンダイビング</div>
              </a>
            </div>
          </div>
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/seaside/faq">
                <div class="navigation-sp__label">よくある質問</div>
              </a>
            </div>
          </div>
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/seaside/privacypolicy">
                <div class="navigation-sp__label">
                  プライバシー<br />
                  ポリシー
                </div>
              </a>
            </div>
          </div>
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/seaside/terms-of-service">
                <div class="navigation-sp__label">利用規約</div>
              </a>
            </div>
          </div>
          <div class="navigation-sp__item-group">
            <div class="navigation-sp__item navigation-sp__item--top">
              <a class="navigation-sp__link" href="/seaside/contact">
                <div class="navigation-sp__label">お問い合わせ</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>