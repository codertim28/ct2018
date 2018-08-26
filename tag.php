<?php get_header(); ?>

	<section class="tag-info list-information">
		<span>Schlagwort: <?php single_tag_title(); ?> </span>
	</section>
	<?php get_template_part('template-parts/post/list'); ?>
<?php get_footer(); ?>
