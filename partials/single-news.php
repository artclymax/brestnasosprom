<?php
$site_name = get_field('general_site_name', 'options') ?? str_replace(['https://', 'http://'], 'www.', get_bloginfo('url'));
$bg_card = get_field('general_card_bg', 'options')['url'] ?? '';

$image = get_field('news_image') ?? '';
?>

<section class="single-product single-news" id="single-product">
	<div class="container single-product__container">
		<div class="single-product__wrapper content-wrapper">
			<!-- card -->
			<div class="content-wrapper__card">
				<div class="catalog-slide__sitename">
					<?php echo wp_kses_post($site_name) ?>
				</div>
				<div class="catalog-slide__image-box image-box">
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
				<div class="catalog-slide__content">
					<h3 class="catalog-slide__title title-2">
						<?php the_title() ?>
					</h3>
					<div class="catalog-slide__meta-box">
						<time class="catalog-slide__date" datetime="<?php echo esc_attr(get_the_date()) ?>">
							<?php echo esc_html(get_the_date()) ?>
						</time>
					</div>
				</div>
			</div>
			<!-- content -->
			<div class="content-wrapper__content-box content-box">
				<div class="content-box__descr descr">
					<?php the_content() ?>
				</div>
				<a class="content-box__btn btn-light" href="<?php echo esc_url(home_url('/news')); ?>">
					<span>
						К другим новостям
					</span>
				</a>
			</div>
		</div>
	</div>
</section>