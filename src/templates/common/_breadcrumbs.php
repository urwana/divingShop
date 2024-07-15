<?php $breadcrumbsData = $args["breadcrumbsData"]; ?>
<?php $breadcrumbs = $breadcrumbsData["list"]; ?>

<div class="breadcrumbs">
  <div class="breadcrumbs__inner inner">
    <?php foreach ($breadcrumbs as $index => $breadcrumb) { ?>
    <?php if ($index == count($breadcrumbs) - 1) { ?>
    <span class="breadcrumbs__item-current"><?php echo $breadcrumb["title"] ?></span>
    <?php } else { ?>
    <a href="<?php echo $breadcrumb["url"] ?>"
      class="breadcrumbs__item <?php echo $breadcrumbsData["white"]  ? "breadcrumbs__item--white" : "" ?>"><?php echo $breadcrumb["title"] ?></a>
    <?php } ?>
    <?php }; ?>
  </div>
</div>