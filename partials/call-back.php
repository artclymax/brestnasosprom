<?php
$image = get_field('call_back_image', 'options') ?? '';
?>

<section class="call-back" id="call-back">
	<div class="container call-back__container">
		<div class="call-back__wrapper box">
			<div class="call-back__image image-box">
				<?php echo wp_get_attachment_image(
					$image['ID'],
					'large',
					false,
					array(
						'class' => 'img',
						'alt' => $image['alt'] ?: ''
					)
				); ?>
			</div>
			<div class="call-back__form">
				<?php echo do_shortcode('[contact-form-7 id="b020696" title="Заказать звонок"]') ?>
			</div>
		</div>
	</div>
</section>