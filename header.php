  <!-- エンコード指定 -->
  <meta charset="UTF-8">

  <!-- ページ設定 -->
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <!-- 自動リンクを無効化 -->
  <meta name="format-detection" content="email=no,telephone=no,address=no">

  <!-- レスポンシブ対応 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- 検索結果に出ないようにする -->
  <meta name="robots" content="noindex, nofollow">

  <!-- アイコン設定 -->
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('favicon.ico')) ?>">
  <link rel="apple-touch-icon" href="<?php echo esc_url(get_theme_file_uri('apple-touch-icon.png')) ?>">
  <link rel="apple-touch-icon" type="image/png" href="<?php echo esc_url(get_theme_file_uri('android-chrome-192x192.png')) ?>">

  <?php wp_head(); ?>