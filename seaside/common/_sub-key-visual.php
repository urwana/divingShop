<?php $subKeyVisualData = $args["subKeyVisualData"]; ?>

<section class="js-key-visual sub-key-visual <?php echo $subKeyVisualData["imageClass"] ?>">
  <?php if ($subKeyVisualData["detail"]) { ?>
  <div class="page-title">
    <?php echo $subKeyVisualData["pageTitle"] ?>
  </div>
  <?php } else { ?>
  <h1 class="page-title">
    <?php echo $subKeyVisualData["pageTitle"] ?>
  </h1>
  <?php }; ?>
</section>