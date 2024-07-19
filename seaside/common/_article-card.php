<?php $articleCard = isset($args["articleCard"]) ? $args["articleCard"] : []; ?>
<div class="article-card">
  <a class="article-card__inner" href="<?php echo isset($articleCard["link"]) ? $articleCard["link"] : '#'; ?>">
    <figure class="article-card__image">
      <img src="<?php echo get_template_directory_uri();
                echo isset($articleCard["imgPath"]) ? $articleCard["imgPath"] : ''; ?>"
        alt="<?php echo isset($articleCard["alt"]) ? $articleCard["alt"] : ''; ?>" width="121" height="90" />
    </figure>
    <div class="article-card__body">
      <time class="article-card__date"
        datetime="<?php echo isset($articleCard["datetime"]) ? $articleCard["datetime"] : ''; ?>"><?php echo isset($articleCard["date"]) ? $articleCard["date"] : ''; ?>
      </time>
      <div class="article-card__title"><?php echo isset($articleCard["title"]) ? $articleCard["title"] : ''; ?></div>
    </div>
  </a>
</div>