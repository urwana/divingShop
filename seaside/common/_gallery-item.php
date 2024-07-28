<?php $gallery = $args["gallery"]; ?>

<figure class="js-modalPhoto gallery__item">
  <picture>
    <source srcset="<?php echo get_template_directory_uri();
                    echo $gallery["image"]; ?>-sp.jpg" media="(max-width: 767px)" />
    <img src="<?php echo get_template_directory_uri();
              echo $gallery["image"] ?>-pc.jpg" alt="<?php echo $gallery["alt"]; ?>"
      width="<?php echo $gallery["width"] ?>" height="<?php echo $gallery["height"]; ?>" />
  </picture>
</figure>