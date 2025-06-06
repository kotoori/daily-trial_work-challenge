<?php 
	global $dir;
	get_header();
?>

<main class="l-main">
		<section class="p-archive">
			<div class="l-inner">
				<h1 class="p-archive__title c-heading">すべての記事</h1>
				<div class="p-archive__content">
					<div class="c-archive js-tab-parent">
						<ul class="c-archive__tab-list">
							<li class="c-archive__tab-item"><button class="c-tab --lightblue2 is-active js-tab"data-category="all" data-color="--lightblue2">すべて</button></li>
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
									if(have_posts()): while(have_posts()): the_post();
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
							</div><!-- /.c-archive__cards -->
						</div><!-- /.c-archive__card-area -->
					</div><!-- /.c-archive -->
				</div>
				<div class="p-archive__pagenation" id="js-pagination">
					<div class="c-pagination">
						<?php
							$args = array(
								'end_size' => 0,
								'mid_size' => 1,
								'prev_next' => true,
								'prev_text' => '',
								'next_text' => '',
							);
							echo paginate_links($args); ?>
					</div>
				</div>
			</div>
		</section>
		<div class="p-archive__search" id="a-search">
			<div class="l-inner">
				<?php get_template_part('template-parts/tag-list'); ?>
			</div>
		</div>
	</main>
<?php get_footer(); ?>
