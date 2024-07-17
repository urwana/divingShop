<?php $articleCardDataAll = $args["articleCardDataAll"]; ?>
<div class="article-cards">
  <?php $articleCardDataAll.forEach($articleCard => { ?>
    <?php get_template_part("./_article-card", null, ["articleCard" => $articleCard]) ?>
  <?php }); ?>
</div>