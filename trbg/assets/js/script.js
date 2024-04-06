const ham = $('#js-hamburger');
const nav = $('#js-nav');
const body = $('body'); // bodyタグを選択

ham.on('click', function () {
  ham.toggleClass('active'); // ハンバーガーメニューにactiveクラスを付け外し
  nav.toggleClass('active'); // ナビゲーションメニューにactiveクラスを付け外し

  if (nav.hasClass('active')) {
    body.addClass('no-scroll'); // ナビゲーションがactiveの場合、スクロールを無効にする
  } else {
    body.removeClass('no-scroll'); // ナビゲーションが非activeの場合、スクロールを有効にする
  }
});


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

$('.page-top-button__link').click(function() {
  $('body, html').animate({
    scrollTop: 0
  }, 500);
  return false;
});

document.addEventListener('DOMContentLoaded', function() {
  const items = document.querySelectorAll('.nav-items__item--p');

  function toggleItems(item) {
      // すでに開いているアイテムを閉じる
      document.querySelectorAll('.dropdown-items.is-open').forEach(function(openItem) {
          if (item.nextElementSibling !== openItem) {
              openItem.classList.remove('is-open');
          }
      });

      document.querySelectorAll('.dropdown-items__item.is-open').forEach(function(openItem) {
          if (!item.nextElementSibling.contains(openItem)) {
              openItem.classList.remove('is-open');
          }
      });

      // クリックされたアイテムを開く
      item.classList.toggle('is-open');
      if (item.nextElementSibling) {
          item.nextElementSibling.classList.toggle('is-open');
          item.nextElementSibling.querySelectorAll('.dropdown-items__item').forEach(function(subItem) {
              subItem.classList.toggle('is-open');
          });
      }
  }

  function initEventListeners() {
      const windowWidth = window.innerWidth;

      if (windowWidth > 768) {
          // hoverイベント用
          items.forEach(function(item) {
              item.addEventListener('mouseenter', function() {
                  toggleItems(this);
              });
          });

          // dropdown-itemsがhoverされていないときに閉じるイベントを追加
          document.querySelectorAll('.dropdown-items, .nav-items__item').forEach(function(dropdown) {
              dropdown.addEventListener('mouseleave', function() {
                  this.classList.remove('is-open');
                  this.querySelectorAll('.dropdown-items__item').forEach(function(subItem) {
                      subItem.classList.remove('is-open');
                  });
                  // 親要素のnav-items__item--pのis-openも取り除く
                  if (this.previousElementSibling.classList.contains('.nav-items__item--p')) {
                      this.previousElementSibling.classList.remove('is-open');
                  }
              });
          });
      } else {
          // クリックイベント用
          items.forEach(function(item) {
              item.addEventListener('click', function() {
                  toggleItems(this);
              });
          });
      }
  }

  // イベントリスナーを初期化
  initEventListeners();

  // ウィンドウリサイズ時にイベントリスナーを再設定
  window.addEventListener('resize', function() {
      // 既存のイベントリスナーをクリア
      items.forEach(function(item) {
          item.removeEventListener('click', toggleItems);
          item.removeEventListener('mouseenter', toggleItems);
      });
      document.querySelectorAll('.dropdown-items').forEach(function(dropdown) {
          dropdown.removeEventListener('mouseleave', toggleItems);
      });
      // イベントリスナーを再初期化
      initEventListeners();
  });
});