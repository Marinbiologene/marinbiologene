<?php get_header(); ?>

<div class="row">
  <div class="span8">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  <h1><?php the_title(); ?></h1>
           <p><i class="icon-edit"></i> : <em><?php the_date(); ?></em> (by <strong><?php the_author(); ?></strong>)</p>	
           <p><?php the_content(); ?></p>
		
	<?php endwhile; else: ?>
		<p><?php _e('Beklager, Marinbiologene kan ikke finne denne siden.'); ?></p>
	<?php endif; ?>
	
	<p><?php> comments_template(); ?></p>
</div>
  <div class="span4">
	<?php get_sidebar(); ?>	
  </div>
</div>

<?php get_footer(); ?>
