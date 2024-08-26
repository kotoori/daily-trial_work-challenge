<?php
// 固定ページのスラッグからリンクURLを取得する関数
function get_page_link_by_slug($slug) {
	// スラッグからページオブジェクトを取得
	$page = get_page_by_path($slug);
	
	// ページが存在するかチェック
	if ($page) {
			// ページのパーマリンクを取得
			$page_link = get_permalink($page->ID);
			return $page_link;
	} else {
			return '#';
	}
}

//カテゴリーのslugからテーマカラーを取得
function get_category_color($slug) {
	global $category_info;
	foreach($category_info as $cat){
		if($cat['slug'] == $slug){
			return $cat['color'];
		}
	}
	return "";
}

//記事のタグをID順に取得
function get_tags_by_order($post_id) {
	if($post_id == null){
		$args = array(
			'taxonomy'   => 'post_tag',  // または任意のカスタムタクソノミー
			'hide_empty' => false,
			'orderby'    => 'term_order',  // プラグインがサポートする順序
			'order'      => 'ASC'
		);
		$tags = get_tags($args);
	}else{
		$tags = get_the_tags($post_id);
	}

	return $tags;
}

