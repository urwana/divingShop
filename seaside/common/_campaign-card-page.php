<?php $page = $args["page"]; ?>
<?php $sideBar = $args["sideBar"]; ?>

<a class="campaign-card<?php echo $page ? " campaign-card--page" : "" ?> js-card<?php echo $campaignCard["dataType"] ?>"
  href="/seaside/campaign">
  <figure class="campaign-card__image<?php echo $sideBar ? " campaign-card__image--sidebar" : "" ?>">
    <?php
    if (has_post_thumbnail()) :
    ?>
    <figure class="campaign-card__image">
      <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>" />
    </figure>
    <?php
    endif;
    ?>
  </figure>
  <div
    class="campaign-card__body <?php echo $page ? "campaign-card__body--page" : ""; ?> <?php echo $sideBar ? "campaign-card__body--side-bar" : ""; ?>">
    <div class="campaign-card__top">
      <?php if (!$sideBar) : ?>
      <div class="campaign-card__label label-container">
        <span class="label">
          <?php
            $post_id = get_the_ID();
            $campaign_terms = get_the_terms($post_id, 'campaign_taxonomy');
            if ($campaign_terms && !is_wp_error($campaign_terms)) :
              foreach ($campaign_terms as $term) :
                echo esc_html($term->name) . ' ';
              endforeach;
            endif; ?>
      </div>
      <?php endif; ?>
      <div
        class="campaign-card__title<?php echo $page ? " campaign-card__title--page" : "" ?><?php echo $sideBar ? " campaign-card__title--sidebar" : "" ?>">
        <?php the_title(); ?></div>
    </div>
    <div class="campaign-card__bottom">
      <p class="campaign-card__explain<?php echo $sideBar ? " campaign-card__explain--sidebar" : "" ?>">
        <?php the_field("main_text"); ?>
      </p>
      <div class="campaign-card__price-container">
        <div class="price-container">
          <span
            class="price-container__cancelled-price<?php echo $sideBar ? " price-container__cancelled-price--sidebar" : "" ?>">¥<?php the_field("cancelled_price") ?></span>
          <span
            class="price-container__price<?php echo $sideBar ? " price-container__price--sidebar" : "" ?>">¥<?php the_field("price") ?></span>
        </div>
      </div>
    </div>
    <?php if (!$sideBar) : ?>
    <div class="campaign-card__bottom2">
      <div class="campaign-card__text">
        <?php $excerpt = get_the_excerpt();
          echo $excerpt; ?></div>
      <div class="campaign-card__date-container">
        <p class="campaign-card__date">
          <time datetime="2023-06-01"><?php the_field("start_date") ?></time>
          -
          <time datetime="2023-09-30"><?php the_field("end_date") ?></time>
        </p>
        <?php if (get_field("has_link")) : ?>
        <p class="campaign-card__link">
          ご予約・お問い合わせはコチラ</p>
        <?php endif; ?>
      </div>
      <div class="campaign-card__button">
        <div class="js-contact-button button"><span class="button__text">Contact us</span></div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</a>