//ハンバーガーメニューのボタンを押すときの動作  
const ham = $('#js-hamburger');//ハンバーガーボタン
const nav = $('#js-nav');//ハンバーガーメニュー
const body = $('body'); // bodyタグを選択


function adjustNavDisplay() {
  if ($(window).width() <= 768) {
    nav.hide(); // navを非表示に設定
    nav.addClass('fadeout');
  } else {
    nav.css('display', 'flex'); // 769px以上の場合は常にdisplayをflexに設定
    nav.removeClass('fadeout');
    nav.removeClass('fadein');
  }
}

// 初期表示とウィンドウサイズ変更時にナビゲーションの表示を調整
adjustNavDisplay();
$(window).resize(adjustNavDisplay);

let isClickable = true; // クリック可能かどうかを管理するフラグ

ham.on('click', function () {
  if (!isClickable) return; // クリック不可なら何もしない
  setTimeout(() => {
    isClickable = true; // 1秒後にクリックを有効にする
  }, 500);

  ham.toggleClass('active'); // ハンバーガーメニューにactiveクラスを付け外し
  nav.toggleClass('active'); // ナビゲーションメニューにactiveクラスを付け外し

  if (nav.hasClass('active')) {
    body.addClass('no-scroll');
    nav.removeClass('fadeout');
    nav.addClass('fadein');
    setTimeout(() => {
      nav.css('display', 'block');
    }, 10);
    isClickable = false;
    
  } else {
    nav.removeClass('fadein');
    nav.addClass('fadeout');
    setTimeout(() => {
      nav.css('display', 'none');
    }, 500); // fadeOut完了後にdisplayをnoneに設定
    body.removeClass('no-scroll');
    isClickable = false;
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



