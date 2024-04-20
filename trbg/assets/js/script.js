//ハンバーガーメニューのボタンを押すときの動作  
const ham = $('#js-hamburger');//ハンバーガーボタン
const nav = $('#js-nav');//ハンバーガーメニュー
const body = $('body'); // bodyタグを選択

// ナビゲーションメニューの初期状態を設定
nav.removeClass('fadein');
nav.addClass('fadeout');

ham.on('click', function () {
  ham.toggleClass('active','fadein'); // ハンバーガーメニューにactiveクラスを付け外し
  nav.toggleClass('active'); // ナビゲーションメニューにactiveクラスを付け外し

  if (nav.hasClass('active')) {
    nav.addClass('active');
    nav.removeClass('fadeout');
    nav.addClass('fadein');
    body.addClass('no-scroll');
  } else {
    nav.removeClass('active');
    nav.removeClass('fadein');
    nav.addClass('fadeout');
    body.removeClass('no-scroll');
  }
});

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



