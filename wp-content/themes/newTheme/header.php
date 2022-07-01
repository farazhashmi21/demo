<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?> >> <?php bloginfo('description'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>	<?php wp_head(); ?>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-center">
		<?php
		$defaults = array(
			'menu'                 => '',
			'container'            => '',
			'container_class'      => '',
			'container_id'         => '',
			'container_aria_label' => '',
			'menu_class'           => 'menu navbar-nav',
			'menu_id'              => '',
			'echo'                 => true,
			'fallback_cb'          => 'wp_page_menu',
			'before'               => '',
			'after'                => '',
			'link_before'          => '',
			'link_after'           => '',
			'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'item_spacing'         => 'preserve',
			'depth'                => 0,
			'walker'               => '',
			'theme_location'       => 'header-menu' 
		);
		  wp_nav_menu($defaults);
		  ?>
	</nav>
