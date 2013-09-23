<!DOCTYPE html> 
<html lang="en">

<head>
	<!-- Explorer compability -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	
	<!-- mobile intitial scale -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
	
	<!-- tab tiltle -->
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
<div class="container">  
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
 
    <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <?php wp_list_pages(array('title_li' => '', 'exclude' => '4,5,37,38')); ?>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blogg <b class="caret"></b></a>
        <ul class="dropdown-menu">
                        <li><a href="http://marinbiologene.wpengine.com/blogg">Marinbiobloggen</a></li>
                        <li><a href="http://blog.marinbiologene.no" target="_blank">Gammel blogg</a></li>

        </ul>
      </li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      					<li><a href="https://twitter.com/marinbiologene"><i class="icon-twitter icon-large"></i></a></li>
      					<li><a href="https://www.facebook.com/groups/103107709727700/"><i class="icon-facebook icon-large"></i></a></li>
      					<li><a href="http://feeds.feedburner.com/marinbiobloggen"><i class="icon-rss icon-large"></i></a></li>
    </ul>    
    
  </div><!-- /.navbar-collapse -->
</div><!-- container -->
</nav>

<div class="container">
<div class="row">
<div class="col-md-8">
<!-- LOGO -->
<img alt="" src="http://marinbiologene.wpengine.com/wp-content/uploads/2013/09/MBlogo.gif" style="img-responsive">
</div>
<div class="col-md-4">
<p><i class="icon-exclamation-sign icon-large icon-muted pull-left"></i><em> Denne siden vises best i <a href="https://www.google.com/intl/en/chrome/">Chrome</a> eller <a href="http://www.mozilla.org/en-US/firefox/fx/#desktop">Mozilla Firefox</a></em></p>
</div>
</div>
</div>

