<div class="sidebar-voice">
  <?php get_template_part("/common/_sidebar-title", null,  ["title" => "口コミ", "className" => "sidebar-voice__title"]) ?>
  <?php
  $voiceCardData = [
    "link" => "/voice.html#woman20", "person" => "30代(カップル)",
    "label" => "ライセンス講習",
    "title" => "ここにタイトルが入ります。ここにタイトル",
    "imgPathPc" => "/assets/images/blog/sidebar-voice.jpg",
    "imgPathSp" => "/assets/images/blog/sidebar-voice.jpg", "alt" => "30代(カップル)",
    "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。"
  ]; ?>
  <div class="sidebar-voice__card">
    <?php get_template_part("/common/_voice-card-sidebar", null, ["voiceCardData" => $voiceCardData]) ?>
  </div>
</div>