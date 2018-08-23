<?php get_header(); ?>

	<article class="blogpost">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <?php $postDate = get_the_date('d. F Y'); ?>
         <span class="post-date"> <?php echo $postDate ?> </span>
         <!-- TODO: h2 -> h1 ? -->
         <h2><?php the_title(); ?></h2>
			<?php if(has_post_thumbnail()) : ?>
				<img class='thumbnail' src="<?php the_post_thumbnail_url('full'); ?>" alt="[Thumbnail] <?php the_title(); ?>"/>
			<?php endif; ?>
			<div id="anti-blocker"></div>
			<?php the_content(); ?>
         <div class="blogpost-meta">
				<p>
					<?php echo $postDate; ?> von <?php the_author_posts_link(); ?> |
					Kategorie: <?php the_category(', '); ?> <?php the_tags('<br/>Schlagwörter: ', ' // ', ''); ?>
				</p>
			</div>
		<?php endwhile; endif; ?>
	</article><!-- article -->
	<?php comments_template(); ?>

<?php get_footer(); ?>
