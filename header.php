<head>

<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />

    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        <div class="nav-collapse collapse">
          <ul class="nav">

              <?php wp_list_pages(array('title_li' => '', 'exclude' => '6,25')); ?>
		<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blogg <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                         <li><a href="http://www.kelp-forest.com/marinbiologene/?page_id=25">Ny</a></li>
                         <li><a href="http://blog.marinbiologene.no" target="_blank">Gammel</a></li>
                    </ul>
                 </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <div class="container">

