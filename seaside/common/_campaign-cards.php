<?php $cardType = $args["cardType"]; ?>
<?php $sideBar = isset($args["sideBar"]) ? $args["sideBar"] : false; ?>
<?php $page = $args["page"]; ?>
<?php $campaignCardDataAll = $args["campaignCardDataAll"]; ?>

<div class="<?php echo $sideBar ? "campaign-cards--sidebar" : "campaign-cards"  ?>">
  <?php foreach ($campaignCardDataAll as $index => $campaignCard) { ?>
  <?php get_template_part("/common/_campaign-card-page", null, ["campaignCard" => $campaignCard, "page" => $page, "sideBar" => $sideBar, "cardType" => $cardType]) ?>
  <?php }; ?>
</div>