<div class="blog__detail-contents-wrapper">
  <div class="blog__detail-contents">
    <div class="blog__detail-date">
      <time datetime="2023-11-17">2023.11.17</time>
    </div>
    <h1 class="blog__detail-title title-line">ライセンス取得</h1>
    <figure class="blog__detail-image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-detail-pc.jpg" alt="海の中 珊瑚"
        width="700" height="468" />
    </figure>

    <div class="blog__detail-the-contents">
      <p>
        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
        ここにテキストが入ります。ここにテキストが入ります。
        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
      </p>
      <?php
      if (has_post_thumbnail()) :
        the_post_thumbnail();
      endif;
      ?>
      <p>
        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
        ここにテキストが入ります。ここにテキストが入ります。
        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
      </p>
      <ul>
        <li>リスト１</li>
        <li>リスト２</li>
        <li>リスト３</li>
      </ul>
      <p>
        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
        ここにテキストが入ります。ここにテキストが入ります。
        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
      </p>
    </div>
    <div class="blog__detail-pager">
      <?php
      $prev_url = "";
      $next_url = "";
      $prev = get_previous_post();
      if (!empty($prev)) :
        $prev_url = get_permalink($prev->ID);
      endif;
      $next = get_next_post();
      if (!empty($next)) :
        $next_url = get_permalink($next->ID);
      endif;
      ?>
      <?php get_template_part("/common/_pager-detail", null, ["prev_url" => $prev_url, "next_url" => $next_url]); ?>
    </div>
  </div>
</div>