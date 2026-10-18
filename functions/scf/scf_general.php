<?php

create_options_page(
	'Общие настройки',
	'opt-general'
);


create_fields(
	'Общие настройки',
	'opt-general',
	[
		add_field_tab(
			'general_tab_bg',
			'Фон и основная картинка',
		),
		add_field_image(
			'general_photo',
			'Основная картинка',
		),
		add_field_tab(
			'general_tab_hero',
			'Первый экран на главной',
		),
		add_field_redactor_wysiwyg(
			'general_hero_descr_left',
			'Надпись слева',
		),
		add_field_redactor_wysiwyg(
			'general_hero_descr_right',
			'Надпись справа',
		),
		add_field_tab(
			'general_tab_сards',
			'Карточки и секции',
		),
		add_field_redactor_wysiwyg(
			'general_site_name',
			'Название сайта',
		),
		add_field_image(
			'general_card_bg',
			'Фон карточки',
		),
	]
);