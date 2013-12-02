<?php get_header(); ?>

<div class="container">
<div class="row">

<!-- main content --> 
<div class="col-md-8">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	
			<!-- Post info -->

			<div class="well"> 	
				<p><i class="icon-time"></i> <em><?php the_date(); ?></em></br>
					<i class="icon-folder-open"></i> <?php
							$categories = get_the_category();
							$separator = ', ';
							$output = '';
								if($categories){
								foreach($categories as $category) 					{
							$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
							}
							echo trim($output, $separator);
							} ?></br>
					<i class="icon-tags"></i> <?php the_tags( ' ', ', ' ); ?>  </br>
					<i class="icon-comments-alt"></i> <?php comments_number('Ingen', '1 kommentar','% kommentarer'); ?>	
				</p>
			</div> <!-- well -->


		    <p><?php the_content('Les videre <i class="icon-play-circle icon-large"></i>'); ?>			
			</br><hr></p>
			<?php endwhile; else: ?>
			  <p><?php _e('Beklager, ingen treff.'); ?></p>
			<?php endif; ?>
			<?php next_posts_link('Eldre poster'); ?>
			<?php previous_posts_link('Nyere poster'); ?>

	<!--Back button-->
	<span><a href="http://marinbiologene.wpengine.com/blogg/" class="btn btn-primary pull-right"><i class="icon-rotate-left"></i> Tilbake </a></span>
		
</div><!-- col-md- (8) -->

<!-- sidebar -->

  <div class="col-md-4">
  <div class="affix-nav hidden-sm hidden-xs">
    <?php get_sidebar(); ?>   
  </div>
  </div>

</div> <!-- row main -->
</div> <!-- container main -->
	
<div class="container">
	<!-- Archive -->

		<h2>Arkiv</h2>


	<div class="row">
		<div class="col-md-4">
			<h3>Etter dato:</h3>
			<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
	  		<option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
					  <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
			</select>
		</div> <!-- col-md- -->

		<div class="col-md-4">		
			<h3>Etter emne:</h3>
			<ul>
				 <?php wp_list_categories(); ?>
			</ul>
		</div> <!-- col-md- -->
	</div> <!-- row -->

</div> <!-- container archive-->

<!-- footer -->
<div class="container">
<div class="row">
<div class="col-md-8"> <!-- ends in footer -->
	<?php get_footer(); ?>
	
