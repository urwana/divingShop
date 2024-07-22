<div class="blog-card ?>">
  <a href="<?php the_permalink() ?>">
    <div class="blog-card__inner">
      <?php
      if (has_post_thumbnail()) {
      ?>
      <figure class="campaign-card__image">
        <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>" />
      </figure>
      <?php
      };
      ?>
      <div class="blog-card__content">
        <time class="blog-card__date" datetime="<?php the_time("c"); ?>"><?php the_time("Y/m/d"); ?></time>
        <div class="blog-card__title"><?php the_title(); ?></div>
        <div class="blog-card__text">
          <?php the_excerpt() ?>
        </div>
      </div>
    </div>
  </a>
</div>