

<div class="container-fluid">
<div class="row-fluid">
  <div class="span3">
   
   <div class="well sidebar-nav sidebar-nav-fixed">

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	<?php endif; ?>

   </div><!--/.well -->
 </div><!--/span-->
</div><!--/row-->

</div><!--/.fluid-container-->	

<div class="row-fluid">
	<?php display_gsc_results(); ?>
</div><!--/row-->

