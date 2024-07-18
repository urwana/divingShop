<div class="voice-cards">
  <?php $voiceCardDataAll = [
    [
      "link" => "/voice#woman20",
      "person" => "30代(カップル)",
      "label" => "ライセンス講習",
      "title" => "ここにタイトルが入ります。ここにタイトル",
      "imgPathPc" => "/assets/images/top/top-voice-sp1.jpg",
      "imgPathSp" => "/assets/images/top/top-voice-pc1.jpg",
      "alt" => "30代(カップル)",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。"
    ],
    [
      "link" => "/voice#man30",
      "person" => "30代(男性)",
      "label" => "ファンダイビング",
      "title" => "ここにタイトルが入ります。ここにタイトル",
      "imgPathPc" => "/assets/images/top/top-voice-sp2.jpg",
      "imgPathSp" => "/assets/images/top/top-voice-pc2.jpg",
      "alt" => "30代(男性)の画像",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。"
    ],
    [
      "link" => "/voice#man30",
      "person" => "30代(男性)",
      "label" => "ファンダイビング",
      "title" => "ここにタイトルが入ります。ここにタイトル",
      "imgPathPc" => "/assets/images/top/test.jpg",
      "imgPathSp" => "/assets/images/top/test.jpg",
      "alt" => "30代(男性)の画像",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。"
    ],
  ];
  ?>
  <?php foreach ($voiceCardDataAll as $index => $voiceCardData) { ?>
  <div class="voice-cards-sidebar__item">
    <?php get_template_part("/common/_voice-card-sidebar", null, ["voiceCardData" => $voiceCardData]) ?>
  </div>
  <?php }; ?>
</div>