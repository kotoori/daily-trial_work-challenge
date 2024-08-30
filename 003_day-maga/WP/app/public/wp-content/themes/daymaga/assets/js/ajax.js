jQuery($ => {

$('document').ready(function() {
	const tab = jQuery('.js-tab');
	const order = jQuery('.js-order');
	let before_width = $(window).width();
	let currentPage = 1;


	const get_post_num = () => {
		const width = $(window).width();

		let post_num = 9;
    if (width < 950) {
			post_num = 6;
    }
		return post_num;
	}
	const run_ajax = ({category="all", order="date", page=1, tagId=-1}) => {
		console.log(category + ' ' + order + ' ' + page);
		const pageUrl = window.location.href;
		console.log(tagId);
		$.ajax({
			type: 'POST',
			url: ajax_params.ajax_url,
			data: {
				'action' : 'get_archive',
				'nonce': ajax_params.nonce,
				'category': category,
				'order': order,
				'post_num': get_post_num(),
				'page': page,
				'pageUrl': pageUrl,
				'tagId': tagId,
			},
			dataType: 'json',
			success: function( response ) {
				console.log( '成功しました：');
				//card一覧を更新
				$('#js-archive__container').empty();
				$('#js-archive__container').append(response.cards);

				//もっと見るボタンのリンクを更新
				$('#js-archives-link').attr('href', response.link);

				//ページネーションを更新
				$('#js-pagination').empty();
				$('#js-pagination').append(response.pagination);
			}
		});
	}

	//ロード時に初期表示
	const init_category = jQuery('.js-tab.is-active').data('category');
	const init_order = jQuery('.js-order.is-active').data('order');
	const args = {category: init_category, order: init_order, page: currentPage, tagId: ajax_params.tag_id};
	if (ajax_params.tag_id != -1) {
		console.log('tagId is set' + ajax_params.tagId);
	}else{
		console.log('tagId is not set');
	}
	run_ajax(args);

	//カテゴリー切り替え
	$(tab).on('click', function() {
		const current_category = jQuery(this).data('category');
		const current_order = jQuery('.js-order.is-active').data('order');
		console.log(current_category);
		const args = {category: current_category, order: current_order, page: currentPage, tagId: ajax_params.tag_id};
		run_ajax(args);
	});

	//オーダー切り替え
	$(order).on('click', function() {
		const current_order = jQuery(this).data('order');
		const current_category = jQuery('.js-tab.is-active').data('category');
		const args = {category: current_category, order: current_order, page: currentPage, tagId: ajax_params.tag_id};
		run_ajax(args);
		});

	//リサイズ時に表示数を変更
	$(window).on('resize', function() {
		const current_width = $(window).width();

		if( (before_width >= 950 && current_width < 950) ||
				(before_width < 950 && current_width >= 950) ) {
			const current_category = jQuery('.js-tab.is-active').data('category');
			const current_order = jQuery('.js-order.is-active').data('order');
			const args = {category: current_category, order: current_order, page: currentPage, tagId: ajax_params.tag_id};
			run_ajax(args);
			before_width = current_width;
		}
	});

	$(document).on('click', '#js-pagination a', function(e) {
		e.preventDefault();
		const current_category = jQuery('.js-tab.is-active').data('category');
		const current_order = jQuery('.js-order.is-active').data('order');

		const pageLink = $(this).attr('href'); // リンクからページURLを取得
		const segments = pageLink.split('/');
		let currentPage = segments[segments.length - 2];
		if (currentPage.match(/[^0-9]/)) {
			currentPage = 1;
		}
		const args = {category: current_category, order: current_order, page: currentPage, tagId: ajax_params.tag_id};
		run_ajax(args);
		jQuery('html, body').animate({scrollTop : 0}, 500, 'swing');
	});
});
});//jQuery