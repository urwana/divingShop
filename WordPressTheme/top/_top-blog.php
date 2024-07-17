<div class="top-blog">
  <div class="top-blog__inner inner">
    <div class="top-blog__title">
      <div class="section-title section-title--blog">
        <p class="section-title__word">Blog</p>
        <h2 class="section-title__japan">ブログ</h2>
      </div>
    </div>
    <?php $page = "top"; ?>
    <div class="top-blog__cards"><?php get_template_part("../common/_blog-cards", null, ["top" => true]) ?></div>
    <div class="top-blog__button">
      <a href="/blog" class="button"><span class="button__text">View more</span>
      </a>
    </div>
  </div>
</div>