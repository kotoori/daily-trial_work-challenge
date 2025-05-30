<?php

//ディレクトリ変数
$dir = esc_url(get_template_directory_uri());

//カテゴリー情報
$category_info = [
	['slug' => 'all', 'color' => 'lightblue2'],
	['slug' => 'new', 'color' => 'blue'],
	['slug' => 'tips', 'color' => 'coralblue'],
	['slug' => 'interview', 'color' => 'purple2'],
	['slug' => 'news', 'color' => 'purple'],
];

//サブクエリ条件：tagがpickupの記事
$pickup_args = array(
	'post_type' => 'post',
	'orderby' => 'date',
	'order'          => 'DESC',
	'tax_query'      => array(
		array(
			'taxonomy' => 'post_tag',
			'field'    => 'slug',
			'terms'    => 'pickup'
		)
	)
);
//アーカイブページの1ページ当たりの表示記事数
$archive_posts_per_page = 9;

//外部リンク変数
$external_link = [

];

//内部リンク（未作成ページ）
$for_consultant_cta_slug = home_url() . '/consultant_info/';//コンサルタントの案件案内登録
$for_company_cta_slug = home_url() . '/company_info/';//企業様の相談窓口
$about_slug = home_url() . '/about/';//DayMagaについて
$company_slug = home_url() . '/company/';//運営会社
$rule_slug = home_url() . '/rule/';//利用規約
$policy_slug = home_url() . '/policy/';//プライバシーポリシー