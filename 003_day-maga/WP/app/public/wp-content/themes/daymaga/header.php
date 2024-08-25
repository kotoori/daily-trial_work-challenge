<?php 
	global $dir;
	if ( is_front_page() ) {
		$logo_tag = "h1";
	}else{
		$logo_tag = "div";
	}
?>

<!DOCTYPE html>
<html lang="ja" prefix="og: https://ogp.me/ns#">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="format-detection" content="telephone=no">

	<!-- noindex,nofollow -->
	<meta name="robots" content="noindex,nofollow">

	<!-- ページ属性情報 -->
	<title>DayMaga | ビジネスの未来を切り拓くコンサルティング専門情報メディア</title>
	<meta name="description" content="DayMagaは、最新のビジネス戦略とコンサルティングに関する専門情報を提供するメディアです。企業の成長と成功を支援するためのインサイトと分析をお届けします。">

	<!-- OGP -->
	<meta property="og:locale" content="ja_JP">
	<meta property="og:url" content="ページのURL(絶対パス)">
	<meta property="og:type" content="website">
	<meta property="og:title" content="DayMaga | ビジネスの未来を切り拓くコンサルティング専門情報メディア">
	<meta property="og:description" content="DayMagaは、最新のビジネス戦略とコンサルティングに関する専門情報を提供するメディアです。企業の成長と成功を支援するためのインサイトと分析をお届けします。">
	<meta property="og:site_name" content="DayMaga">
	<meta property="og:image" content="./img/common/ogp.webp">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta name="twitter:card" content="summary_large_image">

	<!-- favicon -->
	<!-- <link rel="icon" href="<?php echo $dir ;?>/assets/img/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href=""> -->

	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>
</head>

<body>
	<!-- header -->
	<header class="l-header">
		<div class="p-header">
			<<?php echo $logo_tag;?> class="p-header__logo">
				<span class="sr-only">ビジネスの未来を切り開く。DayMaga コンサルティングの専門情報メディア</span>
				<a class="p-header__logo__link" href="/">
					<img class="p-header__logo__img" src="<?php echo $dir ;?>/assets/img/common/logo01.svg" alt="" width="260" height="108">
					<img class="p-header__logo__img--scroll" src="<?php echo $dir ;?>/assets/img/common/logo02.svg" alt="" width="207" height="43">
				</a>
			</<?php echo $logo_tag;?>>
			<nav class="p-header__nav">
				<button class="p-header__hamburger u-md-down">
					<span class="sr-only">toggle navigation</span>
					<span class="p-header__hamburger__icon">
						<span class="p-header__hamburger__bar"></span>
						<span class="p-header__hamburger__bar"></span>
						<span class="p-header__hamburger__bar"></span>
					</span>
				</button>
				<ul class="p-header__nav__list">
					<li class="p-header__nav__item"><a class="p-header__nav__link" href="#a-newest">新着情報</a></li>
					<li class="p-header__nav__item"><a class="p-header__nav__link" href="#a-tips">TIPS</a></li>
					<li class="p-header__nav__item"><a class="p-header__nav__link" href="#a-interview">インタビュー</a></li>
					<li class="p-header__nav__item"><a class="p-header__nav__link" href="#a-news">ニュース</a></li>
				</ul>
				<div class="p-header__nav__cta u-elg-up">
					<div class="p-header__nav__btn">
						<a href="#" class="c-btn-cta">
							<span class="c-btn-cta__upper">コンサルをお探しの企業様</span>
							<span class="c-btn-cta__lower">まずは無料相談</span>
						</a>
					</div>
					<div class="p-header__nav__btn">
						<a href="#" class="c-btn-cta--ptn2">
							<span class="c-btn-cta__upper">コンサルタントの方</span>
							<span class="c-btn-cta__lower">案件の紹介登録</span>
						</a>
					</div>
				</div>
				<div class="p-header__nav__search">
					<a class="p-header__nav__search__link" href="#a-search">
						<img src="<?php echo $dir ;?>/assets/img/common/icon_search.svg" alt="検索ボタン" width="28" height="29">
					</a>
				</div>
			</nav>
		</div>
		<span class="p-header-bg hidden-pc"></span>
	</header>
