<?php

create_options_page(
	'Контактные данные',
	'opt-contacts'
);

create_fields(
	'Контактные данные',
	'opt-contacts',
	[
		add_field_tab(
			'contacts_tab_address',
			'Адрес',
		),
		add_field_redactor_wysiwyg(
			'contacts_address',
			'Адрес',
		),
		add_field_tab(
			'contacts_tab_phones',
			'Телефон',
		),
		add_field_repeater(
			'contacts_phones',
			'Телефон',
			[
				add_field_text(
					'contacts_phones_phone',
					'Номер'
				),
				add_field_checkbox(
					'contacts_phones_messengers',
					'Мессенджеры',
					[
						'vb' => 'Вайбер',
						'tg' => 'Телеграм',
						'wh' => 'Ватсапп',
					]
				),
			]
		),
		add_field_tab(
			'contacts_tab_emails',
			'Email',
		),
		add_field_repeater(
			'contacts_emails',
			'Email',
			[
				add_field_text(
					'contacts_emails_email',
					'Email'
				)
			]
		),
		add_field_tab(
			'contacts_tab_time',
			'Время работы',
		),
		add_field_redactor_wysiwyg(
			'contacts_time',
			'Время работы',
		),
		add_field_tab(
			'contacts_tab_payment',
			'Реквизиты',
		),
		add_field_redactor_wysiwyg(
			'contacts_payment',
			'Реквизиты',
		),
		add_field_tab(
			'contacts_tab_map',
			'Карта',
		),
		add_field_redactor_wysiwyg(
			'contacts_map',
			'Карта'
		),
	]
);