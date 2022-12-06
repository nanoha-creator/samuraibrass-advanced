<?php

add_action('init', function () {
    // メニューをサポート
    register_nav_menus([
        'global_nav' => 'グローバルナビゲーション'
    ]);

    // アイキャッチ画像をサポート
    add_theme_support('post-thumbnails');


    // カスタム投稿タイプを追加（お知らせページ）
    register_post_type(
        'news',
        [
            'label' => 'お知らせ',
            'public' => true,
            'menu_position' => 5,
            'supports' => ['title', 'editor', 'page-attributes'],
            'hierarchical' => true,
            'has_archive' => true,
            'show_in_rest' => true,
        ]
    );
});

// ページネーションのHTMLカスタマイズ
add_filter('navigation_markup_template', function () {
    $template = '
    <nav class="bl_pagenationNav">
        <h2 class="screen-reader-text">%2$s</h2>
        %3$s
    </nav>';
    return $template;
});

// 外部ファイル読み込み
add_action('wp_enqueue_scripts', function () {
    // CSS読み込み
    wp_enqueue_style('ress', get_theme_file_uri('/css/ress.min.css'), array(), false, 'all');
    wp_enqueue_style('fontawesome', get_theme_file_uri('/fontawesome-free-6.2.0-web/css/all.css'), array(), false, 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');

    // js読み込み
    wp_deregister_script('jquery'); // デフォルトのjqueryを削除
    wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery-3.6.1.min.js'), array(), '3.6.1', true);
    wp_enqueue_script('media-adjustment', get_theme_file_uri('/js/media_adjustment.js'), array('jquery'), false, true);
    wp_enqueue_script('img-adjustment', get_theme_file_uri('/js/img_adjustment.js'), array('jquery'), false, true);
    wp_enqueue_script('hamburgerBtn', get_theme_file_uri('/js/hamburgerBtn.js'), array('jquery'), false, true);
    wp_enqueue_script('accordionToggle', get_theme_file_uri('/js/accordion.js'), array('jquery'), false, true);
    wp_enqueue_script('textTrimming', get_theme_file_uri('/js/text_trimming.js'), array('jquery'), false, true);
});

// カスタムHTMLでショートコードがつかえるようにする
add_filter('widget_text', 'do_shortcode');

// ショートコード
// 余白を設定する
add_shortcode('space', function ($atts) {
    $atts = shortcode_atts(array('size' => '0px'), $atts);
    return '<div style="margin-bottom: ' . $atts['size'] . ';"></div>';
});

// 各コースの料金を取得する（ACFで設定した値を取得）
add_shortcode('get_coursePrice', function ($atts) {
    $atts = shortcode_atts(array('type' => 'basic_price'), $atts);
    $result = number_format(get_post_meta(get_the_ID(), $atts['type'], true));
    return $result;
});

// 関数
// サムネイル画像を取得する
// $post_id: 投稿ID（指定なしの場合は、当記事のサムネイル画像を取得）
function get_thumbnail()
{
    if (has_post_thumbnail()) :
        $post_id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($post_id, 'large');

    endif;
    if (!has_post_thumbnail() || !$img) :
        $img = array(esc_url(get_theme_file_uri('/img/blog@2x.jpg')));
    endif;

    return $img[0];
}

// 同一カテゴリーの記事を最大３件取得する
// $post_id: 投稿ID（指定なしの場合は、当記事も含めて取得される）
function get_sameCategoryPost($post_id = null)
{
    $categories = get_the_category();
    $category_ID = array();
    foreach ($categories as $category) :
        array_push($category_ID, $category->cat_ID);
    endforeach;
    $args = array(
        'post__not_in' => array($post_id),  // 現在の記事を除く
        'posts_per_page' => 3,              // ３件取得する
        'category__in' => $category_ID,     // 該当のカテゴリーID
        'orderby' => 'rand',                // ランダムに取得する
    );
    $query = new WP_Query($args);

    return $query;
}

// おすすめの記事を最大３件取得する
// $post_id: 投稿ID（指定なしの場合は、当記事も含めて取得される）
function get_pickupPost($post_id = null)
{
    $args = array(
        'post__not_in' => array($post_id),
        'posts_per_page' => 3,
        'orderby' => 'rand',
        'tag' => 'pickup'
    );
    $query = new WP_Query($args);

    return $query;
}

// 最新の記事を最大３件取得する
function get_recentlyPost()
{
    // posts_per_pageに固定表示記事は含まれないため、
    // 固定表示記事を含めると記事数が合わなくなるため、
    // 固定表示記事以外を対象とする
    // 固定表示記事を含めることも可能だが、
    // 固定表示記事のみで3件以上になる可能せいもある
    // （別途制御必要）
    $posts_num = 1 - count(get_option('sticky_posts'));
    if ($posts_num < 0) {
        $posts_num = 0;
    }

    $args = array(
        'post__not_in' => get_option('sticky_posts'),
        'order' => 'DESC',
        'post_type' => 'post',
        'posts_per_page' => 3,
    );
    $query = new WP_Query($args);

    return $query;
}

// 最新のお知らせを最大３件取得する
function get_recentlyNews()
{
    $args = array(
        'order' => 'DESC',
        'post_type' => 'news',
        'posts_per_page' => 3,
    );
    $query = new WP_Query($args);

    return $query;
}
