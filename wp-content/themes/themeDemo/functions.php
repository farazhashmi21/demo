<?php
function themedemo_setup() {
	register_nav_menus(
		array(
			'primary' => __( 'Primary Navigation', 'themedemo' ),
			'secondary' => __( 'Secondary Navigation', 'themedemo' )
	));
	}
	add_action( 'init', 'themedemo_setup' );
