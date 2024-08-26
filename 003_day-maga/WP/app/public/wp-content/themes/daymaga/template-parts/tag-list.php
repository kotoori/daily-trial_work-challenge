<?php 
	//全タグをID順に取得
	$tags = get_tags_by_order(null);
?>
<div class="p-single__search" id="a-search">
	<div class="l-inner p-single__search__inner">
		<div class="c-search">
			<div class="c-search__title">キーワードで絞り込む</div>
			<ul class="c-search__tag-list">
				<?php foreach($tags as $tag): ?>
					<li class="c-search__tag-item"><a class="c-tag--link" href="<?php echo get_tag_link($tag->term_id); ?>">#<?php echo $tag->name; ?></a></li>
				<?php endforeach; ?>
				<!-- <li class="c-search__tag-item"><a class="c-tag--link" href="">#コンサルファーム</a></li>
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
				<li class="c-search__tag-item"><a class="c-tag--link" href="">#Pickup</a></li> -->
			</ul>
		</div>
	</div>
</div>
