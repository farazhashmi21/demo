 <!DOCTYPE html>
<html lang="en-US">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="author" content="INSPIRO" />
<meta name="description" content="Themeforest Template Polo, html template">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title><?php bloginfo('name'); ?></title>

<link href="<?php echo get_template_directory_uri(); ?>/css/plugins.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
</head>
<body>
<div class="body-inner">

<header id="header" data-transparent="true" data-fullwidth="true" class="dark submenu-light">
<div class="header-inner">
<div class="container">

<div id="logo"> <a href="<?php bloginfo('url'); ?>"><span class="logo-default"><?php bloginfo('name'); ?></span><span class="logo-dark"><?php bloginfo('name'); ?></span></a> </div>


<div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
<form class="search-form" action="search-results-page.html" method="get">
<input class="form-control" name="q" type="text" placeholder="Type & Search..." />
<span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
</form>
</div> 

<div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>


<div id="mainMenu">
<div class="container">
<nav>
  <?php 
  $wpnavmenu = (array('container' => false));
   wp_nav_menu($wpnavmenu);
   ?>
</nav>
</div>
</div>

</div>
</div>
<?php wp_head(); ?>
</header>