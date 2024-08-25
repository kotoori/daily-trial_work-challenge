<?php 
	global $dir; 
	get_header();
	
?>
<?php
	if(have_posts()): while(have_posts()): the_post();
	$category_name = null;
	$category = get_the_category();
	if($category && $category[0]){
		if(isset($category[0]->cat_name)){
			$category_name =  $category[0]->cat_name;
		}
	}
?>

	<main class="l-main">
		<div class="p-single">
			<div class="l-inner p-single__inner">
				<div class="p-single__post">
					<div class="p-single__date">公開日<time datetime="<?php the_time('c');?>"><?php the_time('Y.m.d'); ?></time></div>
					<div class="p-single__category">
						<div class="c-card__category ">
							<?php if($category_name): ?>
								<a class="c-category--coralblue <?php echo $category_name; ?> --large --link" href="<?php echo get_category_link($category[0]->cat_ID); ?>"><?php echo $category_name; ?></a>
							<?php endif; ?>
						</div>
					</div>
					<h1 class="p-single__title"><?php the_title(); ?></h1>
					<div class="p-single__thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="p-single__content">
						<?php the_content(); ?>
					</div>
					<div class="p-single__tags">
						<div class="p-single__tags__title">この記事のタグ</div>
						<ul class="p-single__tags__list">
							<li class="p-single__tags__item"><a class="c-tag--link" href="">#コンサルファーム</a></li>
							<li class="p-single__tags__item"><a class="c-tag--link" href="">#共通</a></li>
							<li class="p-single__tags__item"><a class="c-tag--link" href="">#その他</a></li>
							<li class="p-single__tags__item"><a class="c-tag--link" href="">##Pickup</a></li>
						</ul>
					</div>
				</div><!-- /.p-single__post -->
			</div><!-- /.p-single__inner -->
			<section class="p-single__popular">
				<div class="l-inner">
					<h2 class="p-single__popular__title c-heading">おすすめ記事</h2>
					<div class="p-single__popular__contents">
						<!-- Slider main container -->
						<div class="swiper c-popular__swiper js-popular-swiper">
							<!-- Additional required wrapper -->
							<div class="swiper-wrapper c-popular__cards">
								<!-- Slides -->
								<div class="swiper-slide c-popular__card">
									<article class="c-card">
										<a href="#" class="c-card__link">
											<div class="c-card__img">
												<img src="<?php echo $dir ;?>/assets/img/card/img_card01.webp" alt="" width="1080" height="612">
											</div>
											<time class="c-card__date" datetime="2024-07-31">2024.07.31</time>
											<div class="c-card__title">金融業界のデジタル化：コンサルファームが解説する課題と解決策</div>
											<div class="c-card__category ">
												<div class="c-category--purple">ニュース</div>
											</div>
											<ul class="c-card__tag ">
												<li class="c-card__tag__item c-tag">#コンサルファーム</li>
												<li class="c-card__tag__item c-tag">#IT</li>
												<li class="c-card__tag__item c-tag">#金融・保険</li>
												<li class="c-card__tag__item c-tag">#Pickup</li>
											</ul>
										</a>
									</article>
								</div>
								<div class="swiper-slide c-popular__card">
									<article class="c-card">
										<a href="#" class="c-card__link">
											<div class="c-card__img">
												<img src="<?php echo $dir ;?>/assets/img/card/img_card02.webp" alt="" width="1080" height="612">
											</div>
											<time class="c-card__date" datetime="2024-07-28">2024.07.28</time>
											<div class="c-card__title">人材育成の新潮流：コンサルティングがもたらす効果的なトレーニング手法</div>
											<div class="c-card__category ">
												<div class="c-category--coralblue">TIPS</div>
											</div>
											<ul class="c-card__tag ">
												<li class="c-card__tag__item c-tag">#コンサルファーム</li>
												<li class="c-card__tag__item c-tag">#共通</li>
												<li class="c-card__tag__item c-tag">#HR</li>
												<li class="c-card__tag__item c-tag">#Pickup</li>
											</ul>
										</a>
									</article>
								</div>
								<div class="swiper-slide c-popular__card">
									<article class="c-card">
										<a href="#" class="c-card__link">
											<div class="c-card__img">
												<img src="<?php echo $dir ;?>/assets/img/card/img_card03.webp" alt="" width="1080" height="612">
											</div>
											<time class="c-card__date" datetime="2024-07-25">2024.07.25</time>
											<div class="c-card__title">Big Fourが新たなデジタルイノベーションラボを設立、業界に変革をもたらす</div>
											<div class="c-card__category ">
												<div class="c-category--purple">ニュース</div>
											</div>
											<ul class="c-card__tag ">
												<li class="c-card__tag__item c-tag">#コンサルファーム</li>
												<li class="c-card__tag__item c-tag">#共通</li>
												<li class="c-card__tag__item c-tag">#IT</li>
												<li class="c-card__tag__item c-tag">#Pickup</li>
											</ul>
										</a>
									</article>
								</div>
								<div class="swiper-slide c-popular__card">
									<article class="c-card">
										<a href="#" class="c-card__link">
											<div class="c-card__img">
												<img src="<?php echo $dir ;?>/assets/img/card/img_card04.webp" alt="" width="1080" height="612">
											</div>
											<time class="c-card__date" datetime="2024-07-17">2024.07.17</time>
											<div class="c-card__title">リーダーシップの発展に向けたコンサルティングの重要性</div>
											<div class="c-card__category ">
												<div class="c-category--blue">新着情報</div>
											</div>
											<ul class="c-card__tag ">
												<li class="c-card__tag__item c-tag">#コンサルファーム</li>
												<li class="c-card__tag__item c-tag">#M&A・事業再生</li>
												<li class="c-card__tag__item c-tag">#その他</li>
												<li class="c-card__tag__item c-tag">#Pickup</li>
											</ul>
										</a>
									</article>
								</div>
								<div class="swiper-slide c-popular__card">
									<article class="c-card">
										<a href="#" class="c-card__link">
											<div class="c-card__img">
												<img src="<?php echo $dir ;?>/assets/img/card/img_card05.webp" alt="" width="1080" height="612">
											</div>
											<time class="c-card__date" datetime="2024-07-15">2024.07.15</time>
											<div class="c-card__title">フリーコンサルの現場から〜活動の実態と成功のポイント</div>
											<div class="c-card__category ">
												<div class="c-category--coralblue">TIPS</div>
											</div>
											<ul class="c-card__tag ">
												<li class="c-card__tag__item c-tag">#コンサルファーム</li>
												<li class="c-card__tag__item c-tag">#共通</li>
												<li class="c-card__tag__item c-tag">#その他</li>
												<li class="c-card__tag__item c-tag">#Pickup</li>
											</ul>
										</a>
									</article>
								</div>
							</div>
							<div class="swiper-button-prev">
								<img src="<?php echo $dir ;?>/assets/img/common/icon_arrow04-l.svg" alt="" width="48" height="48">
								<img src="<?php echo $dir ;?>/assets/img/common/icon_arrow05-l.svg" alt="" width="48" height="48">
							</div>
							<div class="swiper-button-next">
								<img src="<?php echo $dir ;?>/assets/img/common/icon_arrow04-r.svg" alt="" width="48" height="48">
								<img src="<?php echo $dir ;?>/assets/img/common/icon_arrow05-r.svg" alt="" width="48" height="48">
							</div>
							<div class="swiper-scrollbar"></div>
						</div>
					</div>
				</div>
			</section>
			<div class="p-single__search" id="a-search">
				<div class="l-inner p-single__search__inner">
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
	<?php endwhile; endif;?><!-- hove_posts() -->

	<?php get_footer(); ?>
	