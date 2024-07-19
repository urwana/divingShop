<?php $top = $args["top"]; ?>

<div class="<?php echo $top  ? "blog-cards" : "blog-cards blog-cards--2col" ?>">
  <?php $blogCardDataAll = [
    [
      "link" => "/blog-detail.html",
      "imgPath" => "/assets/images/blog/blog-card1.jpg",
      "alt" => "ライセンス取得の画像",
      "date" => "2023/11/17",
      "datetime" => "2023-11-17",
      "title" => "ライセンス取得",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト",
    ],
    [
      "link" => "/blog-detail.html",
      "imgPath" => "/assets/images/blog/blog-card2.jpg",
      "alt" => "ウミガメと泳ぐ",
      "date" => "2023/11/17",
      "datetime" => "2023-11-17",
      "title" => "ウミガメと泳ぐ",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト",
    ],
    [
      "link" => "/blog-detail.html",
      "imgPath" => "/assets/images/blog/blog-card3.jpg",
      "alt" => "カクレクマノミ",
      "date" => "2023/11/17",
      "datetime" => "2023-11-17",
      "title" => "カクレクマノミ",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト",
    ],
    [
      "link" => "/blog-detail.html",
      "imgPath" => "/assets/images/blog/blog-card4.jpg",
      "alt" => "ライセンス取得の画像",
      "date" => "2023/11/17",
      "datetime" => "2023-11-17",
      "title" => "ライセンス取得",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト",
    ],
    [
      "link" => "/blog-detail.html",
      "imgPath" => "/assets/images/blog/blog-card5.jpg",
      "alt" => "ウミガメと泳ぐ",
      "date" => "2023/11/17",
      "datetime" => "2023-11-17",
      "title" => "ウミガメと泳ぐ",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト",
    ],
    [
      "link" => "/blog-detail.html",
      "imgPath" => "/assets/images/blog/blog-card6.jpg",
      "alt" => "カクレクマノミ",
      "date" => "2023/11/17",
      "datetime" => "2023-11-17",
      "title" => "カクレクマノミ",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト",
    ],
    [
      "link" => "/blog-detail.html",
      "imgPath" => "/assets/images/blog/blog-card1.jpg",
      "alt" => "ライセンス取得の画像",
      "date" => "2023/11/17",
      "datetime" => "2023-11-17",
      "title" => "ライセンス取得",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト",
    ],
    [
      "link" => "/blog-detail.html",
      "imgPath" => "/assets/images/blog/blog-card2.jpg",
      "alt" => "ウミガメと泳ぐ",
      "date" => "2023/11/17",
      "datetime" => "2023-11-17",
      "title" => "ウミガメと泳ぐ",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト",
    ],
    [
      "link" => "/blog-detail.html",
      "imgPath" => "/assets/images/blog/blog-card3.jpg",
      "alt" => "カクレクマノミ",
      "date" => "2023/11/17",
      "datetime" => "2023-11-17",
      "title" => "カクレクマノミ",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト",
    ],
    [
      "link" => "/blog-detail.html",
      "imgPath" => "/assets/images/blog/blog-card4.jpg",
      "alt" => "ライセンス取得の画像",
      "date" => "2023/11/17",
      "datetime" => "2023-11-17",
      "title" => "ライセンス取得",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト",
    ],
  ];
  ?>
  <?php if (have_posts()) :
    while (have_posts()) :
      the_post(); ?>
  <div class="blog-cards__item">
    <?php get_template_part("/common/_blog-card") ?>
  </div>

  <?php endwhile;
  endif; ?>
</div>