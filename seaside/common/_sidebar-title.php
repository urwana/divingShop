<?php $title = $args["title"]; ?>
<?php $className = $args["className"]; ?>
<h2 class="<?php echo $className ?> sidebar-title">
  <figure class="sidebar-title__icon">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/title-whale.svg" alt="クジラアイコン" width="50"
      height="50" />
  </figure>
  <p class="sidebar-title__text">
    <?php echo $title; ?>
  </p>
</h2>