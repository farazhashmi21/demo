<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?> || <?php bloginfo('description'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/style.css'; ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>
	<?php 
	$args = array(
	'menu_class'        => "nav justify-content-center", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
	'theme_location'    => "primary", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
	'menu'              => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
	// 'before'            => "", // (string) Text before the link markup.
	// 'items_wrap'        => "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
	// 'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
	// 'container'         => "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
	// 'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
	// 'container_id'      => "", // (string) The ID that is applied to the container.
	// 'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
	// 'after'             => "", // (string) Text after the link markup.
	// 'link_before'       => "", // (string) Text before the link text.
	// 'link_after'        => "", // (string) Text after the link text.
	// 'echo'              => "", // (bool) Whether to echo the menu or return it. Default true.
	// 'depth'             => "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
	// 'walker'            => "", // (object) Instance of a custom walker class.
	// 'item_spacing'      => "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
	);
//	wp_nav_menu();
	wp_nav_menu($args);
	?>
<!-- <ul class="nav justify-content-center">
  <li class="nav-item"><a class = "nav-link" href="http://127.0.0.1/demo">Home</a></li>
  <li class="nav-item"><a class = "nav-link"  href="http://127.0.0.1/demo/about">About</a></li>
  <li class="nav-item"><a class = "nav-link"  href="http://127.0.0.1/demo/servicea">Services</a></li>
  <li class="nav-item"><a class = "nav-link"  href="http://127.0.0.1/demo/contact">Contact</a></li>
</ul>  -->
