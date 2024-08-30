<?php	
	global $dir;
	global $about_slug;
	global $company_slug;
	global $rule_slug;
?>

<?php get_template_part('template-parts/footer-cta'); ?>
<footer class="l-footer">
		<div class="p-footer">
			<div class="l-inner">
				<div class="p-footer__content">
					<div class="p-footer__logo">
						<a href="<?php echo home_url(); ?>" class="p-footer__logo__link">
							<img src="<?php echo $dir ;?>/assets/img/common/logo03.svg" alt="DayMaga" width="334" height="63" loading="lazy">
						</a>
					</div>
					<nav class="p-footer__nav">
						<ul class="p-footer__nav__list">
							<li class="p-footer__nav__item"><a href="<?php echo get_category_link_by_slug('new'); ?>" class="p-footer__nav__link">新着情報</a></li>
							<li class="p-footer__nav__item"><a href="<?php echo get_category_link_by_slug('tips'); ?>" class="p-footer__nav__link">TIPS</a></li>
							<li class="p-footer__nav__item"><a href="<?php echo get_category_link_by_slug('interview'); ?>" class="p-footer__nav__link">インタビュー</a></li>
							<li class="p-footer__nav__item"><a href="<?php echo get_category_link_by_slug('news'); ?>" class="p-footer__nav__link">ニュース</a></li>
						</ul>
						<ul class="p-footer__nav__list">
							<li class="p-footer__nav__item"><a href="<?php echo $about_slug; ?>" class="p-footer__nav__link">DayMagaについて</a></li>
							<li class="p-footer__nav__item"><a href="<?php echo $company_slug; ?>" class="p-footer__nav__link">運営会社</a></li>
							<li class="p-footer__nav__item"><a href="<?php echo $rule_slug; ?>" class="p-footer__nav__link">サイト利用規約</a></li>
						</ul>
					</nav>
				</div>
				<small class="p-footer_copyright">&copy;2024 Daytra Consul</small>
				<p class="p-footer__note">このサイトはCrown Cat株式会社様のご協力のもと作成したコーディング用の練習課題です。実在の人物・団体とは関係ありません。</p>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>

</html>