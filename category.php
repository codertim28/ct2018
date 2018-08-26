<?php get_header(); ?>

	<section class="category-info list-information">
		<span>Kategorie: <?php single_cat_title(); ?></span>
	</section>
	<?php get_template_part('template-parts/post/list'); ?>
<?php get_footer(); ?>
