<?php get_header(); ?>

	<section class="author-info list-information">
		<span>Alles von <?php the_author(); ?></span>
	</section>
	<?php get_template_part('template-parts/post/list'); ?>

<?php get_footer(); ?>
