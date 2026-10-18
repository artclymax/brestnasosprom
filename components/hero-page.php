<?php
$slug = get_query_var('post_type');
$page = get_page_by_path($slug);

$title = '';

if (is_singular('news')) {
	$post_type = get_post_type_object('news');
	$title = $post_type->labels->name; // "Новости"
} elseif (is_singular()) {
	$title = get_field('hero_title') ?: get_the_title();
} elseif ($page) {
	$title = get_field('hero_title', $page) ?: $page->post_title;
}
?>
<section class="hero-page" id="hero-page">
	<div class="container hero-page__container">
		<h1 class="hero-page__title title-1">
			<?php echo esc_html($title) ?>
		</h1>
	</div>
</section>