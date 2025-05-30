<?php 
//Wordpressの設定
function my_wp_setup (){
	add_theme_support('post-thumbnails');
	// add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
}
add_action("after_setup_theme", "my_wp_setup");
