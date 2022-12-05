<!DOCTYPE html>
<html lang="ja">

<head>

    <!-- ヘッダー -->
    <?php get_header(); ?>

</head>

<body class="pg_top">


    <header class="ly_header">

        <!-- ヘッダー共通パーツ -->
        <?php get_template_part('includes/header') ?>

    </header>

    <main>

        <!-- トップビュー -->
        <?php
        $page_data = get_page_by_path('blog');
        $page_id = $page_data->ID;
        ?>
        <div class="bl_topView" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($page_id)); ?>')">
            <h1 class="bl_topView_ttl">お知らせ</h1>
        </div>
        <!-- /.bl_topView -->

        <!-- パンくずリスト -->
        <?php get_template_part('includes/breadcrumb') ?>

        <div class="ly_cont">
            <section class="ly_cont_inner">
                <!-- タイトル -->
                <div class="bl_section_ttl">
                    <h2 class="el_taxonomyList_ttl"><?php wp_title(''); ?></h2>
                </div>

                <ul class="bl_newsList lg_mb106">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li class="bl_newsList_set">
                                <a href="<?php echo esc_url(the_permalink()); ?>">
                                    <time class="bl_newsList_date"><?php the_time('Y-m-d'); ?></time>
                                    <h3 class="bl_newsList_ttl js_textTrim" data-num="46"><?php the_title(); ?></h3>
                                </a>
                            </li>
                        <?php endwhile;
                    else : ?>
                        <p>記事はありませんでした。</p>
                    <?php endif; ?>
                </ul>

                <!-- ページネーション -->
                <?php the_posts_pagination(
                    array(
                        'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
                        'prev_next'     => false, // 「前へ」「次へ」のリンクを表示しない
                        'type'          => 'list', // na/ul/liタグでHTML出力する
                    )
                ); ?>

            </section>
        </div>
        <!-- /.ly_cont -->
    </main>

    <footer>
        <div class="ly_footer">
            <div class="ly_footer_inner">
                <!-- CTAエリア ★後でリンク設定 -->
                <div class="bl_cta">
                    <span class="bl_cta_msg">まずは無料で資料請求から</span>
                    <a class="el_roundBtn" href="">資料請求</a>
                    <a class="bl_cta_link" href="">お問い合わせ</a>
                </div>
                <!-- /.bl_actionNav -->
                <!-- CTAエリア（電話） -->
                <div class="bl_ctaTel">
                    <span class="bl_ctaTel_msg">お電話でのお問い合わせはこちら</span>
                    <span class="bl_ctaTel_tel">0123-456-7890</span>
                    <span class="bl_ctaTel_hours">平日 08:00~20:00</span>
                </div>
                <!-- /.bl_telNav -->
            </div>
            <!-- /.ly_footer_inner -->
        </div>
        <!-- /.ly_footer -->
        <!-- フッター共通パーツ -->
        <?php get_template_part('includes/footer') ?>
    </footer>



    <!-- フッター -->
    <?php get_footer(); ?>
</body>

</html>