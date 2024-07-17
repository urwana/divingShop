<?php $base = ["path" => "./", "title" => "トップ", "description" => "沖縄那覇市のダイビングショップ CodeUps のサイトのトップページです。営業時間:8:30-19:00 定休日:毎週火曜日"] ?>
<!DOCTYPE html>
<html lang="ja">
<?php get_template_part("./common/_head", null, ["base" => $base]) ?>

<body class="js-gsap">
  <?php get_template_part("./common/_header", null, ["top" => true]) ?>
  <main>
    <?php get_template_part("./top/_key-visual") ?>
    <section class="l-top-campaign">
      <?php get_template_part("./top/_top-campaign") ?>
    </section>
    <section class="l-top-about">
      <?php get_template_part("./common/_about", null, ["top" => true]) ?>
    </section>
    <section class="l-top-information">
      <?php get_template_part("./top/_top-information") ?>
    </section>
    <section class="l-top-blog">
      <?php get_template_part("./top/_top-blog") ?>
    </section>
    <section class="l-top-voice">
      <?php get_template_part("./top/_top-voice") ?>
    </section>
    <section class="l-top-price">
      <?php get_template_part("./top/_top-price") ?>
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