<?php $faqData = $args["faqData"]; ?>
<div class="qa-box">
  <div class="js-question qa-box__question is-open">
    <?php echo $faqData["question"] ?> <?php get_template_part("/common/_qa-icon") ?>
  </div>
  <div class="qa-box__answer"><?php echo $faqData["answer"] ?></div>
</div>