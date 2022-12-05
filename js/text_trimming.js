$(function () {
  // パンくずリストにクラスを付与する
  $(".bl_breadcrumb_txt .current-item").addClass("js_textTrim");
  $(".bl_breadcrumb_txt .current-item").attr("data-num", "40");

  // テキストをトリミングする要素
  var selector = document.getElementsByClassName("js_textTrim");

  // 文末に追加したい文字
  var clamp = "…";

  for (var i = 0; i < selector.length; i++) {
    // 制限する文字数は、data-num属性の値を使う
    var wordCount = selector[i].dataset.num;

    // 文字数を超えたら
    if (selector[i].innerText.length > wordCount) {
      var str = selector[i].innerText; // 文字数を取得
      str = str.substr(0, wordCount - 1); // 1文字削る
      selector[i].innerText = str + clamp; // 文末にテキストを足す
    }
  }
});
