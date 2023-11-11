<!DOCTYPE html>
<html <?php language_attributes("html"); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name")?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <header class="main-header">
        <h1><?php bloginfo("name")?></h1>
        <p><?php bloginfo("description")?></p>
    </header>
    <section>
        <nav>
            <?php wp_nav_menu(array("theme_location" => "primary_menu", "menu_class" => "navi")); ?>
        </nav>
