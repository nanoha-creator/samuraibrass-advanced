<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <!-- ヘッダー -->
  <?php get_header(); ?>

</head>

<body class="pg_page pg_id_<?php echo get_the_ID(); ?>">


  <header class="ly_header">

    <!-- ヘッダー共通パーツ -->
    <?php get_template_part('includes/header') ?>

  </header>

  <main>
    <!-- トップビュー ★後でリンク設定 -->
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

</body>

<!-- フッター -->
<?php get_footer(); ?>
</body>

</html>