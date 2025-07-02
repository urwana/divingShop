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
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Opti&family=Stick&family=Yusei+Magic&display=swap', [], null);
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
  // "tour" カスタム投稿タイプのラベル設定
  $tour_labels = array(
    'name'                  => 'ツアー', // 投稿タイプの名前（複数形）
    'singular_name'         => 'ツアー', // 投稿タイプの名前（単数形）
    'menu_name'             => 'ツアー', // 管理画面メニューの名前
    'name_admin_bar'        => 'ツアー', // 管理バーに表示される名前 = 省略可能
    'add_new'               => '新規ツアーの投稿を追加', // 新規追加リンクのテキスト
    'add_new_item'          => '新規ツアーの投稿', // 新規投稿追加ページのタイトル
    'new_item'              => '新規ツアー', // 新規投稿ページのタイトル
    'edit_item'             => 'ツアーを編集', // 投稿編集ページのタイトル
    'view_item'             => 'ツアー', // 投稿表示ページのタイトル
    'all_items'             => '全ツアー投稿', // 全投稿一覧ページのタイトル
    'search_items'          => 'ツアーを探す', // 投稿検索のラベル
    'parent_item_colon'     => 'Parent tours:', // 階層型の親投稿ラベル = 省略可能
    'not_found'             => 'ツアーの投稿が見つかりません', // 投稿が見つからなかったときのメッセージ
    'not_found_in_trash'    => 'ゴミ箱にツアーの投稿が見つかりません' // ゴミ箱に投稿が見つからなかったときのメッセージ
  );

  // "tour" カスタム投稿タイプの設定
  $tour_args = array(
    'labels'               => $tour_labels, // 上で定義したラベルを使用
    'public'               => true,  // 投稿タイプを公開するかどうか
    'publicly_queryable'   => true,  // クエリ可能かどうか
    'show_ui'              => true,  // 管理画面の編集用UIを表示する
    'show_in_rest'         => true,  // 投稿画面に表示(REST APIに含める場合はtrueを指定)
    'show_in_menu'         => true,  // 管理メニューに表示するかどうか
    'menu_icon'            => 'dashicons-portfolio', // Dashicons アイコンを指定
    'menu_position'        => 5,     // 管理画面上での配置場所
    'query_var'            => true,  // クエリ変数を使うかどうか
    'rewrite'              => array('slug' => 'tour'), // リライトルールの設定（スラッグ）
    'capability_type'      => 'post', // 権限のタイプ（通常の投稿と同じ）
    'has_archive'          => true,  // アーカイブページを持つかどうか
    'hierarchical'         => false, // 階層型（カテゴリー）かどうか
    'supports'             => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes') // サポートする機能（タイトル、エディタ、サムネイル、抜粋）
  );

  register_post_type('tour', $tour_args);

  // "stay_eat" カスタム投稿タイプのラベル設定
  $stay_eat_labels = array(
    'name'                  => '宿と食事',
    'singular_name'         => '宿と食事',
    'menu_name'             => '宿と食事',
    'name_admin_bar'        => '宿と食事',
    'add_new'               => '宿と食事を追加',
    'add_new_item'          => '宿と食事を投稿',
    'new_item'              => '新規 宿と食事',
    'edit_item'             => '宿と食事を編集',
    'view_item'             => '宿と食事を見る',
    'all_items'             => '全ての宿と食事',
    'search_items'          => '宿と食事の記事を探す',
    'parent_item_colon'     => '',
    'not_found'             => '宿と食事の投稿はありません。',
    'not_found_in_trash'    => 'ゴミ箱に宿と食事の投稿はありません。'
  );

  // "stay_eat" カスタム投稿タイプの設定
  $stay_eat_args = array(
    'labels'               => $stay_eat_labels,
    'public'               => true,
    'publicly_queryable'   => true,
    'show_ui'              => true,
    'show_in_rest'         => true,
    'show_in_menu'         => true,
    'menu_position'        => 6,
    'menu_icon'            => 'dashicons-carrot',
    'query_var'            => true,
    'rewrite'              => array('slug' => 'stay-eat'),
    'capability_type'      => 'post',
    'has_archive'          => true,
    'hierarchical'         => false,
    'supports'             => array('title', 'editor', 'thumbnail')
  );

  // "stay_eat" カスタム投稿タイプを登録
  register_post_type('stay_eat', $stay_eat_args);
}

add_action('init', 'create_custom_post_types');

// function migrate_voice_to_stay_eat()
// {
//   $args = array(
//     'post_type' => 'voice',
//     'post_status' => 'any',
//     'posts_per_page' => -1,
//   );

//   $posts = get_posts($args);
//   foreach ($posts as $post) {
//     wp_update_post(array(
//       'ID' => $post->ID,
//       'post_type' => 'stay_eat',
//     ));
//   }
// }
// add_action('init', 'migrate_voice_to_stay_eat');

// カスタムタクソノミーの設定
function create_custom_taxonomies()
{
  // tour タクソノミーのラベル設定
  $tourLabels = array(
    'name'              => 'ツアー', // 一般的な名前
    'singular_name'     => 'ツアー', // 単数形の名前
    'search_items'      => 'ツアーを検索', // 検索項目のラベル
    'all_items'         => '全ツアータクソノミー', // 全ての項目のラベル
    'parent_item'       => '親ツアータクソノミー', // 親項目のラベル
    'parent_item_colon' => '親ツアータクソノミー:', // 親項目（コロン付き）のラベル
    'edit_item'         => 'ツアータクソノミーを編集', // 編集項目のラベル
    'update_item'       => 'ツアータクソノミーを更新', // 更新項目のラベル
    'add_new_item'      => '新規ツアータクソノミーを追加', // 新規追加項目のラベル
    'new_item_name'     => '新規ツアータクソノミー名', // 新規項目名のラベル
    'menu_name'         => 'ツアータクソノミー', // メニューのラベル
  );

  // tour タクソノミーの設定
  $tourArgs = array(
    'hierarchical'      => true, // 階層化しない場合でも true でないとチェックボックス表示できない
    'labels'            => $tourLabels, // 上で定義したラベルを使用
    'show_ui'           => true, // 管理画面に表示するかどうか
    'show_in_rest'      => true, // Gutenbergで表示有効化
    'meta_box_cb'       => 'post_categories_meta_box', // チェックボックスで表示
    'show_admin_column' => true, // 管理画面の投稿一覧に表示するかどうか
    'query_var'         => true, // タクソノミーのクエリ変数を有効にするかどうか
    'rewrite'           => array('slug' => 'tour_taxonomy'), // タクソノミーのスラッグ（URLに使用される）
  );
  // タクソノミーを カスタム投稿 tour に関連付け
  register_taxonomy('tour_taxonomy', array('tour'), $tourArgs);

  // stay_eat タクソノミーのラベル設定
  $stayEatLabels = array(
    'name'              => '宿と食事カテゴリー',
    'singular_name'     => '宿と食事カテゴリー',
    'search_items'      => '宿と食事カテゴリーを検索',
    'all_items'         => '全宿と食事カテゴリー',
    'parent_item'       => '親宿と食事カテゴリー',
    'parent_item_colon' => '親宿と食事カテゴリー:',
    'edit_item'         => '宿と食事カテゴリーを編集',
    'update_item'       => '宿と食事カテゴリーを更新',
    'add_new_item'      => '新規宿と食事カテゴリーを追加',
    'new_item_name'     => '新規宿と食事カテゴリー名',
    'menu_name'         => '宿と食事カテゴリー',
  );

  // タクソノミーの設定
  $stayEatArgs = array(
    'hierarchical'      => true,
    'labels'            => $stayEatLabels,
    'show_ui'           => true,
    'show_in_rest'      => true,
    'meta_box_cb'       => 'post_categories_meta_box',
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array('slug' => 'stay-eat-taxonomy'),
  );

  // タクソノミーを stay_eat 投稿タイプに紐付け
  register_taxonomy('stay_eat_taxonomy', array('stay_eat'), $stayEatArgs);
}
add_action('init', 'create_custom_taxonomies', 0);

// カスタム投稿毎に表示件数のデフォルト設定を変える
function custom_posts_per_page($query)
{
  if (!is_admin() && $query->is_main_query()) {
    if (is_post_type_archive("voice") || is_tax('voice_taxonomy')) {
      $query->set('posts_per_page', 6);
    } else if (is_post_type_archive("tour") || is_tax('tour_taxonomy')) {
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
function get_tour_post_titles()
{
  $args = array(
    'post_type' => 'tour',
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
  $post_titles = get_tour_post_titles();
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

// 年月変数を設定
function add_query_vars_filter($vars)
{
  $vars[] = 'year';
  $vars[] = 'monthnum';
  return $vars;
}
add_filter('query_vars', 'add_query_vars_filter');

// 投稿の閲覧数を更新する
function update_post_views($postID)
{
  if (!is_single()) return;
  // ACFのキーを設定
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count == '') {
    $count = 0;
    update_post_meta($postID, $count_key, 1);
  } else {
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}

// 投稿の閲覧数をトラッキングする
function track_post_views($post_id)
{
  if (!is_single()) return;
  if (empty($post_id)) {
    global $post;
    $post_id = $post->ID;
  }
  update_post_views($post_id);
}
add_action('wp_head', 'track_post_views');

// 人気記事を取得する
function get_popular_posts($number = 3)
{
  $args = array(
    'post_type' => 'post',
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
    'posts_per_page' => $number
  );
  $popular_posts = new WP_Query($args);
  return $popular_posts;
}

function load_admin_style()
{
  wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/assets/css/dashboard.css', [], null);
}
add_action('admin_enqueue_scripts', 'load_admin_style');

function add_menu_to_dashboard()
{
  wp_add_dashboard_widget(
    'quick_links',
    '更新作業クイックリンク',
    'customize_dashboard_menu'
  );
}
add_action('wp_dashboard_setup', 'add_menu_to_dashboard');

function customize_dashboard_menu()
{
  echo '<ul class="shortcut-menu">
          <li><a href="post.php?post=28&action=edit" class="shortcut-menu__link"><p>◉ トップページのメインスライダー画像の更新</p></a></li>
          <li><a href="post.php?post=13&action=edit" class="shortcut-menu__link"><p>◉ 料金の更新</p></a></li>
          <li><a href="post.php?post=16&action=edit" class="shortcut-menu__link"><p>◉ よくある質問の更新</p></a></li>
          <li><a href="post.php?post=8&action=edit" class="shortcut-menu__link"><p>◉ ギャラリー画像の更新</p></a></li>
        </ul>';
}