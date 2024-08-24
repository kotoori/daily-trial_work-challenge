jQuery(function(){
/*===============================
Hamburger Menu
===============================*/
jQuery(function(){
	const hamburgerButton = '.p-header__hamburger';
	const navMenu = '.p-header__nav';
	const drawerOverlay = '.p-header-bg';
	const openClass = 'is-open';
	const drawerItem = '.p-header__nav__item a'

	//ハンバーガーボタンクリックでドロワーメニュー開閉
	jQuery(hamburgerButton).on('click', function(){
		jQuery(this).toggleClass(openClass);
		jQuery(navMenu).toggleClass(openClass);
		jQuery(drawerOverlay).toggleClass(openClass);
		jQuery('body').toggleClass('is-fixed');	//ドロワーメニューOpen時スクロール不可
	})

	//メニュータップでドロワーメニューを閉じる
	jQuery(drawerItem).on('click',function(){
		jQuery('body').removeClass('is-fixed');
		jQuery(hamburgerButton).removeClass(openClass);
		jQuery(navMenu).removeClass(openClass);
		jQuery(drawerOverlay).removeClass(openClass);
	})
})

/*===============================
スクロール検出
===============================*/
const scrollCheck = () => {
	const scroll = jQuery(window).scrollTop();
	if(scroll > 10){
		jQuery('.l-header').addClass('is-scroll');
	}else{
		jQuery('.l-header').removeClass('is-scroll');
	}
	return;
}
//ドキュメントロード時
jQuery(function(){
	scrollCheck();
});
//スクロール時
jQuery(window).on('scroll', function(){
	scrollCheck();
});

/*===============================
タブ切り替え
===============================*/
const tab = jQuery('.js-tab');
let prevColor = '--lightblue2';
jQuery(tab).on('click', function(){
	//cardエリアの背景色を変更
	const color = jQuery(this).data('color');
	const target = jQuery(this).parents('.js-tab-parent').find('.js-tab-target')
	target.removeClass(prevColor);
	target.addClass(color);
	prevColor = color;	//今回のcolorを記憶

	//アクティブタブ切り替え
	jQuery(this).parents('.js-tab-parent').find(tab).removeClass('is-active');
	jQuery(this).addClass('is-active');
});

/*===============================
記事表示の観点切り替え
===============================*/
jQuery('.js-point').on('click', function(){
	jQuery('.js-point').removeClass('is-active');
	jQuery(this).addClass('is-active');
});

/*===============================
スムーススクロール
===============================*/
jQuery('a[href^="#"]').on('click', function(e){
	e.preventDefault();

  let targetY = 0;
  let href = jQuery(this).attr("href");
  if(href === "#"){
    targetY = jQuery('html').offset().top;
  }else{
    let headerHeight = jQuery('header').innerHeight();
    targetY = jQuery(href).offset().top - headerHeight;
  }

  // animateで移動します
  jQuery('html, body').animate({scrollTop : targetY}, 500, 'swing');

	return false;
});


});//jQuery End