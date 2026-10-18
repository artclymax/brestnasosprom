<?php
add_action('init', function () {
	register_post_type('product', array(
		'labels' => array(
			'name' => 'Товары',
			'singular_name' => 'Товар',
			'menu_name' => 'Товары',
			'name_admin_bar' => 'Товар',
			'add_new' => 'Добавить товар',
			'add_new_item' => 'Добавить новый товар',
			'new_item' => 'Новый товар',
			'edit_item' => 'Редактировать товар',
			'view_item' => 'Посмотреть товар',
			'all_items' => 'Все товары',
			'search_items' => 'Поиск товаров',
			'not_found' => 'Товары не найдены',
			'not_found_in_trash' => 'Товары не найдены в корзине',
		),
		'menu_icon' => 'dashicons-cart',
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'product',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => true, // true
		'hierarchical' => true,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', ),
		'show_in_rest' => true, //! редактор гутенберг
	));
});
add_action('init', function () {

	register_taxonomy('product_category', 'product', array(
		'labels' => array(
			'name' => 'Категории товаров',
			'singular_name' => 'Категория товара',
			'search_items' => 'Искать категории',
			'all_items' => 'Все категории',
			'edit_item' => 'Редактировать категорию',
			'update_item' => 'Обновить категорию',
			'add_new_item' => 'Добавить категорию',
			'new_item_name' => 'Название категории',
			'menu_name' => 'Категории',
		),
		'hierarchical' => true, // как категории (не как теги)
		'public' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'rewrite' => array(
			'slug' => 'product-category'
		),
		'show_in_rest' => true,
	));

});
add_action('init', function () {
	register_post_type('news', array(
		'labels' => array(
			'name' => 'Новости',
			'singular_name' => 'Новость',
			'menu_name' => 'Новости',
			'name_admin_bar' => 'Новость',
			'add_new' => 'Добавить новость',
			'add_new_item' => 'Добавить новую новость',
			'new_item' => 'Новая новость',
			'edit_item' => 'Редактировать новость',
			'view_item' => 'Посмотреть новость',
			'all_items' => 'Все новости',
			'search_items' => 'Поиск по новостям',
			'not_found' => 'Новости не найдены',
			'not_found_in_trash' => 'Новости не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'news',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => true, // true
		'hierarchical' => true,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', ),
		'show_in_rest' => true, //! редактор гутенберг
		'menu_icon' => 'dashicons-megaphone',
	));
});

add_action('init', function () {
	register_post_type('clients', array(
		'labels' => array(
			'name' => 'Клиенты',
			'singular_name' => 'Клиент',
			'menu_name' => 'Клиенты',
			'name_admin_bar' => 'Клиент',
			'add_new' => 'Добавить клиента',
			'add_new_item' => 'Добавить нового клиента',
			'new_item' => 'Новый клиент',
			'edit_item' => 'Редактировать клиента',
			'view_item' => 'Посмотреть клиента',
			'all_items' => 'Все клиенты',
			'search_items' => 'Поиск клиентов',
			'not_found' => 'Клиенты не найдены',
			'not_found_in_trash' => 'Клиенты не найдены в корзине',
		),
		'menu_icon' => 'dashicons-groups',
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'clients',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => true, // true
		'hierarchical' => true,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', ),
		'show_in_rest' => false, //! редактор гутенберг
	));
});
