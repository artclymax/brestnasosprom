<?php

create_options_page(
	'Шапка',
	'opt-header'
);


create_fields(
	'Шапка',
	'opt-header',
	[
		add_field_hint(
			'header_hint',
			'<b>Логотип</b> - перейдите на Настройки сайта > Основные настройки > Логотип сайта.<br/><b>Меню</b> - перейдите на Настройки сайта > Меню > Меню шапки.',
			'Логотип и меню'
		),
		add_field_text(
			'header_phone',
			'Телефон',
		),
		add_field_link(
			'header_btn',
			'Кнопка',
		),
		add_field_repeater(
			'header_messengers',
			'Мессенджеры',
			[
				add_field_image(
					'header_messengers_image',
					'Иконка',
				),
				add_field_text(
					'header_messengers_link',
					'Ссылка / Номер',
				),
			]
		)
	]
);