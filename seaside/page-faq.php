<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "FAQ",
    "imageClass" => "faq-background",
    "detail" => false
  ]; ?>
  <?php get_template_part("/common/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs"); ?>
  <div class="faq l-faq">
    <div class="faq__inner inner">
      <div class="faq__contents">
        <div class="qa-boxes">
          <?php
          $qa_boxes = CFS()->get('qa_box');
          ?>
          <?php foreach ($qa_boxes as $key => $qa_box) : ?>
          <div class="qa-boxes__item">
            <div class="qa-box">
              <div class="js-question qa-box__question is-open">
                <?php echo $qa_box["qa_box_question"]; ?>
                <div class="qa-icon">
                  <span class="qa-icon__vertical"></span>
                  <span class="qa-icon__horizontal"></span>
                </div>
              </div>
              <div class="qa-box__answer"><?php echo $qa_box["qa_box_answer"]; ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>