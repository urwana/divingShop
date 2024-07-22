<div class="voice-cards">
  <?php $voiceCardDataAll = [
    [
      "link" => "/information.html#licence",
      "dataType" => "1",
      "person" => "20代(女性)",
      "label" => "ライセンス講習",
      "title" => "ここにタイトルが入ります。ここにタイトル",
      "imgPathPc" => "/assets/images/voice/voice-pc1.jpg",
      "imgPathSp" => "/assets/images/voice/voice-pc1.jpg",
      "alt" => "20代(女性)の画像",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。"
    ],
    [
      "link" => "/information.html#fun",
      "dataType" => "2",
      "person" => "30代(男性)",
      "label" => "ファンダイビング",
      "title" => "ここにタイトルが入ります。ここにタイトル",
      "imgPathPc" => "/assets/images/voice/voice-pc2.jpg",
      "imgPathSp" => "/assets/images/voice/voice-pc2.jpg",
      "alt" => "30代(男性)の画像",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。"
    ],
    [
      "link" => "/information.html#trial",
      "dataType" => "3",
      "person" => "30代(男性)",
      "label" => "体験ダイビング",
      "title" => "ここにタイトルが入ります。ここにタイトル",
      "imgPathPc" => "/assets/images/voice/voice-pc3.jpg",
      "imgPathSp" => "/assets/images/voice/voice-pc3.jpg",
      "alt" => "30代(男性)の画像",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。"
    ],
    [
      "link" => "/information.html#trial",
      "dataType" => "2",
      "person" => "30代(男性)",
      "label" => "体験ダイビング",
      "title" => "ここにタイトルが入ります。ここにタイトル",
      "imgPathPc" => "/assets/images/voice/voice-pc4.jpg",
      "imgPathSp" => "/assets/images/voice/voice-pc4.jpg",
      "alt" => "30代(男性)の画像",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。"
    ],
    [
      "link" => "/information.html#fun",
      "dataType" => "3",
      "person" => "30代(男性)",
      "label" => "ファンダイビング",
      "title" => "ここにタイトルが入ります。ここにタイトル",
      "imgPathPc" => "/assets/images/voice/voice-pc5.jpg",
      "imgPathSp" => "/assets/images/voice/voice-pc5.jpg",
      "alt" => "30代(男性)の画像",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。"
    ],
    [
      "link" => "/information.html#licence",
      "dataType" => "1",
      "person" => "30代(男性)",
      "label" => "ライセンス講習",
      "title" => "ここにタイトルが入ります。ここにタイトル",
      "imgPathPc" => "/assets/images/voice/voice-pc6.jpg",
      "imgPathSp" => "/assets/images/voice/voice-pc6.jpg",
      "alt" => "30代(男性)の画像",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。"
    ],
  ];
  ?>

  <?php
  $voice_args = array(
    'post_type' => 'voice',
    'posts_per_page' => 6
  );
  $voice_page_query = new WP_Query($voice_args);
  if ($voice_page_query->have_posts()) :
    while ($voice_page_query->have_posts()) :
      $voice_page_query->the_post(); ?>
  <div class="voice-cards__item">
    <?php get_template_part("/common/_voice-card") ?>
  </div>
  <?php endwhile;
  endif; ?>
</div>