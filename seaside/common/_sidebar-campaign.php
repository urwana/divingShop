<div class="sidebar-campaign">
  <?php get_template_part("/common/_sidebar-title", null, ["title" => "キャンペーン", "className" => "sidebar-campaign__title"]); ?>
  <div class="sidebar-campaign__cards">
    <?php get_template_part("/common/_campaign-cards", null, ["page" => false, "sideBar" => true]); ?>
    <div class="sidebar-campaign__button">
      <a href="/seaside/blog" class="button"><span class="button__text">View more</span>
      </a>
    </div>
  </div>
</div>