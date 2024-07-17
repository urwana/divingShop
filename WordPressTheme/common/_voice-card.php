<?php $voiceCardData = $args["voiceCardData"]; ?>

<div class="voice-card js-card<?php echo $voiceCardData["dataType"] ?>">
  <a href="<?php echo $voiceCardData["link"] ?>">
    <div class="voice-card__head">
      <div class="voice-card__info">
        <div class="voice-card__meta">
          <div class="voice-card__person"><?php echo $voiceCardData["person"] ?></div>
          <div class="voice-card__label">
            <span class="label"><?php echo $voiceCardData["label"] ?></span>
          </div>
        </div>
        <div class="voice-card__title">
          <div class="lined-title">
            <?php echo $voiceCardData["title"] ?>
          </div>
        </div>
      </div>
      <figure class="js-colorAnimation voice-card__image">
        <picture>
          <source srcset="<?php echo $voiceCardData["imgPathSp"] ?>" media="(max-width: 767px)" />
          <img src="<?php echo $voiceCardData["imgPathPc"] ?>" alt="<?php echo $voiceCardData["alt"] ?>" width="180"
            height="140" />
        </picture>
      </figure>
    </div>
    <div class="voice-card__text">
      <?php echo $voiceCardData["text"] ?>
    </div>
  </a>
</div>