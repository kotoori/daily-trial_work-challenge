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

//カテゴリーのslugからカテゴリー名を取得
function get_category_name_by_slug($slug) {
	$category = get_category_by_slug($slug);
	if($category){
		return $category->name;
	}
	return "";
}

//カテゴリーのslugからアーカイブページのリンクを取得
function get_category_link_by_slug($slug) {
	$category = get_category_by_slug($slug);
	if($category){
		return get_category_link($category->cat_ID);
	}
	return home_url('/');
}

//全カテゴリーをオーダー順に取得
function get_categories_by_order() {
	$args = array(
		'orderby' => 'term_order',
		'order' => 'ASC'
	);
	$categories = get_categories($args);
	return $categories;
}


//記事のタグをオーダー順に取得
function get_tags_by_order($post_id) {
	if($post_id == null){
		//post_idがnullの場合は全タグをID順に取得
		$args = array(
			'taxonomy'   => 'post_tag',
			'hide_empty' => false,
			'orderby'    => 'term_order', 
			'order'      => 'ASC'
		);
		$tags = get_tags($args);
	}else{
		//post_id指定がある場合は記事のタグをID順に取得
		$tags = get_the_tags($post_id);
	}

	return $tags;
}

//$archive_posts_per_pageのgetter/setter
function get_archive_posts_per_page() {
	global $archive_posts_per_page;
	return $archive_posts_per_page;
}
function set_archive_posts_per_page($num) {
	global $archive_posts_per_page;
	$archive_posts_per_page = $num;
}
