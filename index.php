<?php get_header(); ?>

<div class="container">
<div class="row">

  <div class="col-md-8">

	<!-- Post info -->
	<div class="row">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  <h1><?php the_title(); ?></h1>
           <p><i class="icon-time"></i> <em><?php the_date(); ?></em></p>	
	</div>


		<!-- Content -->
		<div class="row">
           <p><?php the_content(); ?></p>
		
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
		</div>	
		
		<!-- Donations -->
		<div class="row">
		<hr>
        <p>Synes du vi gjør en god jobb? Du kan støtte arbeidet:</p>
        <span>
		<p>
		<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6WSFSHM626UAQ" style="text-decoration:none;">
		<i class= "icon-heart icon-2x"></i>&nbsp10&nbspkr </a> 
		<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=55822HMWRD7L4" style="text-decoration:none;">
		<i class= "icon-heart icon-2x"></i><i class= "icon-heart icon-2x"></i>&nbsp20&nbspkr </a>
		<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7XJBKA62DNCNS" style="text-decoration:none;">
		<i class= "icon-heart icon-2x"></i><i class= "icon-heart icon-2x"></i><i class= "icon-heart icon-2x"></i>&nbsp30&nbspkr </a>
		</p>
		</span>
		</div>
		
		<!-- Comments -->
		<div class="row">
		<p><?php comments_template(); ?></p>	
		</div>	
		
  </div> <!-- col-md-8-->

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


