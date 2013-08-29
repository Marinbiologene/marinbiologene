<?php get_header(); ?>

<!-- To crop content at container borders -->
<style>  
div
{
overflow:hidden;
} 
</style>

<!-- Post exerpt-->
<div class="row">
  <div class="span6">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
</br>
	<div class="container-fluid">
	<?php the_content('<button type="submit" class="btn btn-inverse pull-right">Les videre »</button>',$stripteaser); ?> 
	
	</div>
</br>

<!-- Post info -->
<div class="container-fluid well">
	
	     <p>Publisert: <em><?php the_time('d/m - Y'); ?></em> (av <strong><?php the_author(); ?></strong>).</br>
		Kategori: <?php
				$categories = get_the_category();
				$separator = ' ';
				$output = '';
					if($categories){
					foreach($categories as $category) 					{
				$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
				}
				echo trim($output, $separator);
				}
			?></br>
		<?php the_tags( 'Merkelapper: ', ',' ); ?>  </br>
		Antall kommentarer: <?php comments_number('Ingen', '1 kommentar','% kommentarer'); ?></p>

</div>


    <hr>

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

  </div>
  <div class="span6">
    <?php get_sidebar(); ?>   
  </div>
</div>

<?php get_footer(); ?>
