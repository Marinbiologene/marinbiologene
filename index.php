<?php get_header(); ?>

<div class="container">
<div class="row">

  <div class="col-md-8">

	<!-- Post info -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  <h1><?php the_title(); ?></h1>
           <p><i class="icon-time"></i> <em><?php the_date(); ?></em></p>	



		<!-- Content -->

           <p><?php the_content(); ?></p>
           </br>
           <p><em>Denne posten ble skrevet av: <?php the_author(); ?></em></p> 
		
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>

		
		<!-- Donations -->

		<hr>
        <p>Synes du vi gjør en god jobb? Du kan støtte arbeidet:</p>
        <span>
		<p>
		<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6WSFSHM626UAQ" style="text-decoration:none;">
		<i class= "icon-heart icon-2x"></i> 10kr </a> 
		<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=55822HMWRD7L4" style="text-decoration:none;">
		<i class= "icon-heart icon-2x"></i><i class= "icon-heart icon-2x"></i> 20kr </a>
		<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7XJBKA62DNCNS" style="text-decoration:none;">
		<i class= "icon-heart icon-2x"></i><i class= "icon-heart icon-2x"></i><i class= "icon-heart icon-2x"></i> 30kr </a>
		</p>
		</span>

		
		<!-- Comments -->

		<p><?php comments_template(); ?></p>	

		
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


