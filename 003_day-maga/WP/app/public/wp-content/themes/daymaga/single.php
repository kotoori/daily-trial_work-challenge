<?php 
	global $dir; 
	global $category_info;
	get_header();
	
?>
<?php
	if(have_posts()): while(have_posts()): the_post();
	$category_name = null;
	$category = get_the_category();
	if($category && $category[0]){
		if(isset($category[0]->cat_name)){
			$category_name =  $category[0]->cat_name;
			$category_color = get_category_color($category[0]->slug);
		}
	}
	if($category_color == ""){
		$category_color = 'blue';
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
								<a class="c-category--<?php echo $category_color;?> <?php echo $category_name; ?> --large --link" href="<?php echo get_category_link($category[0]->cat_ID); ?>"><?php echo $category_name; ?></a>
							<?php endif; ?>
						</div>
					</div>
					<h1 class="p-single__title"><?php the_title(); ?></h1>
					<?php if(has_post_thumbnail()): ?>
						<div class="p-single__thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php endif; ?>
					<div class="p-single__content">
						<?php the_content(); ?>
					</div>
					<div class="p-single__tags">
						<div class="p-single__tags__title">この記事のタグ</div>
						<ul class="p-single__tags__list">
							<?php 
								//タグ取得
								$tags = get_tags_by_order(get_the_ID());
								if($tags): foreach($tags as $tag):
							?>
								<li class="p-single__tags__item"><a class="c-tag--link" href="<?php echo get_tag_link($tag->term_id); ?>">#<?php echo $tag->name; ?></a></li>
							<?php endforeach; endif;?>
						</ul>
					</div>
				</div><!-- /.p-single__post -->
			</div><!-- /.p-single__inner -->
			<section class="p-single__popular">
				<div class="l-inner">
					<h2 class="p-single__popular__title c-heading">おすすめ記事</h2>
					<div class="p-single__popular__contents">
						<?php
							set_query_var('location', 'single');
							set_query_var('not_popular_ID', get_the_ID());
							get_template_part('template-parts/popular');
						?>
					</div>
				</div>
			</section>
			<div class="p-single__search" id="a-search">
				<div class="l-inner p-single__search__inner">
					<?php get_template_part('template-parts/tag-list'); ?>
				</div>
			</div>
		</div>
	</main>
	<?php endwhile; endif;?><!-- hove_posts() -->

	<?php get_footer(); ?>
	