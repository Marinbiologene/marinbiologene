<?php get_header(); ?>

<!-- To crop content at container borders -->
<style>  
div
{
overflow:hidden;
} 
</style>

<!--Statement-->
<div class="row">
  <div class="span6">
<p><i class="icon-quote-left icon-2x pull-left icon-muted"></i><em>Innholdet i marinbiobloggen er personlige meninger ytret av forfatterne, og reflekterer ikke standpunkt institusjoner forfatterne er tilknyttet måtte ha.</p>
</em>
<p><i class="icon-lightbulb icon-3x pull-left icon-muted"></i>Lyst til å skrive et innlegg om marinbiologi? Ta kontakt og fortell litt om din idé!</p>
  </div>
</div>

<!-- Post exerpt-->
<div class="row">
  <div class="span6">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
</br>
	<div class="container-fluid">
	<?php the_content('<button type="submit" class="btn btn-inverse pull-right">Les videre »</button>'); ?> 
	
	</div>
</br>

<!-- Post info -->
<div class="container-fluid well">
	
	     <p><i class="icon-edit"></i> : <em><?php the_time('d/m - Y'); ?></em> (av <strong><?php the_author(); ?></strong>).</br>
		<i class="icon-folder-open"></i> : <?php
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
		<?php the_tags( '<i class="icon-tags"></i> : ', ',' ); ?>  </br>
		<i class="icon-comments-alt"></i> : <?php comments_number('Ingen', '1 kommentar','% kommentarer'); ?></p>

</div>


    <hr>

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

<a href="http://www.kelp-forest.com/marinbiologene/?page_id=25"><button type="submit" class="btn btn-inverse pull-right"><i class="icon-rotate-left"></i> Tilbake </button><a>
</br>
<hr>

  </div>
  <div class="span6">
    <?php get_sidebar(); ?>   
  </div>
</div>

<?php get_footer(); ?>
