<?php

// 初期設定
function my_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');

// style と JS の読み込み
function enqueue_scripts_and_styles()
{
  wp_deregister_script('jquery');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP&display=swap', [], null);
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], null);
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css', [], null);
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', [], null, true);
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);
  wp_enqueue_script('jquery-inview', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', ['jquery'], null, true);
  wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', [], null, true);
  wp_enqueue_script('gsap-custom-ease', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/CustomEase.min.js', ['gsap'], null, true);
  wp_enqueue_script('gsap-scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', ['gsap'], null, true);
  wp_enqueue_script('gsap-scroll-to-plugin', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js', ['gsap'], null, true);
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], null, true);
  $template_directory_uri = array(
    'templateUrl' => get_template_directory_uri(),
  );
  wp_localize_script('custom-script', 'get_template_directory_uri', $template_directory_uri);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts_and_styles');

// ページ毎に body にクラスを付与
function my_custom_body_classes($classes)
{
  if (is_front_page()) {
    $classes[] = 'js-gsap';
  } elseif (is_404()) {
    $classes[] = 'body-404';
  }
  return $classes;
}
add_filter('body_class', 'my_custom_body_classes');

// カスタム投稿の設定
function create_custom_post_types()
{
  // "campaign" カスタム投稿タイプのラベル設定
  $campaign_labels = array(
    'name'                  => 'キャンペーン', // 投稿タイプの名前（複数形）
    'singular_name'         => 'キャンペーン', // 投稿タイプの名前（単数形）
    'menu_name'             => 'キャンペーン', // 管理画面メニューの名前
    'name_admin_bar'        => 'キャンペーン', // 管理バーに表示される名前 = 省略可能
    'add_new'               => '新規キャンペーンの投稿を追加', // 新規追加リンクのテキスト
    'add_new_item'          => '新規キャンペーンの投稿', // 新規投稿追加ページのタイトル
    'new_item'              => '新規キャンペーン', // 新規投稿ページのタイトル
    'edit_item'             => 'キャンペーンを編集', // 投稿編集ページのタイトル
    'view_item'             => 'キャンペーン', // 投稿表示ページのタイトル
    'all_items'             => '全キャンペーン投稿', // 全投稿一覧ページのタイトル
    'search_items'          => 'キャンペーンを探す', // 投稿検索のラベル
    'parent_item_colon'     => 'Parent Campaigns:', // 階層型の親投稿ラベル = 省略可能
    'not_found'             => 'キャンペーンの投稿が見つかりません', // 投稿が見つからなかったときのメッセージ
    'not_found_in_trash'    => 'ゴミ箱にキャンペーンの投稿が見つかりません' // ゴミ箱に投稿が見つからなかったときのメッセージ
  );

  // "campaign" カスタム投稿タイプの設定
  $campaign_args = array(
    'labels'               => $campaign_labels, // 上で定義したラベルを使用
    'public'               => true,  // 投稿タイプを公開するかどうか
    'publicly_queryable'   => true,  // クエリ可能かどうか
    'show_ui'              => true,  // 管理画面の編集用UIを表示する
    'show_in_rest'         => true,  // 投稿画面に表示(REST APIに含める場合はtrueを指定)
    'show_in_menu'         => true,  // 管理メニューに表示するかどうか
    'menu_icon'            => 'dashicons-portfolio', // Dashicons アイコンを指定
    'menu_position'        => 5,     // 管理画面上での配置場所
    'query_var'            => true,  // クエリ変数を使うかどうか
    'rewrite'              => array('slug' => 'campaign'), // リライトルールの設定（スラッグ）
    'capability_type'      => 'post', // 権限のタイプ（通常の投稿と同じ）
    'has_archive'          => true,  // アーカイブページを持つかどうか
    'hierarchical'         => false, // 階層型（カテゴリー）かどうか
    'supports'             => array('title', 'editor', 'thumbnail', 'excerpt') // サポートする機能（タイトル、エディタ、サムネイル、抜粋）
  );

  register_post_type('campaign', $campaign_args);
  // "voice" カスタム投稿タイプのラベル設定
  $voice_labels = array(
    'name'                  => 'お客様の声', // 投稿タイプの名前（複数形）
    'singular_name'         => 'お客様の声',  // 投稿タイプの名前（単数形）
    'menu_name'             => 'お客様の声',  // 管理画面メニューの名前
    'name_admin_bar'        => 'お客様の声',   // 管理バーに表示される名前 = 省略可能
    'add_new'               => 'お客様の声を追加', // 新規追加リンクのテキスト
    'add_new_item'          => 'お客様の声を投稿', // 新規投稿追加ページのタイトル
    'new_item'              => '新規お客様の声', // 新規投稿ページのタイトル
    'edit_item'             => 'お客様の声を編集', // 投稿編集ページのタイトル
    'view_item'             => 'お客様の声を見る', // 投稿表示ページのタイトル
    'all_items'             => '全お客様の声の投稿', // 全投稿一覧ページのタイトル
    'search_items'          => 'お客様の声の記事を探す', // 投稿検索のラベル
    'parent_item_colon'     => 'parent voices:', // 階層型の親投稿ラベル = 省略可能
    'not_found'             => 'お客様の声の投稿はありません。', // 投稿が見つからなかったときのメッセージ
    'not_found_in_trash'    => 'ゴミ箱に Voice の投稿はありません。' // ゴミ箱に投稿が見つからなかったときのメッセージ
  );

  // "voice" カスタム投稿タイプの設定
  $voice_args = array(
    'labels'               => $voice_labels, // 上で定義したラベルを使用
    'public'               => true,  // 投稿タイプを公開するかどうか
    'publicly_queryable'   => true,  // クエリ可能かどうか
    'show_ui'              => true,  // 管理画面の編集用UIを表示する
    'show_in_rest'         => true,  // 投稿画面に表示(REST APIに含める場合はtrueを指定)
    'show_in_menu'         => true,  // 管理メニューに表示するかどうか
    'menu_position'        => 6,     // 管理画面上での配置場所
    'menu_icon'            => 'dashicons-format-audio', // Dashicons アイコンを指定
    'query_var'            => true,  // クエリ変数を使うかどうか
    'rewrite'              => array('slug' => 'voice'), // リライトルールの設定（スラッグ）
    'capability_type'      => 'post', // 権限のタイプ（通常の投稿と同じ）
    'has_archive'          => true,  // アーカイブページを持つかどうか
    'hierarchical'         => false, // 階層型（カテゴリー）かどうか
    'supports'             => array('title', 'editor', 'thumbnail') // サポートする機能（タイトル、エディタ、サムネイル）
  );

  // "voice" カスタム投稿タイプを登録
  register_post_type('voice', $voice_args);

}
add_action('init', 'create_custom_post_types');

// カスタムタクソノミーの設定
function create_custom_taxonomies()
{
  // campaign タクソノミーのラベル設定
  $campaignLabels = array(
    'name'              => 'キャンペーン', // 一般的な名前
    'singular_name'     => 'キャンペーン', // 単数形の名前
    'search_items'      => 'キャンペーンを検索', // 検索項目のラベル
    'all_items'         => '全キャンペーンタクソノミー', // 全ての項目のラベル
    'parent_item'       => '親キャンペーンタクソノミー', // 親項目のラベル
    'parent_item_colon' => '親キャンペーンタクソノミー:', // 親項目（コロン付き）のラベル
    'edit_item'         => 'キャンペーンタクソノミーを編集', // 編集項目のラベル
    'update_item'       => 'キャンペーンタクソノミーを更新', // 更新項目のラベル
    'add_new_item'      => '新規キャンペーンタクソノミーを追加', // 新規追加項目のラベル
    'new_item_name'     => '新規キャンペーンタクソノミー名', // 新規項目名のラベル
    'menu_name'         => 'キャンペーンタクソノミー', // メニューのラベル
  );

  // campaign タクソノミーの設定
  $campaignArgs = array(
    'hierarchical'      => true, // 階層化しない場合でも true でないとチェックボックス表示できない
    'labels'            => $campaignLabels, // 上で定義したラベルを使用
    'show_ui'           => true, // 管理画面に表示するかどうか
    'show_in_rest'      => true, // Gutenbergで表示有効化
    'meta_box_cb'       => 'post_categories_meta_box', // チェックボックスで表示
    'show_admin_column' => true, // 管理画面の投稿一覧に表示するかどうか
    'query_var'         => true, // タクソノミーのクエリ変数を有効にするかどうか
    'rewrite'           => array('slug' => 'campaign_taxonomy'), // タクソノミーのスラッグ（URLに使用される）
  );
  // タクソノミーを カスタム投稿 campaign に関連付け
  register_taxonomy('campaign_taxonomy', array('campaign'), $campaignArgs);

  // voice タクソノミーのラベル設定
  $voiceLabels = array(
    'name'              => 'お客様の声', // 一般的な名前
    'singular_name'     => 'お客様の声', // 単数形の名前
    'search_items'      => 'お客様の声を検索', // 検索項目のラベル
    'all_items'         => '全お客様の声のタクソノミー', // 全ての項目のラベル
    'parent_item'       => '親お客様の声タクソノミー', // 親項目のラベル
    'parent_item_colon' => '親お客様の声タクソノミー:', // 親項目（コロン付き）のラベル
    'edit_item'         => 'お客様の声のタクソノミーを編集', // 編集項目のラベル
    'update_item'       => 'お客様の声のタクソノミーを更新', // 更新項目のラベル
    'add_new_item'      => '新規お客様の声タクソノミーを追加', // 新規追加項目のラベル
    'new_item_name'     => '新規お客様の声タクソノミー名', // 新規項目名のラベル
    'menu_name'         => 'お客様の声タクソノミー', // メニューのラベル
  );
  // カスタム投稿 voice の タクソノミーの設定
  $voiceArgs = array(
    'hierarchical'      => true, // 階層化しない場合でも true でないとチェックボックス表示できない
    'labels'            => $voiceLabels, // 上で定義したラベルを使用
    'show_ui'           => true, // 管理画面に表示するかどうか
    'show_in_rest'      => true, // Gutenbergで表示有効化
    'meta_box_cb'       => 'post_categories_meta_box', // チェックボックスで表示
    'show_admin_column' => true, // 管理画面の投稿一覧に表示するかどうか
    'query_var'         => true, // タクソノミーのクエリ変数を有効にするかどうか
    'rewrite'           => array('slug' => 'voice_taxonomy'), // タクソノミーのスラッグ（URLに使用される）
  );
  // タクソノミーを カスタム投稿 voice に関連付け
  register_taxonomy('voice_taxonomy', array('voice'), $voiceArgs);
}
add_action('init', 'create_custom_taxonomies', 0);

// カスタム投稿毎に表示件数のデフォルト設定を変える
function custom_posts_per_page($query)
{
  if (!is_admin() && $query->is_main_query()) {
    if (is_post_type_archive("voice")) {
      $query->set('posts_per_page', 6);
    } else if (is_post_type_archive("campaign")) {
      $query->set('posts_per_page', 4);
    } else if (is_home() || is_post_type_archive("blog")) {
      $query->set('posts_per_page', 10);
    }
  }
}
add_action('pre_get_posts', 'custom_posts_per_page');

// 管理画面の通常「投稿」を「ブログ」 に変える
function rename_default_post_type()
{
  global $wp_post_types;
  $labels = &$wp_post_types['post']->labels;
  $labels->name               = 'ブログ';
  $labels->singular_name      = 'ブログ';
  $labels->add_new            = '新規追加';
  $labels->add_new_item       = '新しいブログを追加';
  $labels->edit_item          = 'ブログを編集';
  $labels->new_item           = '新しいブログ';
  $labels->view_item          = 'ブログを表示';
  $labels->search_items       = 'ブログを検索';
  $labels->not_found          = 'ブログが見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱にブログが見つかりませんでした';
  $labels->all_items          = 'すべてのブログ';
  $labels->menu_name          = 'ブログ';
  $labels->name_admin_bar     = 'ブログ';
}
add_action('init', 'rename_default_post_type');

// contact form thanks page に遷移させる
add_action('wp_footer', 'redirect_cf7');
function redirect_cf7()
{
?>
<script type="text/javascript">
document.addEventListener('wpcf7mailsent', function(event) {
  location = '/seaside/contact-thanks';
}, false);
</script>
<?php
}

// contact form での error message html 要素の表示・非表示
add_action('wp_footer', 'show_hidden_elements_on_error');
function show_hidden_elements_on_error()
{
?>
<script type="text/javascript">
document.addEventListener('wpcf7invalid', function(event) {
  var errorMessages = document.querySelectorAll('.js-error-message');
  errorMessages.forEach(function(element) {
    element.classList.remove('error-message-hidden');
  });
}, false);
</script>
<?php
}

// [...] を ...に
function custom_excerpt_more($more)
{
  return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

// カスタム投稿のタイトルを Contact Form7 にタグで渡す
function get_campaign_post_titles()
{
  $args = array(
    'post_type' => 'campaign',
    'posts_per_page' => -1,
    'post_status' => 'publish'
  );
  $posts = get_posts($args);
  error_log('Posts: ' . print_r($posts, true)); // デバッグ用ログ
  $post_titles = array();
  foreach ($posts as $post) {
    $post_titles[] = $post->post_title;
  }
  return $post_titles;
}

// カスタム投稿のタイトルを Contact Form7 にタグで渡す
function post_titles_to_cf7_select_filter($tag, $unused)
{
  if ($tag['name'] != 'menu-515') {
    return $tag;
  }
  $post_titles = get_campaign_post_titles();
  error_log('Filtered post titles: ' . print_r($post_titles, true)); // デバッグ用ログ
  if (!empty($post_titles)) {
    $tag['raw_values'] = $post_titles;
    $tag['values'] = $post_titles;
  }
  return $tag;
}
add_filter('wpcf7_form_tag', 'post_titles_to_cf7_select_filter', 10, 2);

// 抜粋の文字数を変更する
function custom_excerpt_length($length)
{
  return 200;
}
add_filter('excerpt_length', 'custom_excerpt_length');

// 記事の抜粋 the_excerpt() の文字数を制限
function get_custom_excerpt($text_length)
{
  $excerpt = get_the_excerpt();
  $text_length++;
  if (mb_strlen($excerpt) > $text_length) {
    $text_for_ellipsis = mb_substr($excerpt, 0, $text_length - 3);
    $text_for_ellipsis = nl2br($text_for_ellipsis);
    echo $text_for_ellipsis . '...';
  } else {
    echo $excerpt;
  }
}

// アーカイブ月度を取得
function get_posts_by_months()
{
  global $wpdb;
  $query = "
      SELECT DISTINCT
          YEAR(post_date) AS year,
          MONTH(post_date) AS month
      FROM
          $wpdb->posts
      WHERE
          post_status = 'publish' AND
          post_type = 'post'
      ORDER BY
          year DESC, month DESC
  ";
  $results = $wpdb->get_results($query);
  $posts_by_months = array();

  foreach ($results as $result) {
    $year = $result->year;
    $month = $result->month;

    if (!isset($posts_by_months[$year])) {
      $posts_by_months[$year] = array();
    }
    $posts_by_months[$year][] = $month;
  }
  return $posts_by_months;
}

function custom_theme_setup()
{
  // 固定ページにページ属性のサポートを追加
  add_post_type_support('page', 'page-attributes');
}

add_action('init', 'custom_theme_setup');

function register_custom_page_templates($templates)
{
  $templates['data.php'] = 'Date Template';
  return $templates;
}
add_filter('theme_page_templates', 'register_custom_page_templates');