<?php $articleCard = $args["articleCard"]; ?>
<div class="article-card">
  <a class="article-card__inner" href="<?php echo $articleCard["link"] ?>">
    <figure class="article-card__image">
      <img src="<?php echo get_template_directory_uri();
                echo $articleCard["imgPath"] ?>" alt="<?php echo $articleCard["alt"] ?>" width="121" height="90" />
    </figure>
    <div class="article-card__body">
      <time class="article-card__date"
        datetime="<?php echo $articleCard["datetime"] ?>"><?php echo $articleCard["date"] ?></time>
      <div class="article-card__title"><?php echo $articleCard["title"] ?></div>
    </div>
  </a>
</div>