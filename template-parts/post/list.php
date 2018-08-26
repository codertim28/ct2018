<section class="blogpost-list">
   <?php while (have_posts()) : the_post(); ?>
      <article class="blogpost">
         <h2 class="title"> <a href="<?php the_permalink() ?>"><?php the_title(); ?> </a> </h2>
         <?php if (has_post_thumbnail()) : ?>
            <img class='thumbnail' src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>"/>
         <?php endif; ?>
         <?php
            the_content('weiterlesen &raquo;','','');
         ?>
         <div class="blogpost-meta">
               <?php the_category(', '); ?> &lowast; <?php the_time('j. F Y') ?>
         </div>
      </article> <!-- article -->
   <?php endwhile; ?>
   <?php show_pagination(); ?>
</section>
