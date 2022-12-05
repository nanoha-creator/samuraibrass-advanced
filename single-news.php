<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <!-- ヘッダー -->
    <?php get_header(); ?>

</head>

<body class="pg_singleNews pg_id_<?php echo get_the_ID(); ?>">


    <header class="ly_header">

        <!-- ヘッダー共通パーツ -->
        <?php get_template_part('includes/header') ?>

    </header>

    <main>
        <!-- パンくずリスト -->
        <?php get_template_part('includes/breadcrumb') ?>

        <div class="ly_cont">
            <section class="ly_cont_inner">
                <!-- 記事エリア -->
                <div class="bl_postHeader">
                    <h1 class="bl_postHeader_ttl bl_postHeader_ttl__news"><?php the_title(); ?></h1>
                    <time class=" bl_postHeader_date bl_postHeader_date__news"><?php the_time('Y-m-d'); ?></time>

                </div>
                <!-- /.bl_postHeader -->

                <article>
                    <?php the_content(); ?>
                </article>
                <!-- /.bl_bottomCont -->
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