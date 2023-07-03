<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!-- <title>Core Site</title> -->
	<title><?php bloginfo('name'); ?> >> <?php bloginfo('description'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css"/>
</head>
<body onLoad = "displ();">
	<!-- Header Start -->
<div class="grid-header">
	<div class="grid-items-header">
		<p id="logoElement">cS</p>
	</div>
	<div class="grid-items-header" id="logo-grid-span">
		<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		<p><?php bloginfo('description'); ?></p>
	</div>
</div>
<!-- Header End -->
<!-- Navigation File Add Start -->
<?php
  require('main-nav-links.php');
?>
<!-- Navigation File Add End -->
<!-- Hero Section Start -->
<div class="hero-section">
	<h2>Core Site</h2>
</div>
<!-- Hero Section End -->
