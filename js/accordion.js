// アコーディオンクリック時に、is_activeクラスを切り替えて、
// 画面上の表示非表示を切り替える（スタイルはCSSに記載）

$(function () {
  // ボタンクリックでis_activeを切り替え
  $(".bl_accordion_btn").click(function () {
    $(this).toggleClass("is_active");
    $(this).parent().next().children(".bl_accordion_txt").toggleClass("is_active");

    // ホバー・フォーカスのスタイルを解除
    $(this).off("mouseenter mouseleave");
  });
});
