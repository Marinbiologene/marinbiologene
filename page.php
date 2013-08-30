<?php get_header(); ?>


<div class="row">
  <div class="span6">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Beklager, Marinbiologene kan ikke finne denne siden.'); ?></p>
	<?php endif; ?>

  </div>
  <div class="span6">
	<?php get_sidebar(); ?>	
  </div>
</div>


<?php get_footer(); ?>
