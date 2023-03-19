
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


// もっと見るボタン -------------------

// $(function(){
//   var show = 6; //最初に何枚表示するか
//   var num = 3; //何枚ずつ表示するか
//   var contents = '.Latest-box'; // 対象のlist
//   $(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
//   $('.more-btn').on('click', function () {
//     $(contents + '.is-hidden').slice(0, num).removeClass('is-hidden');
//     if ($(contents + '.is-hidden').length == 0) {
//       $('.more-btn').fadeOut();
//     }
//   });
// //件数全体より最初の表示件数が同じ、または少ない場合は .more を表示させない。
//   var kosuu = $('.Latest-box').length;
//   if (show >= kosuu){
//     $('.more-btn').css('display','none');
//   }
// });

// var moreNum = 6;

// $(".Latest-box:nth-child(n + " + (moreNum + 1)+")").addClass("is-hidden");

$(document).ready(function() {
  $('.more_btn a').html('もっと見る');
});