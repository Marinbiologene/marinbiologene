<?php get_header(); ?>

<!-- Content -->
<div class="container">
<div class="row">
	<div class="col-md-4">
	<a href="http://marinbiologene.wpengine.com/blogg" style="text-decoration:none;">
	<i class="icon-bullhorn icon-4x pull-left"></i>
	<h2>Bloggen vår</h2></a>
	<p>På <strong>marinbiobloggen</strong> skriver vi om havet og saker vi mener det er verdt å snakke om. Vi sprer kunnskap ved å fortelle merkelige, spennende, fine og triste historier fra havet, havforskning og havforvaltning.</p>
	</div> <!-- col-md-4 -->

	<div class="col-md-4">
	<a href="http://grontnapp.no/" style="text-decoration:none;" target="_blank">
	<i class="icon-thumbs-up icon-4x pull-left"></i>
	<h2>Grønt NAPP</h2></a>
	<p>App som hjelper deg med å velge <strong>bærekraftig sjømat</strong>. Listen inneholder arter delt inn i grønn, oransje og rød liste. Vi har lagt inn bilder og info om art og eventuell miljømerking. <strong>Velg riktig, velg grønt!</strong></p>
	</div> <!-- col-md-4 -->

	<div class="col-md-4">
	<a href="http://marinbiologene.wpengine.com/galleri" style="text-decoration:none;">
	<i class="icon-picture icon-4x pull-left"></i>
	<h2>Galleri</h2></a>
	<p>I galleriet kan du se flotte bilder av livet som befinner seg under havoverflaten. Bildene er sendt inn av lesere. Vi putter gjerne inn flere, - så send dine egne blinkskudd!</p>
	</div> <!-- col-md-4 -->
</div>
</div>

<!-- Main unit for front-page content -->

<div class="container hidden-xs">
<div class="row">
	<div class="col-md-12">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  	<?php the_content(); ?>

		<?php endwhile; else: ?>
			<p><?php _e('Uups, something is very wrong. Please contact me.'); ?></p>
		<?php endif; ?>
	
	</div>

	</div> <!-- col-md-12 -->
</div> <!-- /row -->
</div> <!-- /container -->


<!-- Personal stuff -->
<div class="container">

<div class="row">
	<div class="col-md-4">
		<i class="icon-heart-empty icon-4x pull-left"></i>
		<h2>Støtt oss</h2>
		<p>Vi som står bak www.marinbiologene.no bruker vår fritid og egene penger på å oprettholde siden. Dersom du setter pris på vårt innhold er det fint om du støtter prosjektet:</p>
		<span align="center">
		<p>
		<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QY8THVZP2HY92" style="text-decoration:none;">
		<i class= "icon-coffee icon-2x"></i> 25kr </a> 
		<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9JGYKF9BEQWH6" style="text-decoration:none;">
		<i class= "icon-gift icon-2x"></i> 50kr </a>
		<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=N87F3V4LL76HU" style="text-decoration:none;">
		<i class= "icon-star icon-2x"></i> 200kr </a>
		</p>
		</span>
	</div> <!-- col-md- -->

	<div class="col-md-4">
	<i class="icon-smile icon-4x pull-left"></i>
	<h2>Fjas</h2>
	<p>Sjekk ut våre marine quizer da vel :)
	<ul>
		<li><a href="http://www.aftenposten.no/quiz/?id=13102" target="_blank">Quiz om marint søppel</a></li>
		<li><a href="http://tjenester.aftenposten.no/quiz/quiz.htm?method=start&amp;id=12233" target="_blank">Havbruk og oppdrettsquiz</a></li>
		<li><a href="http://www.facebook.com/l.php?u=http%3A%2F%2Ftjenester.aftenposten.no%2Fquiz%2Fquiz.htm%3Fid%3D12030&amp;h=551b1" target="_blank">Havforsuringsquiz</a></li>
	</ul>
	</p>
	</div> <!-- col-md- -->
	
</div> <!-- row -->
</div> <!-- container -->

<!-- footer -->
<div class="container">
<div class="row">
<div class="col-md-12"> <!-- ends in footer -->
		<?php get_footer(); ?>
	
