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
						<a href="<?php echo home_url('/');?>" class="c-btn-cont">TOPページに戻る</a>
					</div>
				</div><!-- /.p-404__post -->
			</div><!-- /.p-404__inner -->
			<div class="p-404__search" id="a-search">
				<div class="l-inner p-404__search__inner">
					<?php get_template_part('template-parts/tag-list'); ?>
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>
