<?php
	function my_script_init() {
		global $dir;

		// CSSファイルを登録
		if ( is_front_page() || is_single() ) {
			wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), false, 'all' );
		}
		wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Zen+Maru+Gothic:wght@700&display=swap', array(), null, 'all' );
		wp_enqueue_style( 'my', $dir . '/assets/css/style.css', array(), filemtime(get_theme_file_path('assets/css/style.css')), 'all' );

		//JSファイルを登録
		if ( is_front_page() || is_single() ) {
			wp_enqueue_script( "swiper", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array(), false, true );
			wp_enqueue_script( "my-popular", $dir."/assets/js/popular.js", array("jquery"), filemtime(get_theme_file_path('assets/js/popular.js')), true );
		}
		if(is_front_page()){
			wp_enqueue_script( "my-top", $dir."/assets/js/top.js", array("jquery"), filemtime(get_theme_file_path('assets/js/top.js')), true );
		}
		if(is_front_page() || is_home() || is_page('all') || is_archive()){
			wp_enqueue_script( "my-ajax", $dir."/assets/js/ajax.js", array("jquery"), filemtime(get_theme_file_path('assets/js/ajax.js')), true );
			$localize_data = array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('my-ajax-nonce')
			);
			if (is_tag()) {
					$localize_data['isTag'] = true;
					$tag = get_queried_object();
					$localize_data['tag_id'] = $tag->term_id;
			}else{
				$localize_data['isTag'] = false;
				$localize_data['tag_id'] = -1;
			}
			wp_localize_script('my-ajax', 'ajax_params', $localize_data);
		}
		wp_enqueue_script( "my-common", $dir."/assets/js/common.js", array("jquery"), filemtime(get_theme_file_path('assets/js/common.js')), true );
	}
  add_action("wp_enqueue_scripts", "my_script_init");