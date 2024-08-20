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