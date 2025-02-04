<?php $footer = $args["footer"]; ?>

<div class="navigation-responsive<?php echo !$footer ? " navigation-responsive--sitemap" : "" ?>">
  <div class="navigation-responsive__column">
    <div class="navigation-responsive__item-group">
      <div class="navigation-responsive__item<?php echo $footer ? " navigation-responsive__item--top" :  " navigation-responsive__item--top-sitemap"; ?>">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/tour")); ?>">
          <div class="navigation-responsive__label">キャンペーン</div>
        </a>
      </div>
      <div class="navigation-responsive__item">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/tour_taxonomy/licence/")); ?>">
          <div class="navigation-responsive__label">
            ライセンス講習
          </div>
        </a>
      </div>
      <div class="navigation-responsive__item">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/tour_taxonomy/trial/")); ?>">
          <div class="navigation-responsive__label">
            貸切体験ダイビング
          </div>
        </a>
      </div>
      <div class="navigation-responsive__item">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/tour_taxonomy/fun/")); ?>">
          <div class="navigation-responsive__label">
            ナイトダイビング
          </div>
        </a>
      </div>
    </div>
    <div class="navigation-responsive__item-group">
      <div class="navigation-responsive__item<?php echo $footer ? " navigation-responsive__item--top" :  " navigation-responsive__item--top-sitemap"; ?>">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/about-us")); ?>">
          <div class="navigation-responsive__label">
            私たちについて
          </div>
        </a>
      </div>
    </div>
    <?php if (!$footer) : ?>
      <div class=" navigation-responsive__item-group">
        <div class="navigation-responsive__item<?php echo $footer ? " navigation-responsive__item--top" :  " navigation-responsive__item--top-sitemap current"; ?>">
          <div class="navigation-responsive__link">
            <div class="navigation-responsive__label">
              サイトマップ
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
  <div class="navigation-responsive__column">
    <div class="navigation-responsive__item-group">
      <div class="navigation-responsive__item<?php echo $footer ? " navigation-responsive__item--top" :  " navigation-responsive__item--top-sitemap"; ?>">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/information")); ?>">
          <div class="navigation-responsive__label">
            ダイビング情報
          </div>
        </a>
      </div>
      <div class="navigation-responsive__item">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/information#licence")); ?>">
          <div class="navigation-responsive__label">
            ライセンス講習
          </div>
        </a>
      </div>
      <div class="navigation-responsive__item">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/information#trial")); ?>">
          <div class="navigation-responsive__label">
            体験ダイビング
          </div>
        </a>
      </div>
      <div class="navigation-responsive__item">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/information#fun")); ?>">
          <div class="navigation-responsive__label">
            ファンダイビング
          </div>
        </a>
      </div>
    </div>
    <div class="navigation-responsive__item-group">
      <div class="navigation-responsive__item<?php echo $footer ? " navigation-responsive__item--top" :  " navigation-responsive__item--top-sitemap"; ?>">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/blog")); ?>">
          <div class="navigation-responsive__label">ブログ</div>
        </a>
      </div>
    </div>
  </div>
  <div class="navigation-responsive__column">
    <div class="navigation-responsive__item-group">
      <div class="navigation-responsive__item<?php echo $footer ? " navigation-responsive__item--top" :  " navigation-responsive__item--top-sitemap"; ?>">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/voice")); ?>">
          <div class="navigation-responsive__label">お客様の声</div>
        </a>
      </div>
    </div>
    <div class="navigation-responsive__item-group">
      <div class="navigation-responsive__item<?php echo $footer ? " navigation-responsive__item--top" :  " navigation-responsive__item--top-sitemap"; ?>">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/price")); ?>">
          <div class="navigation-responsive__label">料金一覧</div>
        </a>
      </div>
      <div class="navigation-responsive__item">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/price#licence")); ?>">
          <div class="navigation-responsive__label">
            ライセンス講習
          </div>
        </a>
      </div>
      <div class="navigation-responsive__item">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/price#trial")); ?>">
          <div class="navigation-responsive__label">
            体験ダイビング
          </div>
        </a>
      </div>
      <div class="navigation-responsive__item">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/price#fun")); ?>">
          <div class="navigation-responsive__label">
            ファンダイビング
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="navigation-responsive__column">
    <div class="navigation-responsive__item-group">
      <div class="navigation-responsive__item<?php echo $footer ? " navigation-responsive__item--top" :  " navigation-responsive__item--top-sitemap"; ?>">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/faq")); ?>">
          <div class="navigation-responsive__label">よくある質問</div>
        </a>
      </div>
    </div>
    <div class="navigation-responsive__item-group">
      <div class="navigation-responsive__item<?php echo $footer ? " navigation-responsive__item--top" :  " navigation-responsive__item--top-sitemap"; ?>">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/privacypolicy")); ?>">
          <div class="navigation-responsive__label">
            プライバシー<br class="u-mobile" />
            ポリシー
          </div>
        </a>
      </div>
    </div>
    <div class="navigation-responsive__item-group">
      <div class="navigation-responsive__item<?php echo $footer ? " navigation-responsive__item--top" :  " navigation-responsive__item--top-sitemap"; ?>">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/terms-of-service")); ?>">
          <div class="navigation-responsive__label">利用規約</div>
        </a>
      </div>
    </div>
    <div class="navigation-responsive__item-group">
      <div class="navigation-responsive__item<?php echo $footer ? " navigation-responsive__item--top" :  " navigation-responsive__item--top-sitemap"; ?>">
        <a class="navigation-responsive__link" href="<?php echo esc_url(home_url("/contact")); ?>">
          <div class="navigation__label">お問い合わせ</div>
        </a>
      </div>
    </div>
  </div>
</div>