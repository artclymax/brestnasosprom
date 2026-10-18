<?php

create_options_page(
	'Заказать звонок',
	'opt-call-back'
);


create_fields(
	'Заказать звонок',
	'opt-call-back',
	[
		add_field_image(
			'call_back_image',
			'Картинка',
		),
	]
);