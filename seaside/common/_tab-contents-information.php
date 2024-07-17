<?php $informationTabData = $args["informationTabData"]; ?>
<?php $informationTabContentsData = $args["informationTabContentsData"]; ?>

<div class="tab-contents-information">
  <div class="tab-contents-information__tab">
    <?php foreach ($informationTabData as $index => $tabData) { ?>
    <div class="tab-contents-information__item js-information<?php echo $index === 0 ? " current" : "" ?>">
      <img src="<?php echo get_template_directory_uri();
                  echo $tabData["imagePath"] ?>.svg" alt="<?php echo $tabData["alt"] ?>" class="u-desktop" width="48"
        height="48" />
      <?php echo $tabData["text"] ?><br class="u-mobile" /><?php echo $tabData["text2"] ?>
    </div>
    <?php }; ?>
  </div>
  <div class="tab-contents-information__contents-container">
    <?php foreach ($informationTabContentsData as $index => $tabContents) { ?>
    <div class="js-information-content">
      <div class="tab-contents-information__content">
        <div class="tab-contents-information__body">
          <div class="tab-contents-information__title lined-title">
            <?php echo $tabContents["title"] ?>
          </div>
          <div class="tab-contents-information__text">
            <?php echo $tabContents["text"] ?>
          </div>
        </div>
        <figure class="tab-contents-information__img">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri();
                                                          echo $tabContents["imagePath"] ?>-sp.jpg" />
            <img src="<?php echo get_template_directory_uri();
                        echo $tabContents["imagePath"] ?>-pc.jpg" alt="<?php echo $tabContents["alt"] ?>" width="492"
              height="313" />
          </picture>
        </figure>
      </div>
    </div>
    <?php }; ?>
  </div>
</div>