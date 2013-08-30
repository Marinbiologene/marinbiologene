<?php get_header(); ?>

<div class="row">
  <div class="span12">
	<div style= "max-width: 750px;">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
</ br>		
<hr>
		<p><i class="icon-edit"></i> : <em><?php the_time('d/m - Y'); ?></em> (av <strong><?php the_author(); ?></strong>).</p>
<hr>
	  	<?php the_content(); ?>
<?php if( function_exists( do_sociable() ) ){ do_sociable(); }?>

<a href="http://www.kelp-forest.com/marinbiologene/?page_id=25"><button type="submit" class="btn btn-inverse pull-right"><i class="icon-rotate-left"></i> Tilbake </button><a>
	  	<hr>
		<?php comments_template(); ?>
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>
	</div>
  </div>
</div>

<hr>
<?php get_footer(); ?>

