<?php get_header(); ?>
<main>
  <?php $subKeyVisualData = [
    "pageTitle" => "泊まる・食べる",
    "imageClass" => "voice-background",
    "detail" => false
  ]; ?>
  <?php get_template_part("/common/_sub-key-visual", null, ["subKeyVisualData" => $subKeyVisualData]); ?>
  <?php get_template_part("/common/_breadcrumbs"); ?>
  <section class="l-voice">
    <div class="voice">
      <div class="voice__inner inner">
        <div class="voice__tab-contents">
          <?php get_template_part("/common/_tab-card", null, ["post_type" => "voice", "taxonomy" => "voice_taxonomy"]); ?>
          <div class="voice__cards">
            <div class="voice-cards">
              <?php
              if (have_posts()) :
                while (have_posts()) :
                  the_post(); ?>
              <div class="voice-cards__item">
                <div class="voice-card js-card<?php echo $voiceCardData["dataType"]; ?>">
                  <a href="">
                    <div class="voice-card__head">
                      <div class="voice-card__info">
                        <div class="voice-card__meta">
                          <?php if (get_field("person")): ?>
                          <div class="voice-card__person">
                            <?php echo get_field("person"); ?>
                          </div>
                          <?php endif; ?>
                          <div class="voice-card__label">
                            <?php
                                $post_id = get_the_ID();
                                $tour_terms = get_the_terms($post_id, 'voice_taxonomy');
                                if ($tour_terms && !is_wp_error($tour_terms)) :
                                  foreach ($tour_terms as $term) : ?>
                            <span class="label">
                              <?php echo esc_html($term->name); ?>
                            </span>
                            <?php endforeach;
                                endif;
                                ?>
                          </div>
                        </div>
                        <div class="voice-card__title">
                          <div class="lined-title">
                            <?php the_title(); ?>
                          </div>
                        </div>
                      </div>
                      <figure class="js-colorAnimation voice-card__image">
                        <?php
                            if (has_post_thumbnail()) :
                            ?>
                        <img src="<?php the_post_thumbnail_url("full"); ?>" alt="<?php the_title(); ?>" />
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.svg"
                          alt="画像がない場合の代替画像" style="object-fit:contain" />
                        <?php
                            endif;
                            ?>
                      </figure>
                    </div>
                    <div class="voice-card__text">
                      <?php get_custom_excerpt(250); ?>
                    </div>
                  </a>
                </div>
              </div>
              <?php endwhile; ?>
              <?php else : ?>
              <p>投稿が見つかりませんでした。</p>
              <?php endif;
              ?>
            </div>
          </div>
        </div>
        <div class="voice__pager">
          <?php get_template_part("/common/_pager"); ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>