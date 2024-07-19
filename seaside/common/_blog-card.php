<div class="blog-card ?>">
  <a href="<?php echo $blogCardData["link"] ?>">
    <div class="blog-card__inner">
      <?php if (has_post_thumbnail()) : ?>
      <div><?php the_post_thumbnail(); ?></div>
      <?php endif; ?>
      <div class="blog-card__content">
        <time class="blog-card__date" datetime="<?php the_time("Y-m-d"); ?>"><?php the_time("Y/m/d"); ?></time>
        <div class="blog-card__title"><?php the_title(); ?></div>
        <div class="blog-card__text">
          <?php the_excerpt() ?>
        </div>
      </div>
    </div>
  </a>
</div>