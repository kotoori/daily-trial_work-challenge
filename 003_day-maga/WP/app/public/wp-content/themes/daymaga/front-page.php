<?php 
	global $dir; 
	get_header();
?>

<main class="l-main">
		<div class="p-top__fv">
			<!-- Slider main container -->
			<div class="swiper p-top__fv__swiper js-top-fv-swiper">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper p-top__fv__cards">
					<?php
						$the_query = new WP_Query($pickup_args);
						if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post();
					?>
					<?php
						$category = get_the_category();
						if(isset($category[0]->cat_name)){
							$category_name =  $category[0]->cat_name;
							$category_color = get_category_color($category[0]->slug);
						}
						if($category_color == ""){
							$category_color = 'blue';
						}
					?>
					<!-- Slides -->
					<div class="swiper-slide p-top__fv__card">
						<article class="c-card --large">
							<a href="<?php the_permalink(); ?>" class="c-card__link">
								<div class="c-card__img">
									<?php if(has_post_thumbnail()): ?>
										<?php the_post_thumbnail(); ?>
									<?php else: ?>
											<img src="<?php echo $dir ;?>/assets/img/card/img_dummy.webp" alt="" width="1080" height="612" loading="lazy">
									<?php endif; ?>
								</div>
								<time class="c-card__date" datetime="<?php the_time('c');?>"><?php the_time('Y.m.d'); ?></time>
								<div class="c-card__title"><?php the_title(); ?></div>
								<div class="c-card__category ">
									<div class="c-category--<?php echo $category_color; ?> --large"><?php echo $category_name; ?></div>
								</div>
								<ul class="c-card__tag ">
									<?php 
										//タグ取得
										$tags = get_tags_by_order(get_the_ID());
										if($tags): foreach($tags as $tag):
									?>
										<li class="c-card__tag__item c-tag --large">#<?php echo $tag->name;?></li>
									<?php endforeach; endif;?>
								</ul>
							</a>
						</article>
					</div>
					<?php endwhile; endif;?><!-- hove_posts() -->
					<?php wp_reset_postdata(); ?>
				</div>
				<div class="swiper-button-prev"><img src="<?php echo $dir ;?>/assets/img/top/icon_arrow-l.svg" alt="" width="36" height="36" loading="lazy"></div>
				<div class="swiper-button-next"><img src="<?php echo $dir ;?>/assets/img/top/icon_arrow-r.svg" alt="" width="36" height="36" loading="lazy"></div>
			</div>
		</div>
		<section class="p-top__newest" id="a-newest">
			<div class="p-top__newest__inner l-inner">
				<h2 class="p-top__newest__title c-heading">新着情報</h2>
				<ul class="p-top__newest__list">
					<?php
						$new_args = array(
							'posts_per_page' => 3,
							'category_name' => 'new',
							'orderby' => 'date',
							'order' => 'DESC'
						);
					?>
					<?php
						$the_query = new WP_Query($new_args);
						if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post();
					?>
					<?php
						$category = get_the_category();
						if(isset($category[0]->cat_name)){
							$category_name =  $category[0]->cat_name;
							$category_color = get_category_color($category[0]->slug);
						}
						if($category_color == ""){
							$category_color = 'blue';
						}
					?>
						<li class="p-top__newest__item">
							<article class="c-card">
								<a href="<?php the_permalink(); ?>" class="c-card__link">
									<div class="c-card__img">
										<?php if(has_post_thumbnail()): ?>
											<?php the_post_thumbnail(); ?>
										<?php else: ?>
												<img src="<?php echo $dir ;?>/assets/img/card/img_dummy.webp" alt="" width="1080" height="612" loading="lazy">
										<?php endif; ?>
									</div>
									<time class="c-card__date" datetime="<?php the_time('c');?>"><?php the_time('Y.m.d'); ?></time>
									<div class="c-card__title"><?php the_title(); ?></div>
									<div class="c-card__category">
										<div class="c-category--<?php echo $category_color; ?>"><?php echo $category_name; ?></div>
									</div>
									<ul class="c-card__tag">
									<?php 
										//タグ取得
										$tags = get_tags_by_order(get_the_ID());
										if($tags): foreach($tags as $tag):
									?>
										<li class="c-card__tag__item c-tag">#<?php echo $tag->name;?></li>
										<?php endforeach; endif;?>
									</ul>
								</a>
							</article>
						</li>
					<?php endwhile; endif;?><!-- hove_posts() -->
					<?php wp_reset_postdata(); ?>
				</ul>
				<div class="p-top__newest__btn">
					<a href="<?php echo get_category_link_by_slug('new'); ?>" class="c-btn">もっと見る</a>
				</div>
			</div>
		</section>
		<section class="p-top__popular">
			<div class="l-inner">
				<h2 class="p-top__popular__title c-heading--white">おすすめ記事</h2>
				<div class="p-top__popular__contents">
					<?php
						set_query_var('location', 'top');
						set_query_var('not_popular_ID', array());
						get_template_part('template-parts/popular');
					?>
				</div>
			</div>
		</section>

		<section class="p-top__all">
			<div class="l-inner">
				<h2 class="p-top__all__title c-heading">すべての記事</h2>
				<div class="p-top__all__content">
					<div class="c-archive js-tab-parent">
						<ul class="c-archive__tab-list">
							<li class="c-archive__tab-item"><button class="c-tab --<?php echo get_category_color('all');?> is-active js-tab" data-category="all" data-color="--lightblue2">すべて</button></li>
							<?php
								//全カテゴリーをID順に取得
								$categories = get_categories_by_order();
								// var_dump($categories);
								if($categories): foreach($categories as $category):
							?>
								<li class="c-archive__tab-item"><button class="c-tab --<?php echo get_category_color($category->slug);?> js-tab" data-category="<?php echo $category->slug; ?>" data-color="--<?php echo get_category_color($category->slug); ?>"><?php echo $category->name; ?></button></li>
							<?php endforeach; endif;?>
						</ul>
						<div class="c-archive__card-area js-tab-target --lightblue2">
							<div class="c-archive__content__change">
								<div class="c-btn-change">
									<button class="c-btn-change__item is-active js-order" data-order="date">新着順</button>
									<button class="c-btn-change__item js-order" data-order="views">人気順</button>
								</div>
							</div>
							<div class="c-archive__cards" id="js-archive__container">
								<?php
									//ここにajaxで取得した記事が表示される
									//取得できなかった場合は、以下の記事を表示する
									$all_args = array(
										'posts_per_page' => 6,
										'orderby' => 'date',
										'order' => 'DESC'
									);
								?>
								<?php
									$the_query = new WP_Query($all_args);
									if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post();
								?>
								<?php
									$category = get_the_category();
									if(isset($category[0]->cat_name)){
										$category_name =  $category[0]->cat_name;
										$category_color = get_category_color($category[0]->slug);
									}
									if($category_color == ""){
										$category_color = 'blue';
									}
								?>
								<div class="c-archive__card">
									<article class="c-card">
										<a href="<?php the_permalink(); ?>" class="c-card__link">
											<div class="c-card__img">
												<?php if(has_post_thumbnail()): ?>
													<?php the_post_thumbnail(); ?>
												<?php else: ?>
														<img src="<?php echo $dir ;?>/assets/img/card/img_dummy.webp" alt="" width="1080" height="612" loading="lazy">
												<?php endif; ?>
											</div>
											<time class="c-card__date" datetime="<?php the_time('c');?>"><?php the_time('Y.m.d'); ?></time>
											<div class="c-card__title"><?php the_title(); ?></div>
											<div class="c-card__category ">
												<div class="c-category--<?php echo $category_color; ?>"><?php echo $category_name; ?></div>
											</div>
											<ul class="c-card__tag ">
												<?php
													//タグ取得
													$tags = get_tags_by_order(get_the_ID());
													if($tags): foreach($tags as $tag):
												?>
													<li class="c-card__tag__item c-tag">#<?php echo $tag->name;?></li>
												<?php endforeach; endif;?>
											</ul>
										</a>
									</article>
								</div>
								<?php endwhile; endif;?><!-- hove_posts() -->
								<?php wp_reset_postdata(); ?>
							</div><!-- /.c-archive__cards -->
						</div><!-- /.c-archive__card-area -->
					</div><!-- /.c-archive -->
				</div>
				<div class="p-top__all__btn">
					<a href="" class="c-btn" id="js-archives-link">もっと見る</a>
				</div>
			</div>
		</section>
		<div class="p-top__search" id="a-search">
			<div class="l-inner">
				<?php get_template_part('template-parts/tag-list'); ?>
			</div>
		</div>
	</main>

<?php get_footer(); ?>