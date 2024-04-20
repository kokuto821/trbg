//ハンバーガーメニューのボタンを押すときの動作  
const ham = $('#js-hamburger');//ハンバーガーボタン
const nav = $('#js-nav');//ハンバーガーメニュー
const body = $('body'); // bodyタグを選択


nav.css('opacity', 0);//navの透明度の初期値を0にする

ham.on('click', function () {
  ham.toggleClass('active'); // ハンバーガーメニューにactiveクラスを付け外し
  nav.toggleClass('active'); // ナビゲーションメニューにactiveクラスを付け外し

  if (nav.hasClass('active')) {
    nav.addClass('active');
    nav.fadeTo('slow', 1); 
    body.addClass('no-scroll');
  } else {
    nav.removeClass('active');
    nav.fadeTo('slow', 0);
    body.removeClass('no-scroll');
  }
});
//end

//スクロールするとヘッダーが消え、ページTOPに戻るボタンの追加
$(window).on('scroll',function(){
  var scrollDistance = $(this).scrollTop();
  var $header = $('header');
  if(scrollDistance > 500){
    $header.addClass('fade-out');
  } else {
    $header.removeClass('fade-out');
  }
})
const $pageTopButton = $('.page-top-button'); 

$(window).on('scroll', function() {

  var scrollDistance = $(this).scrollTop();

  if(scrollDistance > 500) {
    $pageTopButton.addClass('active');
    $pageTopButton.removeClass('non-active');
  } else {
    $pageTopButton.addClass('non-active');
    $pageTopButton.removeClass('active');
  }

});

$('.page-top-button__link').click(function() {
  $('body, html').animate({
    scrollTop: 0
  }, 500);
  return false;
});

$('.page-top-button__lsink').click(function() {
  $('body, html').animate({
    scrollTop: 0
  }, 500);
  return false;
});
//end



