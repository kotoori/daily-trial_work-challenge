<?php 
//memo
//メモ用ショートコード
function memo( $atts, $content = null ) {
  $content = do_shortcode($content);
  return '<div class="memo">' . $content . '</div>';
}
add_shortcode('memo', 'memo');

//CTAボタン1 コンサルタントの案件案内登録ボタン
function consultant_info_link( $atts, $content = null ) {
	global $for_consultant_cta_slug;
	
	echo 'CTAボタン1 コンサルタントの案件案内登録ボタン<br>';
	$content = do_shortcode($content);
	$url = $for_consultant_cta_slug;
	return '<div class="p-single__btn">
						<a href="' . $url . '" class="c-btn-cont">' . $content . '</a>
					</div>';
}
add_shortcode('btn-cont', 'consultant_info_link');
