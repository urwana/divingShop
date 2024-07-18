<?php $articleCardDataAll = $args["articleCardDataAll"]; ?>
<div class="article-cards">
  <?php foreach ($articleCardDataAll as $index => $articleCard) { ?>
  <?php get_template_part("/common/_article-card", null, ["articleCard" => $articleCard]) ?>
  <?php }; ?>
</div>