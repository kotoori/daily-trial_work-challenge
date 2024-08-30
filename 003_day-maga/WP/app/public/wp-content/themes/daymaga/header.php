<?php 
	global $dir;
	global $for_consultant_cta_slug;
	global $for_company_cta_slug;

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

	<!-- favicon -->
	<!-- <link rel="icon" href="<?php echo $dir ;?>/assets/img/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href=""> -->

	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>
</head>

<body <?php body_class();?>>
	<!-- header -->
	<header class="l-header">
		<div class="p-header">
			<<?php echo $logo_tag;?> class="p-header__logo">
				<span class="sr-only">ビジネスの未来を切り開く。DayMaga コンサルティングの専門情報メディア</span>
				<a class="p-header__logo__link" href="<?php echo home_url(); ?>">
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
					<li class="p-header__nav__item"><a class="p-header__nav__link" href="<?php echo get_category_link_by_slug('new'); ?>">新着情報</a></li>
					<li class="p-header__nav__item"><a class="p-header__nav__link" href="<?php echo get_category_link_by_slug('tips'); ?>">TIPS</a></li>
					<li class="p-header__nav__item"><a class="p-header__nav__link" href="<?php echo get_category_link_by_slug('interview'); ?>">インタビュー</a></li>
					<li class="p-header__nav__item"><a class="p-header__nav__link" href="<?php echo get_category_link_by_slug('news'); ?>">ニュース</a></li>
				</ul>
				<div class="p-header__nav__cta u-elg-up">
					<div class="p-header__nav__btn">
						<a href="<?php echo $for_company_cta_slug; ?>" class="c-btn-cta">
							<span class="c-btn-cta__upper">コンサルをお探しの企業様</span>
							<span class="c-btn-cta__lower">まずは無料相談</span>
						</a>
					</div>
					<div class="p-header__nav__btn">
						<a href="<?php echo $for_consultant_cta_slug; ?>" class="c-btn-cta--ptn2">
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
