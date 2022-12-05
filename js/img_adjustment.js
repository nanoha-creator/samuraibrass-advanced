$(function () {
  // 高さ・幅を取得（表示したいサイズ）
  $w = $(".wp-block-image img").attr("width");
  $h = $(".wp-block-image img").attr("height");

  // 高さ・幅を取得（本来のサイズ）
  $org_w = $(".wp-block-image img").prop("naturalWidth");
  $org_h = $(".wp-block-image img").prop("naturalHeight");

  // 画像表示エリアのサイズを指定
  // absoluteで調整するので、高さはpadding
  $(".wp-block-image").css("width", $w + "px");
  $(".wp-block-image").css("height", $h + "px");

  // 元画像の高さ/幅が表示エリアの高さ/幅より小さい場合は、width:auto,height:100%
  // それ以外は、width:100%,height:auto
  if ($org_h / $org_w < $h / $w) {
    $(".wp-block-image img").css("width", "auto");
    $(".wp-block-image img").css("height", "100%");
  } else {
    $(".wp-block-image img").css("width", "100%");
    $(".wp-block-image img").css("height", "auto");
  }

  console.log($org_w + " " + $org_h);
});
