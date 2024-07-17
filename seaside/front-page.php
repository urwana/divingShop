<?php get_header(); ?>
<main>
  <?php get_template_part("/top/_key-visual") ?>
  <section class="l-top-campaign">
    <?php get_template_part("/top/_top-campaign") ?>
  </section>
  <section class="l-top-about">
    <?php get_template_part("/common/_about", null, ["top" => true]) ?>
  </section>
  <section class="l-top-information">
    <?php get_template_part("/top/_top-information") ?>
  </section>
  <section class="l-top-blog">
    <?php get_template_part("/top/_top-blog") ?>
  </section>
  <section class="l-top-voice">
    <?php get_template_part("/top/_top-voice") ?>
  </section>
  <section class="l-top-price">
    <?php get_template_part("/top/_top-price") ?>
  </section>
  <section class="l-top-contact">
    <?php get_template_part("/common/_contact") ?>
  </section>
</main>
<?php get_footer(); ?>