<?php

create_options_page(
	'Подвал / Футер',
	'opt-footer'
);

create_fields(
	'Подвал / Футер',
	'opt-footer',
	[
		add_field_hint(
			'footer_hint',
			'<b>Логотип</b> - перейдите на Настройки сайта > Основные настройки > Логотип сайта.',
			'Логотип'
		),
		add_field_text(
			'footer_copy',
			'Название компании / Копирайт',
		),
		add_field_repeater(
			'footer_links',
			'Ссылки',
			[
				add_field_link(
					'footer_links_link',
					'Ссылка',
				),
			]
		)
	]
);