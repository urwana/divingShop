<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
  global $template;
  echo '<!-- Template File: ' . basename($template) . ' -->';
  ?>
  <header class="header js-header">
    <div class="header__inner">
      <?php if (is_front_page()) : ?>
      <h1 class="header__logo js-header-logo">
        <a href="<?php echo esc_url(home_url("/")); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-header.svg" alt="沖ツアーのロゴ"
            width="133" height="50" class="" />
        </a>
      </h1>
      <?php else : ?>
      <div class="header__logo">
        <a href="<?php echo esc_url(home_url("/")); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-header.svg" alt="沖ツアーのロゴ"
            width="133" height="50" />
        </a>
      </div>
      <?php endif; ?>
      <button class="header__drawer-button hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="header__navigation-pc js-header-navigation-pc">
        <ul class="navigation-pc">
          <li class="navigation-pc__item">
            <a class="navigation-pc__link" href="<?php echo esc_url(home_url("/tour")); ?>">
              <div class="navigation-pc__link-inner">
                <div class="navigation-pc__japanese">ツアー</div>
                <div class="navigation-pc__english">tour</div>
              </div>
            </a>
          </li>
          <li class="navigation-pc__item">
            <a class="navigation-pc__link" href="<?php echo esc_url(home_url("/about-us")); ?>">
              <div class="navigation-pc__link-inner">
                <div class="navigation-pc__japanese">沖ツアーとは</div>
                <div class="navigation-pc__english">About us</div>
              </div>
            </a>
          </li>
          <li class="navigation-pc__item">
            <a class="navigation-pc__link" href="<?php echo esc_url(home_url("/information")); ?>">
              <div class="navigation-pc__link-inner">
                <div class="navigation-pc__japanese">アクティビティー情報</div>
                <div class="navigation-pc__english">Information</div>
              </div>
            </a>
          </li>
          <li class="navigation-pc__item">
            <a class="navigation-pc__link" href="<?php echo esc_url(home_url("/blog")); ?>">
              <div class="navigation-pc__link-inner">
                <div class="navigation-pc__japanese">観光名所</div>
                <div class="navigation-pc__english">Spot</div>
              </div>
            </a>
          </li>
          <li class="navigation-pc__item">
            <a class="navigation-pc__link" href="<?php echo esc_url(home_url("/voice")); ?>">
              <div class="navigation-pc__link-inner">
                <div class="navigation-pc__japanese">泊まる・食べる</div>
                <div class="navigation-pc__english">Stay & Eat</div>
              </div>
            </a>
          </li>
          <li class="navigation-pc__item">
            <a class="navigation-pc__link" href="<?php echo esc_url(home_url("/price")); ?>">
              <div class="navigation-pc__link-inner">
                <div class="navigation-pc__japanese">料金一覧</div>
                <div class="navigation-pc__english">Price</div>
              </div>
            </a>
          </li>
          <li class="navigation-pc__item">
            <a class="navigation-pc__link" href="<?php echo esc_url(home_url("/faq")); ?>">
              <div class="navigation-pc__link-inner">
                <div class="navigation-pc__japanese">よくあるご質問</div>
                <div class="navigation-pc__english">FAQ</div>
              </div>
            </a>
          </li>
          <li class="navigation-pc__item">
            <a class="navigation-pc__link" href="<?php echo esc_url(home_url("/contact")); ?>">
              <div class="navigation-pc__link-inner">
                <div class="navigation-pc__japanese">お問い合わせ</div>
                <div class="navigation-pc__english">Contact</div>
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
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/tour")); ?>">
                  <div class="navigation-sp__label">ツアー</div>
                </a>
              </div>
              <div class="navigation-sp__item">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/tour_taxonomy/licence")); ?>">
                  <div class="navigation-sp__label">ライセンス講習</div>
                </a>
              </div>
              <div class="navigation-sp__item">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/tour_taxonomy/trial")); ?>">
                  <div class="navigation-sp__label">貸切体験ダイビング</div>
                </a>
              </div>
              <div class="navigation-sp__item">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/tour_taxonomy/fun")); ?>">
                  <div class="navigation-sp__label">ナイトダイビング</div>
                </a>
              </div>
            </div>
            <div class="navigation-sp__item-group">
              <div class="navigation-sp__item navigation-sp__item--top">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/about-us")); ?>">
                  <div class="navigation-sp__label">沖ツアーとは</div>
                </a>
              </div>
            </div>
            <div class="navigation-sp__item-group">
              <div class="navigation-sp__item navigation-sp__item--top">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/information")); ?>">
                  <div class="navigation-sp__label">アクティビティー情報</div>
                </a>
              </div>
              <div class="navigation-sp__item">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/information#licence")); ?>">
                  <div class="navigation-sp__label">ライセンス講習</div>
                </a>
              </div>
              <div class="navigation-sp__item">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/information#trial")); ?>">
                  <div class="navigation-sp__label">体験ダイビング</div>
                </a>
              </div>
              <div class="navigation-sp__item">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/information#fun")); ?>">
                  <div class="navigation-sp__label">ファンダイビング</div>
                </a>
              </div>
            </div>
            <div class="navigation-sp__item-group">
              <div class="navigation-sp__item navigation-sp__item--top">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/blog")); ?>">
                  <div class="navigation-sp__label">観光名所</div>
                </a>
              </div>
            </div>
          </div>
          <div class="navigation-sp__parts">
            <div class="navigation-sp__item-group">
              <div class="navigation-sp__item navigation-sp__item--top">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/voice")); ?>">
                  <div class="navigation-sp__label">泊まる・食べる</div>
                </a>
              </div>
            </div>
            <div class="navigation-sp__item-group">
              <div class="navigation-sp__item navigation-sp__item--top">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/price")); ?>">
                  <div class="navigation-sp__label">料金一覧</div>
                </a>
              </div>
              <div class="navigation-sp__item">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/price#licence")); ?>">
                  <div class="navigation-sp__label">ライセンス講習</div>
                </a>
              </div>
              <div class="navigation-sp__item">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/price#trial")); ?>">
                  <div class="navigation-sp__label">体験ダイビング</div>
                </a>
              </div>
              <div class="navigation-sp__item">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/price#fun")); ?>">
                  <div class="navigation-sp__label">ファンダイビング</div>
                </a>
              </div>
            </div>
            <div class="navigation-sp__item-group">
              <div class="navigation-sp__item navigation-sp__item--top">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/faq")); ?>">
                  <div class="navigation-sp__label">よくある質問</div>
                </a>
              </div>
            </div>
            <div class="navigation-sp__item-group">
              <div class="navigation-sp__item navigation-sp__item--top">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/privacypolicy")); ?>">
                  <div class="navigation-sp__label">
                    プライバシー<br />
                    ポリシー
                  </div>
                </a>
              </div>
            </div>
            <div class="navigation-sp__item-group">
              <div class="navigation-sp__item navigation-sp__item--top">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/terms-of-service")); ?>">
                  <div class="navigation-sp__label">利用規約</div>
                </a>
              </div>
            </div>
            <div class="navigation-sp__item-group">
              <div class="navigation-sp__item navigation-sp__item--top">
                <a class="navigation-sp__link" href="<?php echo esc_url(home_url("/contact")); ?>">
                  <div class="navigation-sp__label">お問い合わせ</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>