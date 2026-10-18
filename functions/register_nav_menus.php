<?php

add_action('after_setup_theme', function () {
	$theme = wp_get_theme();
	$textdomain = $theme->get('TextDomain') ?: 'sitedomain';

	register_nav_menus(
		array(
			'header-menu' => __('Меню шапки', $textdomain),
			'footer-menu' => __('Меню подвала', $textdomain),
			//'services-menu' => __('Меню услуг', $textdomain),
		)
	);
});

add_filter('nav_menu_css_class', function ($classes, $item) {

	if (empty($item->url))
		return $classes;

	// Текущий URL без домена и слешей
	$current_path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
	$item_path = trim(parse_url($item->url, PHP_URL_PATH), '/');

	// ----- 1. Прямое совпадение URL -----
	if ($current_path === $item_path) {
		$classes[] = 'is-active';
	}

	// ----- 2. Активируем архив и все записи CPT -----
	$cpt_slug = 'news'; // Ваш slug CPT

	// Проверяем: если URL == slug CPT (архив) или начинается с slug CPT + /
	if ($current_path === $cpt_slug || strpos($current_path, $cpt_slug . '/') === 0) {
		// Если пункт меню ведёт на Page с таким же slug, помечаем активным
		if ($item_path === $cpt_slug) {
			$classes[] = 'is-active';
		}
	}

	// ----- 3. Таксономии CPT -----
	$taxonomy_slug = 'news-category'; // slug вашей таксономии

	if ($current_path === $taxonomy_slug || strpos($current_path, $taxonomy_slug . '/') === 0) {
		// архив CPT
		if ($item_path === $cpt_slug) {
			$classes[] = 'is-active';
		}
		// конкретная категория
		if ($current_path === $item_path) {
			$classes[] = 'is-active';
		}
	}

	return $classes;

}, 10, 2);