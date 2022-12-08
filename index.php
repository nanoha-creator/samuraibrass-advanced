<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns#">

  <!-- ヘッダー -->
  <?php get_header(); ?>

  <!-- OGP設定 -->
  <meta property="og:url" content="<?php echo esc_url(the_permalink()); ?>" />
  <meta property="og:type" content="blog" />
  <meta property="og:title" content="<?php the_title(); ?>" />
  <meta property="og:description" content="日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクールのブログ記事一覧ページ" />
  <meta property="og:site_name" content="Engress" />
  <meta property="og:image" content="<?php echo esc_url(get_thumbnail()); ?>" />

</head>

<body class="pg_id_<?php echo get_the_ID(); ?>">
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
      <div class="bl_topView" style="background-image: url('<?php echo esc_url(get_thumbnail()); ?>')">
        <h1 class="bl_topView_ttl">ブログ</h1>
      </div>
      <!-- /.bl_topView -->

      <!-- パンくずリスト -->
      <?php get_template_part('includes/breadcrumb') ?>

      <div class="ly_cont">
        <div class="ly_cont_inner">
          <section class="ly_section">
            <!-- タイトル -->
            <div class="bl_section_ttl">
              <h2 class="el_taxonomyList_ttl">新着一覧</h2>
            </div>

            <ul class="bl_horizList lg_mb106">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <?php $category = get_the_category();  ?>
                  <li>
                    <a class="bl_media bl_media__taxonomy" href="<?php echo esc_url(the_permalink()); ?>">
                      <div class="bl_media_img bl_media_badge" style="background-image: url('<?php echo esc_url(get_thumbnail()); ?>')" data-name="<?php echo $category[0]->cat_name ?>"></div>
                      <div class="bl_media_body">
                        <time class="bl_media_date"><?php the_time('Y-m-d'); ?></time>
                        <h3 class="bl_media_ttl js_textTrim" data-num="40"><?php the_title(); ?></h3>
                        <p class="bl_media_txt js_textTrim" data-num="60"><?php echo strip_tags(strip_shortcodes(get_the_content())); ?></p>
                      </div>
                    </a>
                  </li>
                <?php endwhile;
              else : ?>
                <p>記事はありませんでした。</p>
              <?php endif;
              wp_reset_postdata(); ?>
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