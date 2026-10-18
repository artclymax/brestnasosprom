<?php
$page = 'options';

$copy = get_field('footer_copy', $page) ?? get_bloginfo('name');
$links = get_field('footer_links', $page) ?? '';
?>
<footer class="footer">
	<div class="footer__container container">
		<div class="footer__logo logo visible-tablet">
			<?php mx_logo(); ?>
		</div>
		<div class="footer__info">

			<?php if ($links):
				foreach ($links as $item): ?>
					<a class="footer__link" href="<?php echo esc_attr($item['footer_links_link']['url']) ?>">
						<?php echo esc_html($item['footer_links_link']['title']) ?>
					</a>
				<?php endforeach; endif; ?>
			<small class="footer__copy">
				&copy; <span><?php echo date('Y') ?></span> <?php echo esc_html($copy) ?>
			
			</small>
		</div>
	</div>
</footer>

