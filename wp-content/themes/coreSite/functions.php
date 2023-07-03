<?php
function coresite_theme_setup(){
	// phpinfo();
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary menu', 'coresite' ),
			'footer'  => esc_html__( 'Secondary menu', 'coresite' ),
		));
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(auto, auto);
}
add_action('init', coresite_theme_setup);
?>
