<?php 
	//全タグをID順に取得
	$tags = get_tags_by_order(null);
?>
<div class="c-search">
	<div class="c-search__title">キーワードで絞り込む</div>
	<ul class="c-search__tag-list">
		<?php foreach($tags as $tag): ?>
			<li class="c-search__tag-item"><a class="c-tag--link" href="<?php echo get_tag_link($tag->term_id); ?>">#<?php echo $tag->name; ?></a></li>
		<?php endforeach; ?>
	</ul>
</div>

