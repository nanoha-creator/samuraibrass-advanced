<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <!-- ヘッダー -->
    <?php get_header(); ?>

</head>

<body class="pg_template pg_id_<?php echo get_the_ID(); ?>">


    <header class="ly_header">

        <!-- ヘッダー共通パーツ -->
        <?php get_template_part('includes/header') ?>

    </header>

    <main>
        <!-- トップビュー -->
        <?php get_template_part('includes/topView') ?>

        <!-- パンくずリスト -->
        <?php get_template_part('includes/breadcrumb') ?>

        <div class="ly_cont">
            <section class="ly_cont_inner">

                <?php the_content(); ?>

            </section>
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