<?php get_header(); ?>

	<section class="archive-info list-information">
		<span>
			<?php
				if(is_day()) {
					printf('Archiv: %s', get_the_date());
				}
				elseif(is_month()) {
					printf('Archiv: %s', get_the_date('F Y'));
				}
				elseif(is_year()) {
					printf('Archiv: %s', get_the_date('Y'));
				}
				else {
					printf('Archiv: Ups, Fehler...');
				}
			?>
		</span>
	</section>
	<?php get_template_part('template-parts/post/list'); ?>
<?php get_footer(); ?>
