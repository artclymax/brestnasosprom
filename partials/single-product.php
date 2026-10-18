<?php
$site_name = get_field('general_site_name', 'options') ?? str_replace(['https://', 'http://'], 'www.', get_bloginfo('url'));
$bg_card = get_field('general_card_bg', 'options')['url'] ?? '';
$label = get_field('product_card_label')['text'] ?? '';
$label_pos_y = get_field('product_card_label')['position_y'] ?? '';
$label_pos_x = get_field('product_card_label')['position_x'] ?? '';
$image = get_field('product_card_image') ?? get_the_post_thumbnail() ?? '';

$subtitle = get_field('product_card_subtitle') ?? '';
$table_title = get_field('product_card_list')['product_card_list_title'] ?? '';
$list = get_field('product_card_list')['product_card_list_list'] ?? '';

$content_table_title = get_field('product_card_table_title') ?? '';
$content_table = get_field('product_card_table_list') ?? '';

?>

<section class="single-product" id="single-product">
	<div class="container single-product__container">
		<div class="single-product__wrapper content-wrapper">
			<!-- card -->
			<div class="content-wrapper__card image-box">
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
			<!-- table -->
			<?php if ($content_table): ?>
				<div class="content-wrapper__table content-table">
					<h3 class="content-table__title title-2">
						<?php echo esc_html($content_table_title) ?>
					</h3>
					<div class="content-table__wrapper">
						<ul class="content-table__list">
							<?php foreach ($content_table as $item): ?>
								<li class="content-table__item content-table-item">
									<p class="content-table-item__title">
										<?php echo esc_html($item['product_card_table_list_title']) ?>
									</p>
									<p class="content-table-item__value">
										<span class="content-table-item__text">
											<?php echo esc_html($item['product_card_table_list_text']) ?>
										</span>
										<span class="content-table-item__measure">
											<?php echo esc_html($item['product_card_table_list_measure']) ?>
										</span>
									</p>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			<?php endif; ?>
			<!-- content -->
			<div class="content-wrapper__content-box content-box">
				<div class="content-box__descr descr">
					<?php the_content() ?>
				</div>

				<a class="content-box__btn btn-light" href="<?php echo esc_url(home_url('/')); ?>">
					<span>
						К другим Продуктам
					</span>
				</a>
			</div>
		</div>
	</div>
</section>