<?php $cardType = $args["cardType"]; ?>
<?php $sideBar = $args["sideBar"]; ?>
<?php $page = $args["page"]; ?>
<?php $campaignCardDataAll = $args["campaignCardDataAll"]; ?>
<?php $campaignCardData = $campaignCardDataAll["campaignCardData"]; ?>

<div class="<?php echo $sideBar ? "campaign-cards--sidebar" : "campaign-cards"  ?>">
  <?php foreach ($campaignCardData as $index => $campaignCard) { ?>
  <?php get_template_part("./_campaign-card-page", null, ["campaignCardData" => $campaignCardData, "page" => $page, "sideBar" => $sideBar, "cardType" => $cardType]) ?>
  <?php }; ?>
</div>