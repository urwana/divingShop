<?php
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

//////////

function create_custom_post_types()
{
  // "voice" カスタム投稿タイプのラベル設定
  $voice_labels = array(
    'name'                  => 'voices', // 投稿タイプの名前（複数形）
    'singular_name'         => 'voice',  // 投稿タイプの名前（単数形）
    'menu_name'             => 'voices',  // 管理画面メニューの名前
    'name_admin_bar'        => 'voice',   // 管理バーに表示される名前 = 省略可能
    'add_new'               => '新規 voice 投稿を追加', // 新規追加リンクのテキスト
    'add_new_item'          => '新規 voice 投稿', // 新規投稿追加ページのタイトル
    'new_item'              => 'New voice', // 新規投稿ページのタイトル
    'edit_item'             => 'Edit voice', // 投稿編集ページのタイトル
    'view_item'             => 'View voice', // 投稿表示ページのタイトル
    'all_items'             => 'voices 全ての投稿', // 全投稿一覧ページのタイトル
    'search_items'          => 'voice の記事を探す', // 投稿検索のラベル
    'parent_item_colon'     => 'parent voices:', // 階層型の親投稿ラベル = 省略可能
    'not_found'             => 'voice の投稿はありません。', // 投稿が見つからなかったときのメッセージ
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
    'menu_position'        => null,  // 管理画面のメニュー位置
    'supports'             => array('title', 'editor', 'thumbnail') // サポートする機能（タイトル、エディタ、サムネイル）
  );

  // "voice" カスタム投稿タイプを登録
  register_post_type('voice', $voice_args);

  // "campaign" カスタム投稿タイプのラベル設定
  $campaign_labels = array(
    'name'                  => 'campaigns', // 投稿タイプの名前（複数形）
    'singular_name'         => 'campaign', // 投稿タイプの名前（単数形）
    'menu_name'             => 'campaigns', // 管理画面メニューの名前
    'name_admin_bar'        => 'campaign', // 管理バーに表示される名前 = 省略可能
    'add_new'               => '新規 campaign の投稿を追加', // 新規追加リンクのテキスト
    'add_new_item'          => '新規 campaign の投稿', // 新規投稿追加ページのタイトル
    'new_item'              => 'New campaign', // 新規投稿ページのタイトル
    'edit_item'             => 'Edit campaign', // 投稿編集ページのタイトル
    'view_item'             => 'View campaign', // 投稿表示ページのタイトル
    'all_items'             => 'campaign 全ての投稿', // 全投稿一覧ページのタイトル
    'search_items'          => 'campaigns の記事を探す', // 投稿検索のラベル
    'parent_item_colon'     => 'Parent Campaigns:', // 階層型の親投稿ラベル = 省略可能
    'not_found'             => 'campaign の投稿が見つかりません', // 投稿が見つからなかったときのメッセージ
    'not_found_in_trash'    => 'ゴミ箱に campaign の投稿が見つかりません' // ゴミ箱に投稿が見つからなかったときのメッセージ
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
    'menu_position'        => null,  // 管理画面のメニュー位置
    'supports'             => array('title', 'editor', 'thumbnail', 'excerpt') // サポートする機能（タイトル、エディタ、サムネイル、抜粋）
  );

  // "campaign" カスタム投稿タイプを登録
  register_post_type('campaign', $campaign_args);
}

// WordPress の初期化時にカスタム投稿タイプを登録する
add_action('init', 'create_custom_post_types');