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
      <h1 class="bl_topView_ttl">ブログ</h1>
    </div>
    <!-- /.bl_topView -->

    <!-- パンくずリスト -->
    <?php get_template_part('includes/breadcrumb') ?>

    <div class="ly_cont">
      <section class="ly_cont_inner">
        <!-- タイトル -->
        <div class="bl_section_ttl">
          <h2 class="el_taxonomyList_ttl">新着一覧</h2>
        </div>

        <ul class="bl_horiz_list lg_mb106">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php $category = get_the_category();  ?>
              <li>
                <a class="bl_media bl_media__taxonomy" href="<?php echo esc_url(the_permalink()); ?>">
                  <div class="bl_media_img bl_media_img__taxonomy bl_media_badge" style="background-image: url('<?php echo esc_url(get_thumbnail()); ?>')" data-name="<?php echo $category[0]->cat_name ?>"></div>
                  <div class="bl_media_body bl_media_body__taxonomy">
                    <time class="bl_media_date"><?php the_time('Y-m-d'); ?></time>
                    <h3 class="bl_media_ttl js_textTrim" data-num="35"><?php the_title(); ?></h3>
                    <p class="bl_media_txt bl_media_txt__taxonomy js_textTrim" data-num="60"><?php echo strip_tags(strip_shortcodes(get_the_content())); ?></p>
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