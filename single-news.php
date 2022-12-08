<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head prefix="og: http://ogp.me/ns#">

    <!-- ヘッダー -->
    <?php get_header(); ?>

    <!-- OGP設定 -->
    <meta property="og:url" content="<?php echo esc_url(the_permalink()); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:description" content="日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクールのお知らせ記事ページ" />
    <meta property="og:site_name" content="Engress" />
    <meta property="og:image" content="<?php echo esc_url(get_thumbnail()); ?>" />

</head>

<body class="pg_singleNews pg_id_<?php echo get_the_ID(); ?>">
    <div class="hp_wrapper">

        <header class="ly_header">

            <!-- ヘッダー共通パーツ -->
            <?php get_template_part('includes/header') ?>

        </header>

        <main>
            <!-- パンくずリスト -->
            <?php get_template_part('includes/breadcrumb') ?>

            <div class="ly_cont">
                <div class="ly_cont_inner">
                    <section class="ly_section">
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
            </div>
            <!-- /.ly_cont -->

        </main>

        <footer>
            <!-- CTAエリア -->
            <?php get_template_part('includes/cta') ?>
            <!-- フッター共通パーツ -->
            <?php get_template_part('includes/footer') ?>
        </footer>

        <!-- フッター -->
        <?php get_footer(); ?>
    </div>
</body>

</html>