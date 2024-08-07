<?php get_header(); ?>
<main>
  <div class="error-404">
    <?php get_template_part("/common/_breadcrumbs"); ?>
    <div class="error-404__inner inner">
      <div class="error-404__main-text">404</div>
      <div class="error-404__sub-text">
        申し訳ありません。<br />
        お探しのページが見つかりません。
      </div>
      <div class="error-404__button">
        <a href="<?php echo esc_url(home_url("/")); ?>" class="button button--reverse"><span class="button__text">Page
            Top</span></a>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>