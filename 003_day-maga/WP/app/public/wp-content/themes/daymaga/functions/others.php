<?php
//ajax：カテゴリを取得し、カテゴリの記事一覧(カード)を返す
function my_get_archive() {
	global $dir;

	$nonce = $_REQUEST['nonce'];
	if ( wp_verify_nonce( $nonce, 'my-ajax-nonce' ) ) {
		$active_category = $_REQUEST['category'];
		$order = $_REQUEST['order'];
		$post_num = $_REQUEST['post_num'];
		$page = $_REQUEST['page'];
		$pageUrl = $_REQUEST['pageUrl'];
		$tagId = $_REQUEST['tagId'];

		//1ページあたりの記事数を指定
		$args = array(
			'posts_per_page' => $post_num,
			'order' => 'DESC',
			'paged' => $page,
		);

		if($tagId != -1){
			//タグの場合
			$args['tag_id'] = $tagId;
		}else{
			//カテゴリーの場合
			//カテゴリーがall以外の場合はカテゴリーを指定
			if($active_category != 'all'){
				$args['category_name'] = $active_category;
			}
		}

		//orderがviewsの場合はview数でソート
		if($order == 'views'){
			$args['meta_query'] = array(
        'relation' => 'OR',
        array(
            'key'  => 'views',
            'compare' => 'EXISTS'
        ),
        array(
            'key'     => 'views',
            'compare' => 'NOT EXISTS'
				),
			);
			$args['orderby'] = 'meta_value_num';
		}else{
			$args['orderby'] = 'date';
		}

		//記事(カードリスト)取得
		$post_cards = '';

		$the_query = new WP_Query($args);
		if($the_query->have_posts()){
			while($the_query->have_posts()){
				$the_query->the_post();

				$category = get_the_category();
				if(isset($category[0]->cat_name)){
					$category_name =  $category[0]->cat_name;
					$category_color = get_category_color($category[0]->slug);
				}
				if($category_color == ""){
					$category_color = 'blue';
				}
				if(has_post_thumbnail()){
					$post_thumbnail = get_the_post_thumbnail();
				}else{
					$post_thumbnail = '<img src="' . $dir .'/assets/img/card/img_dummy.webp" alt="" width="1080" height="612" loading="lazy">';
				}
				$post_datetime = get_the_time('c');
				$post_display_datetime = get_the_time('Y.m.d');
				$post_title = get_the_title();
				$post_tags = get_tags_by_order(get_the_ID());

				$tags = get_tags_by_order(get_the_ID());
				if($tags){
					$post_tags = '';
					foreach($tags as $tag){
						$post_tags .= '<li class="c-card__tag__item c-tag">#' . $tag->name . '</li>';
					}
				}
				$post_cards .= '<div class="c-archive__card">
						<article class="c-card">
							<a href="' . get_the_permalink() . '" class="c-card__link">
								<div class="c-card__img">' . $post_thumbnail . '</div>
								<time class="c-card__date" datetime="' . $post_datetime . '">' . $post_display_datetime . '</time>
								<div class="c-card__title">' . $post_title .'</div>
								<div class="c-card__category ">
									<div class="c-category--' .  $category_color . '">' . $category_name .'</div>
								</div>
								<ul class="c-card__tag ">' . $post_tags . '</ul>
							</a>
						</article>
					</div>';
			};//endwhile
		}else{
			$post_cards = '<div class="c-card__nothing">投稿の準備中です。</div>';
		};//hove_posts()

		//ページネーション生成
		$pagination = '';
		if($the_query->max_num_pages > 1){
			$pagination .= '<div class="c-pagination">';
			$pagination .=  paginate_links(array(
				'base' => $pageUrl . '/page/%#%/',
				'total' => $the_query->max_num_pages,
				'current' => $page,
				'end_size' => 0,
				'mid_size' => 1,
				'prev_next' => true,
				'prev_text' => '',
				'next_text' => '',
			));
			$pagination .= '</div>';
		}
		wp_reset_postdata();
	
		//アーカイブページのリンク取得
		if($active_category == 'all'){
			$archives_link = get_page_link_by_slug('all');
		}else{
			$archives_link = get_category_link_by_slug($active_category);
		}

		//フロントサイドにレスポンスを返す
		$response_data = array(
			'cards' => $post_cards,
			'link' => $archives_link,
			'pagination' => $pagination,
		);
		echo json_encode($response_data);
	}else{
		//認証エラー
		echo 'nonce error';
	}
	wp_die();
}
add_action( 'wp_ajax_get_archive', 'my_get_archive' );
add_action( 'wp_ajax_nopriv_get_archive', 'my_get_archive' );
