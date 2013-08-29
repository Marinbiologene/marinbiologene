

<!--  NYHETSHJUL - 
      consult the Twitter Bootstrap docs at http://twitter.github.com/bootstrap/javascript.html#carousel -->

<div class="row-fluid">
<div class="span12">

<div id="nyhetshjul" class="carousel slide"><!-- class of slide for animation -->
  <div class="carousel-inner">
    <div class="item active"><!-- class of active since it's the first item -->
      <img src="http://www.kelp-forest.com/marinbiologene/wp-content/uploads/2013/08/DSC00149-e1377550062229.jpg" alt="" />
      <div class="carousel-caption">
        <h2>Siste nytt</h2>
        <p>Les om anemoner og pirater i det siste innlegget på marinbiobloggen</p>
      </div>
    </div>
    <div class="item">
      <img src="http://www.kelp-forest.com/marinbiologene/wp-content/uploads/2013/08/DSC00130-e1377550636541.jpg" alt="" />
      <div class="carousel-caption">
        <p>Caption text here</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x480" alt="" />
      <div class="carousel-caption">
        <p>Caption text here</p>
      </div>
    </div>
    
       <?php 
         $the_query = new WP_Query(array(
         'category_name' => 'Nyhetshjul', 
         'posts_per_page' => 5
       )); 
       while ( $the_query->have_posts() ) : 
       $the_query->the_post();
       ?>
      <div class="item">
         <?php the_post_thumbnail('large');?>
         <div class="carousel-caption">
         <h4><?php the_title();?></h4>
         <p><?php the_excerpt();?></p>
    	</div>
      </div><!-- item -->

	<?php 
	 endwhile; 
	 wp_reset_postdata();
	?>

  </div><!-- /.carousel-inner -->
<!--  Next and Previous controls below
      href values must reference the id for this carousel -->

    <a class="carousel-control left" href="#nyhetshjul" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#nyhetshjul" data-slide="next">&rsaquo;</a>

</div><!-- /.carousel -->

</div><!-- /.span -->
</div><!-- /.row -->
