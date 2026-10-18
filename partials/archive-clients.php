<?php
$site_name = get_field('general_site_name', 'options') ?? str_replace(['https://', 'http://'], 'www.', get_bloginfo('url'));

$args = [
	'post_type' => 'clients',
	'posts_per_page' => -1, // все записи
	'orderby' => 'menu_order',
	'order' => 'ASC'
];

$query = new WP_Query($args);
?>
<section class="catalog" id="catalog">
	<div class="container container--wide catalog__container">
		<div class="swiper swiper-catalog"
			data-swiper="{'slidesPerView':1,'spaceBetween':0, 'rewind': true, 'watchOverflow': false, 'scrollbar':{'el':'.swiper-catalog__scrollbar','hide':false,'draggable':true },'breakpoints':{'992':{'slidesPerView':2.5,'spaceBetween':0},'1240':{'slidesPerView':3,'spaceBetween':0},'1440':{'slidesPerView':3,'spaceBetween':32}}}">
			<div class="swiper-wrapper swiper-catalog__wrapper">
				<?php if ($query->have_posts()):
					while ($query->have_posts()):
						$query->the_post();

						$image = get_field('news_image') ?? '';
						$image_pos_x = get_field('news_image_position_x') ?? '';
						$image_pos_y = get_field('news_image_position_y') ?? '';
						$bg_card = get_the_post_thumbnail_url() ?: get_field('general_card_bg', 'options')['url'];
						?>
						<div class="swiper-slide catalog-slide catalog-slide-clients">
							<div class="catalog-slide__wrapper">
								<div class="catalog-slide__wrapper-link">
									<div class="catalog-slide__sitename">
										<?php echo wp_kses_post($site_name) ?>
									</div>
									<div class="catalog-slide__image-box">
										<div class="catalog-slide__image-clients">
											<?php the_post_thumbnail() ?>
										</div>
									</div>
									<div class="catalog-slide__content">
										<h3 class="catalog-slide__title title-2">
											<?php the_title() ?>
										</h3>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile;
					wp_reset_postdata();
				endif;
				?>
			</div>
			<div class="swiper-scrollbar swiper-catalog__scrollbar hidden-mobile"></div>
		</div>
		<button class="swiper-btn swiper-btn__prev swiper-catalog__btn swiper-catalog__btn-prev hidden-mobile"
			type="button" aria-label="Назад" data-swiper-btn-prev=".swiper-catalog">
			<svg width="46" height="45" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M21.9219 35.1572L8.98438 22.501L21.9219 9.84473M10.7812 22.501H37.0156"
					stroke="url(#paint0_linear_2029_2140)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				<defs>
					<linearGradient id="paint0_linear_2029_2140" x1="37.0156" y1="9.84474" x2="7.61829" y2="11.5456"
						gradientUnits="userSpaceOnUse">
						<stop stop-color="#E8C25F" />
						<stop offset="0.505208" stop-color="#E3D282" />
						<stop offset="1" stop-color="#D3A647" />
					</linearGradient>
				</defs>
			</svg>
		</button>
		<button class="swiper-btn swiper-btn__next swiper-catalog__btn swiper-catalog__btn-next hidden-mobile"
			type="button" aria-label="Вперёд" data-swiper-btn-next=".swiper-catalog">
			<svg width="46" height="45" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M24.0781 35.1572L37.0156 22.501L24.0781 9.84473M35.2188 22.501H8.98438"
					stroke="url(#paint0_linear_2029_2206)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				<defs>
					<linearGradient id="paint0_linear_2029_2206" x1="8.98438" y1="9.84474" x2="38.3817" y2="11.5456"
						gradientUnits="userSpaceOnUse">
						<stop stop-color="#E8C25F" />
						<stop offset="0.505208" stop-color="#E3D282" />
						<stop offset="1" stop-color="#D3A647" />
					</linearGradient>
				</defs>
			</svg>
		</button>
	</div>
</section>