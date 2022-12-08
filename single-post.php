<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head prefix="og: http://ogp.me/ns#">

    <!-- ヘッダー -->
    <?php get_header(); ?>

    <!-- OGP設定 -->
    <meta property="og:url" content="<?php echo esc_url(the_permalink()); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:description" content="日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクールのブログ記事ページ" />
    <meta property="og:site_name" content="Engress" />
    <meta property="og:image" content="<?php echo esc_url(get_thumbnail()); ?>" />

</head>

<body class="pg_singlePost pg_id_<?php echo get_the_ID(); ?>">

    <div class="hp_wrapper">
        <header class="ly_header">

            <!-- ヘッダー共通パーツ -->
            <?php get_template_part('includes/header') ?>

        </header>

        <main>
            <!-- パンくずリスト -->
            <?php get_template_part('includes/breadcrumb') ?>

            <div class="ly_cont">
                <section class="ly_cont_inner">
                    <div class="ly_contUnit ly_contUnit__col2">
                        <!-- 記事エリア -->
                        <div class="ly_contUnit_main">
                            <div class="bl_postHeader">
                                <?php $category = get_the_category();  ?>
                                <a href="<?php echo esc_url(get_category_link($category[0]->term_id)); ?>" class="bl_postHeader_label"><?php echo $category[0]->cat_name ?></a>
                                <h1 class="bl_postHeader_ttl"><?php the_title(); ?></h1>

                                <div class="bl_horizAlign bl_horizAlign__spaceBetween">
                                    <!-- シェアボタン -->
                                    <?php
                                    wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false));
                                    ?>
                                    <time class=" bl_postHeader_date"><?php the_time('Y-m-d'); ?></time>
                                </div>
                                <!-- サムネイル画像 -->
                                <?php $img = esc_url(get_thumbnail()); ?>
                                <div class="bl_thumbnail" style="background-image: url('<?php echo $img ?>')"></div>
                            </div>
                            <!-- /.bl_postHeader -->

                            <article>
                                <?php the_content(); ?>
                            </article>
                        </div>

                        <!-- サイドエリア -->
                        <aside class="ly_contUnit_side">
                            <div class="bl_postSide">
                                <h2 class="bl_postSide_ttl">関連記事</h2>
                                <div class="bl_postSide_body">
                                    <ul class="bl_horizList">
                                        <!-- 同じカテゴリーの記事を最大３件取得 -->
                                        <?php $query = get_sameCategoryPost($post->ID);
                                        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                                                <li>
                                                    <a class="bl_media bl_media__small" href="<?php echo esc_url(the_permalink()); ?>">
                                                        <div class="bl_media_img" style="background-image: url(<?php echo esc_url(get_thumbnail()); ?>)"></div>
                                                        <div class="bl_media_body">
                                                            <h3 class="bl_media_ttl js_textTrim" data-num="35"><?php the_title(); ?></h3>
                                                        </div>

                                                    </a>
                                                </li>
                                            <?php endwhile;
                                        else : ?>
                                            <p>関連記事はありませんでした。</p>
                                        <?php endif;
                                        wp_reset_postdata(); ?>
                                    </ul>
                                </div>
                                <!-- /.bl_side_body -->
                                <h2 class="bl_postSide_ttl">カテゴリー</h2>
                                <div class="bl_postSide_body">
                                    <ul class="bl_horizList bl_horizList__simple">
                                        <!-- すべてのカテゴリーを取得 -->
                                        <?php $categories = get_the_category();
                                        foreach ($categories as $category) : ?>
                                            <li><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo $category->cat_name; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.bl_asideCont -->
                        </aside>

                        <!-- おすすめの記事 -->
                        <div class="bl_postBottom">
                            <h2 class="bl_postBottom_ttl">おすすめの記事</h2>
                            <div class="bl_postBottom_body">
                                <ul class="bl_horizList">
                                    <!-- おすすめの記事を最大３件取得 -->
                                    <?php $query = get_pickupPost($post->ID);
                                    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                                            <!-- 取得した記事のカテゴリーを取得 -->
                                            <?php $category = get_the_category();  ?>
                                            <li>
                                                <a class="bl_media bl_media__medium" href="<?php echo esc_url(the_permalink()); ?>">
                                                    <div class="bl_media_img bl_media_badge" style="background-image: url(<?php echo esc_url(get_thumbnail()); ?>)" data-name="<?php echo $category[0]->cat_name ?>"></div>
                                                    <div class="bl_media_body">
                                                        <time class="bl_media_date"><?php the_time('Y-m-d'); ?></time>
                                                        <h3 class="bl_media_ttl"><?php the_title(); ?></h3>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php endwhile;
                                    else : ?>
                                        <p>おすすめの記事はありませんでした。</p>
                                    <?php endif;
                                    wp_reset_postdata(); ?>
                                </ul>
                            </div>
                            <!-- /.bl_postBottom_body -->
                        </div>
                        <!-- /.bl_postBottom -->
                    </div>
                    <!-- /.ly_contUnit -->
                </section>
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