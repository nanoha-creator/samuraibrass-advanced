<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!-- ヘッダー -->
<?php get_header(); ?>

<!-- OGP設定 -->
<meta property="og:url" content="<?php echo esc_url(the_permalink()); ?>" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:description" content="日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクールの<?php the_title(); ?>>ページ" />
<meta property="og:site_name" content="Engress" />
<meta property="og:image" content="<?php echo esc_url(get_thumbnail()); ?>" />

</head>

<body class="pg_contactFinish pg_id_<?php echo get_the_ID(); ?>">
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
                        <?php the_content(); ?>
                    </section>
                </div>
                <!-- /.ly_cont_inner -->
            </div>
            <!-- /.ly_cont -->

        </main>

        <footer>
            <!-- フッター共通パーツ -->
            <?php get_template_part('includes/footer') ?>
        </footer>

        <!-- フッター -->
        <?php get_footer(); ?>
    </div>
</body>

</html>