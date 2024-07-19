<div class="sidebar-popular-articles">
  <?php get_template_part("/common/_sidebar-title", null, ["title" => "人気記事", "className" => "sidebar-popular-articles__title"]) ?>

  <?php $articleCardDataAll = [
    [
      "link " => "/blog-detail.html",
      "imgPath" => "/assets/images/blog/popular-article1.jpg",
      "alt " => "ライセンス取得の画像",
      "date" => "2023/11/17",
      "datetime" => "2023-11-17",
      "title " => "ライセンス取得",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト",
    ],
    [
      "link" => "/blog-detail.html",
      "imgPath" => "/assets/images/blog/popular-article2.jpg",
      "alt" => "ウミガメと泳ぐ",
      "date" => "2023/11/17",
      "datetime" => "2023-11-17",
      "title" => "ウミガメと泳ぐ",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト",
    ],
    [
      "link " => "/blog-detail.html",
      "imgPath" => "/assets/images/blog/popular-article3.jpg",
      "alt" => "カクレクマノミ",
      "date" => "2023/11/17",
      "datetime" => "2023-11-17",
      "title" => "カクレクマノミ",
      "text" => "ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト",
    ],
  ]; ?>
  <div class="sidebar-popular-articles__cards">
    <?php get_template_part("/common/_article-cards", null,  ["articleCardDataAll" => $articleCardDataAll])
    ?>
  </div>
</div>