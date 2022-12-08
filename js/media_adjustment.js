// 特徴セクションのレイアウト調整用

$(function () {
  // テキスト間の余白を合わせるように調整

  // bl_mediaクラスの下マージンに設定したい余白を指定（CSS）
  // 画像の高さ > 文字の高さの場合、（画像の高さ-文字の高さ）/2をマイナスマージンして調整
  $(".js_mediaAdjustment .bl_media").each(function () {
    var img_h = $(this).children(".bl_media_img").height();
    var body_h = $(this).children(".bl_media_body").height();

    // bl_mediaクラスの下マージンを取得
    var cont_mb = $(this).css("margin-bottom");

    if (img_h > body_h) {
      $(this).css("margin-top", -(img_h - body_h) / 2);
      $(this).css("margin-bottom", parseInt(cont_mb) - (img_h - body_h) / 2);
    }
  });
});
