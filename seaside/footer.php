<?php if (!is_404() && !is_page("contact") && !is_page("contact-thanks")) : ?>
  <?php global $template;
  echo '<!-- ' . basename($template) . ' -->';
  ?>
  <section class="l-top-contact">
    <div class="top-contact">
      <div class="top-contact__inner inner">
        <div class="top-contact__conntents">
          <div class="top-contact__info">
            <div class="top-contact-logo__container">
              <figure class="top-contact-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/contact-logo-sp.svg" alt="CodeUpsのロゴ" width="200" height="75" />
              </figure>
            </div>
            <div class="top-contact__company-info-container">
              <div class="top-contact__company-info company-info">
                <p class="company-info__address">沖縄県那覇市1-1</p>
                <p class="company-info__tel">TEL:0120-000-0000</p>
                <p class="company-info__hours">営業時間:8:30-19:00</p>
                <p class="company-info__holidays">定休日:毎週火曜日</p>
              </div>
              <div class="top-contact__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14318.404015986776!2d127.67581646584523!3d26.209654634744712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5rKW57iE55yM6YKj6KaH5biCMS0x!5e0!3m2!1sja!2sjp!4v1712921091388!5m2!1sja!2sjp" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <div class="top-contact__contact">
            <div class="top-contact__title">
              <div class="section-title section-title--contact">
                <p class="section-title__word">Contact</p>
                <h2 class="section-title__japan">お問い合わせ</h2>
              </div>
              <p class="section-title__explain">ご予約・お問い合わせはコチラ</p>
            </div>
            <div class="top-contact__button-container">
              <a href="<?php echo esc_url(home_url("/contact")); ?>" class="button"><span class="button__text">Contact us</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<div class="l-footer">
  <a href="#" class="js-scroll-to-top scroll-to-top">
    <div class="button-scroll"></div>
  </a>
  <footer class="footer">
    <div class="footer__inner inner">
      <div class="footer__images-container">
        <figure class="footer__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="codeUps コードアップスのロゴ" width="200" height="75" />
        </figure>
        <div class="footer__sns-icons sns-icons">
          <a href="<?php echo esc_url(home_url("https://www.facebook.com/")); ?>" target=”_blank” class="sns-icons__link">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-facebook.svg" alt="Facebook" width="24" height="24" />
          </a>
          <a href="<?php echo esc_url(home_url("https://www.instagram.com/")); ?>" target=”_blank” class="sns-icons__link">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-instagram.svg" alt="Instagram" width="24" height="24" />
          </a>
          <a href="<?php echo esc_url(home_url("https://x.com/")); ?>" target=”_blank” class=" sns-icons__link
            sns-icons__link--twitter">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-twitter.svg" alt="Twitter" width="24" height="24" />
          </a>
        </div>
      </div>
      <nav class="footer__navigation">
        <?php get_template_part("/common/_navigation-responsive", null, ["footer" => true]); ?>
      </nav>
      <div class="footer__copy">
        <small>
          Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.
        </small>
      </div>
    </div>
  </footer> <?php wp_footer(); ?>
</div>
</body>

</html>