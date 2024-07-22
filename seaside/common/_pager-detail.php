<?php $prev_url = $args["prev_url"]; ?>
<?php $next_url = $args["next_url"]; ?>

<div class="pager-detail">
  <?php if (!empty($prev_url)) { ?>
  <a href="<?php echo $prev_url ?>" class="pager__previous"></a>
  <?php }
  if (!empty($next_url)) { ?>
  <a href="<?php echo $next_url ?>" class="pager__next"></a>
  <?php } ?>
</div>