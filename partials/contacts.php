<?php
$address = get_field('contacts_address', 'options') ?? '';
$phones = get_field('contacts_phones', 'options') ?? '';
$emails = get_field('contacts_emails', 'options') ?? '';
$time = get_field('contacts_time', 'options') ?? '';
$payment = get_field('contacts_payment', 'options') ?? '';
$map = get_field('contacts_map', 'options') ?? '';
?>

<section class="contacts" id="contacts">
	<div class="container contacts__container">
		<div class="contacts__wrapper box">
			<?php if ($map): ?>
				<div class="contacts__map">
					<?php echo wp_kses($map, [
						'iframe' => [
							'src' => true,
							'width' => true,
							'height' => true,
							'style' => true,
							'allowfullscreen' => true,
							'loading' => true,
						],
					]) ?>
				</div>
			<?php endif; ?>
			<div class="contacts__info">
				<?php if ($address): ?>
					<div class="contacts__box">
						<h3 class="contacts__title title-2">Адрес</h3>
						<div class="contacts__descr descr">
							<?php echo wp_kses_post($address) ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if ($phones): ?>
					<div class="contacts__box">
						<h3 class="contacts__title title-2">Телефоны</h3>
						<ul class="contacts__list">
							<?php foreach ($phones as $item): ?>
								<li class="contacts__item">
									<a class="contacts__link"
										href="tel+<?php echo esc_attr(correct_phone($item['contacts_phones_phone'])) ?>">
										<?php echo esc_html($item['contacts_phones_phone']) ?>
									</a>
									<?php if ($item['contacts_phones_messengers']): ?>
										<ul class="contacts__sublist">
											<?php foreach ($item['contacts_phones_messengers'] as $msg): ?>
												<?php if ($msg == 'vb'): ?>
													<li class="contacts__subitem">
														<a class="contacts__link-icon link-icon"
															href="viber://chat?number=<?php echo esc_attr(correct_phone($item['contacts_phones_phone'])) ?>">
															<svg width="28" height="28" viewBox="0 0 28 28" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<rect width="28" height="28" rx="14" fill="#605EB3" />
																<path fill-rule="evenodd" clip-rule="evenodd"
																	d="M14.001 5.91504C12.2685 5.91504 9.56885 6.07443 7.92413 7.5767C6.76143 8.73439 6.30097 10.3583 6.30097 12.46L6.30088 12.5907C6.30074 12.7295 6.30058 12.8791 6.30174 13.0375C6.30058 13.1957 6.30074 13.3452 6.30088 13.484L6.30097 13.6147C6.30097 15.7164 6.76143 17.3403 7.92413 18.498C8.55014 19.0697 9.33092 19.4459 10.151 19.6938V21.4594C10.151 22.0739 10.5548 22.085 10.6288 22.085H10.6322C10.8224 22.0843 10.9868 21.9911 11.1516 21.8448C11.2136 21.7897 11.9293 20.992 12.7078 20.1196C13.1713 20.1493 13.6117 20.16 14.0006 20.16C15.7331 20.16 18.4323 20.0003 20.0774 18.498C21.2397 17.3407 21.7006 15.7164 21.7006 13.6147L21.7007 13.4839C21.7008 13.3452 21.701 13.1956 21.6998 13.0372C21.701 12.8788 21.7008 12.7294 21.7007 12.5906L21.7006 12.4597C21.7006 10.3579 21.2401 8.73401 20.0774 7.57631C18.4327 6.07443 15.7335 5.91504 14.001 5.91504ZM15.606 14.385C15.8028 14.385 16.1778 14.5125 16.4238 14.6599L16.562 14.7428C17.0485 15.0342 17.2471 15.1531 17.6396 15.4838C17.7844 15.6059 17.8506 15.7449 17.851 15.8904C17.8514 16.1368 17.7293 16.4594 17.5665 16.6781C17.3212 17.0069 16.9874 17.3511 16.5716 17.4427C16.5104 17.4562 16.4492 17.4631 16.388 17.465C15.9591 17.4774 15.5248 17.3103 15.156 17.1285C14.2786 16.6962 13.4292 16.1241 12.6708 15.5015C12.4282 15.3021 12.2026 15.0854 11.9847 14.8613C11.7603 14.6434 11.5435 14.4178 11.3445 14.1752C10.7219 13.4168 10.1498 12.5675 9.71746 11.69C9.53382 11.3177 9.36365 10.8781 9.38136 10.4449C9.38367 10.388 9.39098 10.331 9.4033 10.2744C9.49532 9.85859 9.83912 9.5248 10.1679 9.27955C10.3866 9.1167 10.7096 8.99465 10.9556 8.99504C11.1012 8.99542 11.2401 9.06164 11.3622 9.2064C11.6926 9.59782 11.8115 9.79642 12.1016 10.2811L12.1861 10.4222C12.3335 10.6682 12.461 11.0375 12.461 11.2342C12.461 11.3686 12.3524 11.5295 12.2538 11.6277C12.1883 11.6934 12.1188 11.748 12.0519 11.8005C11.861 11.9505 11.691 12.0841 11.691 12.4119C11.691 12.845 12.1318 13.6016 12.7016 14.1444C13.2444 14.7142 14.001 15.155 14.4341 15.155C14.7591 15.155 14.8901 14.9848 15.0367 14.7943C15.0898 14.7253 15.145 14.6536 15.2122 14.5864C15.3107 14.4878 15.4717 14.385 15.606 14.385ZM17.466 13.23C17.466 13.4426 17.6385 13.615 17.851 13.615C18.0635 13.615 18.236 13.4426 18.236 13.23V12.845C18.236 10.51 16.336 8.61004 14.001 8.61004C13.7885 8.61004 13.616 8.78252 13.616 8.99504C13.616 9.20756 13.7885 9.38004 14.001 9.38004C15.9113 9.38004 17.466 10.9347 17.466 12.845V13.23ZM15.114 12.5571C15.1591 12.7303 15.3154 12.845 15.4863 12.845C15.5183 12.845 15.551 12.8408 15.5837 12.8323C15.7893 12.7784 15.9125 12.5686 15.859 12.3626C15.683 11.6881 15.1556 11.161 14.4826 10.9866C14.2759 10.9339 14.0664 11.0575 14.0133 11.2631C13.9602 11.469 14.0837 11.6789 14.2897 11.7324C14.6928 11.8363 15.0085 12.1524 15.114 12.5571ZM16.311 12.845C16.311 13.0576 16.4835 13.23 16.696 13.23C16.9085 13.23 17.081 13.0576 17.081 12.845C17.081 11.208 15.8005 9.85782 14.1654 9.77158C13.9563 9.76003 13.7719 9.92327 13.7607 10.1358C13.7496 10.3479 13.9124 10.5293 14.1249 10.5404C15.3508 10.6051 16.311 11.6177 16.311 12.845Z"
																	fill="white" />
															</svg>
														</a>
													</li>
												<?php endif; ?>
												<?php if ($msg == 'tg'): ?>
													<li class="contacts__subitem">
														<a class="contacts__link-icon link-icon"
															href="https://t.me/+<?php echo esc_attr(correct_phone($item['contacts_phones_phone'])) ?>">
															<svg width="28" height="28" viewBox="0 0 28 28" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<rect width="28" height="28" rx="14" fill="#27A6E5" />
																<path
																	d="M19.6008 8.82146L17.497 19.8045C17.497 19.8045 17.2026 20.566 16.394 20.2008L11.54 16.3467L11.5175 16.3353C12.1731 15.7257 17.2575 10.9918 17.4797 10.7772C17.8237 10.4449 17.6101 10.247 17.2107 10.4981L9.70054 15.437L6.80313 14.4274C6.80313 14.4274 6.34716 14.2595 6.3033 13.8943C6.25885 13.5285 6.81813 13.3306 6.81813 13.3306L18.63 8.53217C18.63 8.53217 19.6008 8.09045 19.6008 8.82146V8.82146Z"
																	fill="white" />
															</svg>
														</a>
													</li>
												<?php endif; ?>
												<?php if ($msg == 'wh'): ?>
													<li class="contacts__subitem">
														<a class="contacts__link-icon link-icon"
															href="https://wa.me/<?php echo esc_attr(correct_phone($item['contacts_phones_phone'])) ?>">
															<svg width="28" height="28" viewBox="0 0 28 28" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<rect width="28" height="28" rx="14" fill="#48C95F" />
																<path
																	d="M19.5488 8.44355C18.1659 7.06543 16.3219 6.2998 14.3756 6.2998C10.3293 6.2998 7.05122 9.56647 7.05122 13.5988C7.05122 14.8748 7.40976 16.1508 8.02439 17.2227L7 20.9998L10.8927 19.979C11.9683 20.5404 13.1463 20.8467 14.3756 20.8467C18.4219 20.8467 21.7 17.58 21.7 13.5477C21.6488 11.6592 20.9317 9.82168 19.5488 8.44355ZM17.9098 16.2019C17.7561 16.6102 17.039 17.0186 16.6805 17.0696C16.3732 17.1206 15.9634 17.1206 15.5537 17.0186C15.2976 16.9165 14.939 16.8144 14.5293 16.6102C12.6854 15.8446 11.5073 14.0071 11.4049 13.854C11.3024 13.7519 10.6366 12.8842 10.6366 11.9654C10.6366 11.0467 11.0976 10.6383 11.2512 10.4342C11.4049 10.23 11.6098 10.23 11.7634 10.23C11.8659 10.23 12.0195 10.23 12.1219 10.23C12.2244 10.23 12.378 10.179 12.5317 10.5363C12.6854 10.8936 13.0439 11.8123 13.0951 11.8633C13.1463 11.9654 13.1463 12.0675 13.0951 12.1696C13.0439 12.2717 12.9927 12.3738 12.8902 12.4758C12.7878 12.5779 12.6854 12.7311 12.6341 12.7821C12.5317 12.8842 12.4293 12.9863 12.5317 13.1394C12.6341 13.3436 12.9927 13.905 13.5561 14.4154C14.2732 15.0279 14.8366 15.2321 15.0415 15.3342C15.2463 15.4363 15.3488 15.3852 15.4512 15.2831C15.5537 15.1811 15.9122 14.7727 16.0146 14.5686C16.1171 14.3644 16.2707 14.4154 16.4244 14.4665C16.578 14.5175 17.5 14.9769 17.6537 15.079C17.8585 15.1811 17.961 15.2321 18.0122 15.2831C18.0634 15.4363 18.0634 15.7936 17.9098 16.2019Z"
																	fill="white" />
															</svg>
														</a>
													</li>
												<?php endif; ?>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
				<?php if ($time): ?>
					<div class="contacts__box">
						<h3 class="contacts__title title-2">Время работы</h3>
						<div class="contacts__descr descr">
							<?php echo wp_kses_post($time) ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if ($emails): ?>
					<div class="contacts__box">
						<h3 class="contacts__title title-2">Email</h3>
						<ul class="contacts__list">
							<?php foreach ($emails as $item): ?>
								<li class="contacts__item">
									<a class="contacts__link contacts__link--email"
										href="mailto:<?php echo esc_attr($item['contacts_emails_email']) ?>">
										<?php echo esc_html($item['contacts_emails_email']) ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
			</div>
			<div class="contacts__payment">
				<?php if ($payment): ?>
					<div class="contacts__box">
						<h3 class="contacts__title title-2">Реквизиты</h3>
						<div class="contacts__descr descr">
							<?php echo wp_kses_post($payment) ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>