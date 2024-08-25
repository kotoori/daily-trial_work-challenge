<?php 
	global $dir; 
	get_header();
?>

	<main class="l-main">
		<div class="p-404">
			<div class="l-inner p-404__inner">
				<div class="p-404__content">
					<div class="p-404__logo">
						<img src="<?php echo $dir ;?>/assets/img/common/icon_logo01.svg" alt="" width="72" height="39">
					</div>
					<h1 class="p-404__title">this page not found</h1>
					<div class="p-404__num">404</div>
					<p class="p-404__lead">申し訳ございません。お探しのページが存在しません。</p>
					<p class="p-404__note">トップページに戻ってコンテンツお探しください。</p>
					<div class="p-404__btn">
						<a href="<?php echo home_url();?>" class="c-btn-cont">TOPページに戻る</a>
					</div>
				</div><!-- /.p-404__post -->
			</div><!-- /.p-404__inner -->
			<div class="p-404__search" id="a-search">
				<div class="l-inner p-404__search__inner">
					<div class="c-search">
						<div class="c-search__title">キーワードで絞り込む</div>
						<ul class="c-search__tag-list">
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#コンサルファーム</a></li>
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#クライアント</a></li>
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#共通</a></li>
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#戦略</a></li>
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#IT</a></li>
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#業務改善</a></li>
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#HR</a></li>
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#M&A・事業再生</a></li>
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#金融・保険</a></li>
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#メーカー</a></li>
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#商社</a></li>
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#不動産・建設・設備</a></li>
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#サービス</a></li>
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#物流</a></li>
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#流通</a></li>
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#その他</a></li>
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#広告・マスコミ</a></li>
							<li class="c-search__tag-item"><a class="c-tag--link" href="">#Pickup</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>
