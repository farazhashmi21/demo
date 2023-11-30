<?php
function menu_register(){
	register_nav_menus(
		array(
			"primary_menu" => __("Primary", "classichub"),
			"footer_menu" => __("Footer", "classichub")
		));
}
add_action("init", 'menu_register');
?>