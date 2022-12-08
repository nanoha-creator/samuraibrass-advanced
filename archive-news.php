<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns#">

    <!-- ヘッダー -->
    <?php get_header(); ?>

    <!-- OGP設定 -->
    <meta property="og:url" content="<?php echo esc_url(the_permalink()); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:description" content="日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクールのお知らせ一覧ページ" />
    <meta property="og:site_name" content="Engress" />
    <meta property="og:image" content="<?php echo esc_url(get_thumbnail()); ?>" />

</head>

<body class="pg_archive pg_id_<?php echo get_the_ID(); ?>">
    <div class="hp_wrapper">

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
                <div class="ly_cont_inner">
                    <section class="ly_section">
                        <!-- タイトル -->
                        <div class="bl_section_ttl">
                            <h2 class="el_taxonomyList_ttl"><?php wp_title(''); ?>一覧</h2>
                        </div>

                        <ul class="bl_newsList lg_mb106">
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    <li class="bl_newsList_set">
                                        <a href="<?php echo esc_url(the_permalink()); ?>">
                                            <time class="bl_newsList_date"><?php the_time('Y-m-d'); ?></time>
                                            <h3 class="bl_newsList_ttl js_textTrim" data-num="45"><?php the_title(); ?></h3>
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
            </div>
            <!-- /.ly_cont -->
        </main>

        <footer>
            <div class="ly_footer">
                <div class="ly_footer_inner">
                    <!-- CTAエリア -->
                    <?php get_template_part('includes/cta') ?>
                </div>
                <!-- /.ly_footer_inner -->
            </div>
            <!-- /.ly_footer -->
            <!-- フッター共通パーツ -->
            <?php get_template_part('includes/footer') ?>
        </footer>



        <!-- フッター -->
        <?php get_footer(); ?>
    </div>
</body>

</html>