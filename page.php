<?php get_header(); ?>

<div class="container">
<div class="row">
  <div class="col-md-8">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>
  </div>
  
<!-- sidebar -->

  <div class="col-md-4">
  <div class="affix-nav hidden-sm hidden-xs">
    <?php get_sidebar(); ?>   
  </div>
  </div>
  
</div>  
</div>

<!-- footer -->
<div class="container">
<div class="row">
<div class="col-md-8"> <!-- ends in footer -->
	<?php get_footer(); ?>


