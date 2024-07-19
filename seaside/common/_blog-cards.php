<?php $top = $args["top"]; ?>

<div class="<?php echo $top  ? "blog-cards" : "blog-cards blog-cards--2col" ?>">
  <?php if (have_posts()) :
    while (have_posts()) :
      the_post(); ?>
  <div class="blog-cards__item">
    <?php get_template_part("/common/_blog-card") ?>
  </div>

  <?php endwhile;
  endif; ?>
</div>