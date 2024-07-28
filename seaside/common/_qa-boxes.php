<?php
$qa_boxes = CFS()->get('qa_box');
?>
<div class="qa-boxes">
  <?php foreach ($qa_boxes as $key => $qa_box) : ?>
  <div class="qa-boxes__item">
    <?php get_template_part("/common/_qa-box", null, ["qa_box" => $qa_box]) ?>
  </div>
  <?php endforeach; ?>
</div>