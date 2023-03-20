
$('.nav_toggle').on('click', function () {
  $('.nav_toggle, .nav').toggleClass('show');
  console.log('nav_toggle');
});







// フェードイン
(function () {
  // 設定
  var interval = 3000; // 切り替わりの間隔（ミリ秒）
  var fade_speed = 0;// フェード処理の早さ（ミリ秒）
  $(".img-box img").hide();
  $(".img-box img:first").addClass("active").show();

  var changeImage = function () {
    var $active = $(".img-box img.active");
    var $next = $active.next("img").length ? $active.next("img") : $(".img-box img:first");

    $active.fadeOut(fade_speed).removeClass("active");
    $next.fadeIn(fade_speed).addClass("active");
  }


  setInterval(changeImage, interval);
}());


