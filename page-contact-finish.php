<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <!-- ヘッダー -->
    <?php get_header(); ?>

</head>

<body class="pg_contactFinish pg_id_<?php echo get_the_ID(); ?>">


    <header class="ly_header">

        <!-- ヘッダー共通パーツ -->
        <?php get_template_part('includes/header') ?>

    </header>

    <main>
        <!-- パンくずリスト -->
        <?php get_template_part('includes/breadcrumb') ?>

        <div class="ly_cont">
            <div class="ly_cont_inner">

                <?php the_content(); ?>

            </div>
            <!-- /.ly_cont_inner -->
        </div>
        <!-- /.ly_cont -->

    </main>

    <footer>
        <!-- フッター共通パーツ -->
        <?php get_template_part('includes/footer') ?>
    </footer>

</body>

<!-- フッター -->
<?php get_footer(); ?>
</body>

</html>