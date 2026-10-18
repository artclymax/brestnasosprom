<?php
$page = 'options';
$descr_left = get_field('general_hero_descr_left', $page) ?? '';
$descr_right = get_field('general_hero_descr_right', $page) ?? '';
?>
<section class="hero" id="hero">
	<div class="container hero__container">
		<h1 class="hero__title title-1 visible-tablet"><?php the_title() ?></h1>
		<div class="hero__descr-left descr hidden-tablet title-1">
			<?php echo wp_kses_post($descr_left) ?>
		</div>
		<div class="hero__logo logo hidden-tablet">
			<?php mx_logo(); ?>
		</div>
		<div class="hero__descr-right descr hidden-tablet title-1">
			<?php echo wp_kses_post($descr_right) ?>
		</div>
	</div>
</section>