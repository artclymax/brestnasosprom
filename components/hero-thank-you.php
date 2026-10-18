<?php
$page = 'options';
$site_name = get_field('general_site_name', 'options') ?? str_replace(['https://', 'http://'], 'www.', get_bloginfo('url'));
$bg_card = get_field('general_card_bg', 'options')['url'] ?? '';

$title = get_field('thank_you_title', $page) ?? '';
$descr = get_field('thank_you_descr', $page) ?? '';
$subdescr = get_field('thank_you_subdescr', $page) ?? '';
$btn = get_field('thank_you_btn', $page) ?? '';
$image = get_field('thank_you_image', $page) ?? '';
?>
<section class="hero-404 hero-thank-you" id="hero-404">
	<div class="container hero-404__container">
		<h1 class="hero-404__title title-1">
			<?php echo esc_html($title) ?>
		</h1>
		<div class="hero-404__wrapper">
			<div class="content-wrapper__card">
				<div class="catalog-slide__sitename">
					<?php echo wp_kses_post($site_name) ?>
				</div>
				<div class="catalog-slide__image-box image-box">
					<?php if ($image): ?>
						<?php echo wp_get_attachment_image(
							$image['ID'],
							'large',
							false,
							array(
								'class' => 'img',
								'alt' => $image['alt'] ?: ''
							)
						); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="hero-404__content">
				<div class="hero-404__descr descr title-first">
					<?php echo wp_kses_post($descr) ?>
				</div>
				<div class="hero-404__subdescr descr">
					<?php echo wp_kses_post($subdescr) ?>
				</div>
				<a class="btn form-btn hero-404__btn" href="	<?php echo esc_attr($btn['url']) ?>">
					<?php echo esc_html($btn['title']) ?>
				</a>
			</div>
		</div>
	</div>
</section>