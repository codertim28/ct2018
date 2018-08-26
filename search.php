<?php get_header(); ?>

	<section class="list-information">
		<span>Suchergebnisse für: <?php echo $s ?></span>
	</section>
	<section class="blogpost-list">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php
				$auszug = get_the_excerpt();
				$suchwort = get_search_query();
				$auszug = str_replace($suchwort,'<span class="suchwort">' . $suchwort . '</span>', $auszug);
			?>
			<article class="blogpost">
	         <h2 class="title"> <a href="<?php the_permalink() ?>"><?php the_title(); ?> </a> </h2>
	         <?php if (has_post_thumbnail()) : ?>
	            <img class='thumbnail' src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>"/>
	         <?php endif; ?>
	         <p class='search-excerpt'><?php echo $auszug; ?></p>
	         <div class="blogpost-meta">
	               <?php the_time('j. F Y') ?>
	         </div>
	      </article> <!-- article -->
		<?php endwhile; endif; ?>
		<?php show_pagination(); ?>
		<?php if(have_posts() <= 0) : ?>
			<div class="no-search-result">
				<span class="animated-slow change-font-color-red"> :( </span>
				<h2> Nichts gefunden... </h2>
				<p> Leider gibt es nichts, was zu deiner Suchanfrage passt. </p>
			</div>
		<?php endif; ?>
	</section>

 <?php get_footer(); ?>
