<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "Contact",
    "imageClass" => "contact-background",
    "detail" => false
  ] ?>
  <?php get_template_part("/top/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]) ?>
  <?php get_template_part("/common/_breadcrumbs") ?>
  <section class="contact l-contact">
    <div class="contact__inner inner">
      <div class="js-error-message contact__error-message error-message-hidden">必須項目が入力されていません。<br
          class="u-mobile">入力してください。</div>
      <?php get_template_part("/common/_contact-form") ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>