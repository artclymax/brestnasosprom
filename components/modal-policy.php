<?php
$page = 'options';

$title = get_field('modal_policy_title', 'options') ?? '';
$descr = get_field('modal_policy_descr', 'options') ?? '';
?>
<div class="modal" id="privacy-policy" data-modal>
	<div class="modal__box modal-policy__box" data-modal-box>
		<button class="modal-policy__close-btn modal__close-btn modal-close-btn" data-modal-close aria-label="Закрыть">
			<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M16 16L29 29M16 16L3 3M16 16L3 29M16 16L29 3" stroke="url(#paint0_linear_2029_2863)"
					stroke-width="3" stroke-linecap="round" />
				<defs>
					<linearGradient id="paint0_linear_2029_2863" x1="29" y1="3.00001" x2="1.71611" y2="4.42546"
						gradientUnits="userSpaceOnUse">
						<stop stop-color="#E8C25F" />
						<stop offset="0.505208" stop-color="#E3D282" />
						<stop offset="1" stop-color="#D3A647" />
					</linearGradient>
				</defs>
			</svg>
		</button>
		<div class="modal__body">
			<h3 class="modal__title title-first">
				<?php echo esc_html($title) ?>
			</h3>
			<div class="modal__descr-box descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
		</div>
	</div>
</div>