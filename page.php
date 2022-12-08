<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head prefix="og: http://ogp.me/ns#">

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

<body class="pg_page pg_id_<?php echo get_the_ID(); ?>">
  <div class="hp_wrapper">

    <header class="ly_header">

      <!-- ヘッダー共通パーツ -->
      <?php get_template_part('includes/header') ?>

    </header>

    <main>
      <!-- トップビュー -->
      <div class="bl_topView" style="background-image: url('<?php echo esc_url(get_thumbnail()); ?>')">
        <?php if (is_home()) : ?>
          <h1 class="bl_topView_ttl">ブログ</h1>
        <?php else : ?>
          <h1 class="bl_topView_ttl"><?php the_title(); ?></h1>
        <?php endif; ?>
      </div>
      <!-- /.bl_topView -->

      <!-- パンくずリスト -->
      <!-- /.ly_cont -->
      <?php get_template_part('includes/breadcrumb') ?>

      <div class="ly_cont">
        <div class="ly_cont_inner">

          <section class="ly_section lg_pt0">
            <?php the_content(); ?>
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

    <script type="text/javascript">
      window.onload = function() {
        new ScrollHint('.js-scrollable');
      };
    </script>
  </div>
</body>

<!--フッター-->
<?php get_footer(); ?> </body>

</html>