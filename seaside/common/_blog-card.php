<?php $blogCardData = $args["blogCardData"]; ?>
<?php $top = $args["top"]; ?>
<div class="blog-card ?>">
  <a href="<?php echo $blogCardData["link"] ?>">
    <div class="blog-card__inner">
      <figure class="blog-card__image">
        <img src="<?php echo get_template_directory_uri();
                  echo $blogCardData["imgPath"] ?>" alt="<?php echo $blogCardData["alt"] ?>" width="300"
          height="200" />
      </figure>
      <div class="blog-card__content">
        <time class="blog-card__date"
          datetime="<?php echo $blogCardData["datetime"] ?>"><?php echo $blogCardData["date"] ?></time>
        <div class="blog-card__title"><?php echo $blogCardData["title"] ?></div>
        <div class="blog-card__text">
          <?php echo $blogCardData["text"] ?>
        </div>
      </div>
    </div>
  </a>
</div>