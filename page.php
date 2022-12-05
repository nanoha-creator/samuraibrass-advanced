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