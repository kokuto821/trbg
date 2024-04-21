//ハンバーガーメニューのボタンを押すときの動作  
const ham = $('#js-hamburger');//ハンバーガーボタン
const nav = $('#js-nav');//ハンバーガーメニュー
const body = $('body'); // bodyタグを選択


nav.hide(); // navを非表示に設定
nav.addClass('fadeout')


ham.on('click', function () {
  ham.toggleClass('active'); // ハンバーガーメニューにactiveクラスを付け外し
  nav.toggleClass('active'); // ナビゲーションメニューにactiveクラスを付け外し

  if (nav.hasClass('active')) {
    body.addClass('no-scroll');
    nav.removeClass('fadeout');
    nav.addClass('fadein');
    setTimeout(() => {
      nav.css('display', 'block');
    }, 10);
    
  } else {
    nav.removeClass('fadein');
    nav.addClass('fadeout');
    setTimeout(() => {
      nav.css('display', 'none');
    }, 500); // fadeOut完了後にdisplayをnoneに設定
    body.removeClass('no-scroll');
  };
  
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

//クリックするとページトップに戻る
$('.page-top-button__link').click(function() {
  $('body, html').animate({
    scrollTop: 0
  }, 500);
  return false;
});

$('.page-top-button__link').click(function() {
  $('body, html').animate({
    scrollTop: 0
  }, 500);
  return false;
});
//end



