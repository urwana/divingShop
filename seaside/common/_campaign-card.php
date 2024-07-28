<?php $page = $args["page"]; ?>

<a class="campaign-card<?php echo $page ? " campaign-card--page" : "" ?>"
  href="<?php echo $campaignCardData["link"] ?>">
  <?php
  if (has_post_thumbnail()) :
  ?>
  <figure class="campaign-card__image">
    <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>" />
  </figure>
  <?php
  endif;
  ?>

  <div class="campaign-card__body">
    <div class="campaign-card__top">
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
        </span>
      </div>
      <div class="campaign-card__title"><?php the_title(); ?></div>
    </div>
    <div class="campaign-card__bottom">
      <p class="campaign-card__explain">
        <?php the_field("main_text"); ?>
      </p>
      <div class="campaign-card__price-container">
        <div class="price-container">
          <span class="price-container__cancelled-price">¥<?php the_field("cancelled_price") ?></span>
          <span class="price-container__price">¥<?php the_field("price") ?></span>
        </div>
      </div>
    </div>
  </div>
</a>