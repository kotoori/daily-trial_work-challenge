<?php 
	global $dir; 
	global $category_info;

	$not_in_ID = get_query_var('not_popular_ID');

	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 5,
		'orderby' => 'date',
		'order'          => 'DESC',
		'post__not_in'   => array($not_in_ID), // 特定の投稿を除外
		'tax_query'      => array(
			array(
				'taxonomy' => 'post_tag',
				'field'    => 'slug',
				'terms'    => 'pickup'
			)
		)
	);
	$the_query = new WP_Query($args);
?>


<!-- Slider main container -->
<div class="swiper c-popular__swiper js-popular-swiper">
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper c-popular__cards">
		<?php if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post();?>
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
			<div class="swiper-slide c-popular__card">
				<article class="c-card">
					<a href="<?php the_permalink();?>" class="c-card__link">
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
			</div>
		<?php endwhile; endif;?><!-- hove_posts() -->
		<?php wp_reset_postdata(); ?>






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