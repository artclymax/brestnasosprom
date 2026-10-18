<?php
$page = 'options';
$btn = get_field('header_btn', $page) ?? [];
$phone = get_field('header_phone', $page) ?? '';
$messengers = get_field('header_messengers', $page) ?? [];
?>
<header class="header" data-auto-calc="header, height">
	<div class="header__container container--wide container">
		<div class="header__wrapper">
			<nav class="header__menu header-menu" data-auto-calc="header-menu, height">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'header-menu',
						'container' => false,
						'menu_class' => 'header-menu__list',
						'depth' => 1
					)
				); ?>
			</nav>
			<div class="header__contacts-box">
				<a class="header__phone link" href="tel:+<?php echo esc_attr(correct_phone($phone)) ?>">
					<span class="hidden-tablet">
						<?php echo esc_html($phone) ?>
					</span>
					<span class="visible-tablet">
						<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<foreignObject x="0" y="0" width="0" height="0">
								<div xmlns="http://www.w3.org/1999/xhtml"
									style="backdrop-filter:blur(3px);clip-path:url(#bgblur_0_2011_2072_clip_path);height:100%;width:100%">
								</div>
							</foreignObject>
							<g data-figma-bg-blur-radius="6">
								<path
									d="M0 20C0 8.95431 8.95431 0 20 0C31.0457 0 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20Z"
									fill="#3EC17B" />
								<path
									d="M20 0.299805C30.88 0.299805 39.7002 9.11999 39.7002 20C39.7002 30.88 30.88 39.7002 20 39.7002C9.11999 39.7002 0.299805 30.88 0.299805 20C0.299805 9.11999 9.11999 0.299805 20 0.299805Z"
									stroke="white" stroke-opacity="0.1" stroke-width="0.6" />
								<path
									d="M28.3332 24.1004V26.6004C28.3341 26.8325 28.2866 27.0622 28.1936 27.2749C28.1006 27.4875 27.9643 27.6784 27.7933 27.8353C27.6222 27.9922 27.4203 28.1116 27.2005 28.186C26.9806 28.2603 26.7477 28.288 26.5165 28.2671C23.9522 27.9884 21.489 27.1122 19.3249 25.7087C17.3114 24.4293 15.6043 22.7222 14.3249 20.7087C12.9165 18.5347 12.0401 16.0596 11.7665 13.4837C11.7457 13.2533 11.7731 13.021 11.8469 12.8018C11.9208 12.5825 12.0395 12.381 12.1955 12.2101C12.3515 12.0392 12.5414 11.9027 12.753 11.8092C12.9647 11.7157 13.1935 11.6673 13.4249 11.6671H15.9249C16.3293 11.6631 16.7214 11.8063 17.028 12.07C17.3346 12.3337 17.5349 12.6999 17.5915 13.1004C17.697 13.9005 17.8927 14.686 18.1749 15.4421C18.287 15.7403 18.3112 16.0645 18.2448 16.3761C18.1783 16.6878 18.0239 16.9738 17.7999 17.2004L16.7415 18.2587C17.9278 20.345 19.6552 22.0724 21.7415 23.2587L22.7999 22.2004C23.0264 21.9764 23.3125 21.8219 23.6241 21.7555C23.9358 21.689 24.2599 21.7133 24.5582 21.8254C25.3143 22.1075 26.0998 22.3032 26.8999 22.4087C27.3047 22.4658 27.6744 22.6697 27.9386 22.9817C28.2029 23.2936 28.3433 23.6917 28.3332 24.1004Z"
									fill="white" />
							</g>
						</svg>
					</span>
				</a>
				<ul class="header__messengers messengers">
					<?php foreach ($messengers as $item): ?>
						<li class="messengers__item">
							<a class="messengers__link link-icon" href="<?php echo esc_attr($item['header_messengers_link']) ?>"
								aria-label="Мессенджер">
								<?php echo wp_get_attachment_image(
									$item['header_messengers_image']['ID'],
									'large',
									false,
									array(
										'class' => 'img',
										'alt' => $item['header_messengers_image']['alt'] ?: 'Мессенджер'
									)
								); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
				<a class="header__btn btn" href="<?php echo esc_html($btn['url']) ?>">
					<?php echo esc_html($btn['title']) ?>
				</a>
			</div>
		</div>
	</div>
</header>