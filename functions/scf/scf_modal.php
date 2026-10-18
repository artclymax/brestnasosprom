<?php

create_options_page(
	'Страницы политики',
	'opt-modal'
);


create_fields(
	'Страницы политики',
	'opt-modal',
	[
		add_field_tab(
			'modal_tab_policy',
			'Политика конфиденциальности',
		),
		add_field_text(
			'modal_policy_title',
			'Заголовок',
		),
		add_field_redactor_wysiwyg(
			'modal_policy_descr',
			'Описание',
		),
		add_field_tab(
			'modal_tab_cookies',
			'Политика конфиденциальности',
		),
		add_field_text(
			'modal_cookies_title',
			'Заголовок',
		),
		add_field_redactor_wysiwyg(
			'modal_cookies_descr',
			'Описание',
		),
	]
);