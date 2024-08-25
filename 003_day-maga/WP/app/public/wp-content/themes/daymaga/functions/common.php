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