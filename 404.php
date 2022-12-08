<!DOCTYPE html>
<html lang="ja">

<head>

    <!-- ヘッダー -->
    <?php get_header(); ?>

</head>

<body class="pg_top pg_id_<?php echo get_the_ID(); ?>">


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
        <div class="bl_topView" style="background-image: url('<?php echo esc_url(get_thumbnail()); ?>')">
            <h1 class="bl_topView_ttl">404 Page Not Found...</h1>
        </div>
        <!-- /.bl_topView -->

        <!-- パンくずリスト -->
        <?php get_template_part('includes/breadcrumb') ?>

        <div class="ly_cont">
            <div class="ly_cont_inner">
                <section class="ly_section">
                    <p>ページが見つかりませんでした。</p>
                </section>
            </div>
        </div>
        <!-- /.ly_cont -->
    </main>

    <footer>
        <div class="ly_footer">
            <div class="ly_footer_inner">
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