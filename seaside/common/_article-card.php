<?php $articleCard = isset($args["articleCard"]) ? $args["articleCard"] : []; ?>
<div class="article-card">
  <a class="article-card__inner" href="<?php echo isset($articleCard["link"]) ? $articleCard["link"] : '#'; ?>">
    <figure class="article-card__image">
      <?php
      if (has_post_thumbnail()) :
      ?>
      <figure class="campaign-card__image">
        <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>" width="121" height="90" />
      </figure>
      <?php
      endif;
      ?>
    </figure>
    <div class="article-card__body">
      <time class="article-card__date" datetime="<?php the_time("c") ?>"><?php the_time("Y/m/d"); ?>
      </time>
      <div class="article-card__title"><?php the_title(); ?></div>
    </div>
  </a>
</div>