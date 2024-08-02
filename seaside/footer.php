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
          <a href="https://www.facebook.com/" target=”_blank” class="sns-icons__link">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-facebook.svg" alt="Facebook" width="24" height="24" />
          </a>
          <a href="https://www.instagram.com/" target=”_blank” class="sns-icons__link">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-instagram.svg" alt="Instagram" width="24" height="24" />
          </a>
          <a href="https://x.com/" target=”_blank” class="sns-icons__link sns-icons__link--twitter">
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