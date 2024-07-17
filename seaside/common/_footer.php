<footer class="footer">
  <div class="footer__inner inner">
    <div class="footer__images-container">
      <figure class="footer__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="codeUps コードアップスのロゴ" width="200" height="75" />
      </figure>
      <div class="footer__sns-icons sns-icons">
        <a href="/facebook" class="sns-icons__link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-facebook.svg" alt="Facebook" width="24" height="24" />
        </a>
        <a href="/instagram" class="sns-icons__link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-instagram.svg" alt="Instagram" width="24" height="24" />
        </a>
        <a href="/x" class="sns-icons__link sns-icons__link--twitter">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-twitter.svg" alt="Twitter" width="24" height="24" />
        </a>
      </div>
    </div>
    <nav class="footer__navigation">
      <?php get_template_part("./_navigation-responsive", null, ["footer" => true]) ?>
    </nav>
    <div class="footer__copy">
      <small>
        Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.
      </small>
    </div>
  </div>
</footer>