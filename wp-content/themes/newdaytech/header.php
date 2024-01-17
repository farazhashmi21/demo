<!DOCTYPE html>
<html <?php language_attributes('html'); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        <meta name="author" content="<?php the_author(); ?>" />
        <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo get_template_directory_uri(); ?>/css/styles.css" rel="stylesheet" />
        <?php wp_head(); ?>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="text-center">
                    <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico" alt="favicon.ico" />
                    <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
            </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <?php wp_nav_menu(
                        array(
                            'menu_class'=> 'navbar-nav ms-auto mb-2 mb-lg-0',
                            'theme_location' => 'primary',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'navbarSupportedContent'
                        )
                    ); ?>
            </div>
        </nav>
        <!-- Header - set the background image for the header in the line below-->
        <header class="header-block-element py-5 bg-image-full" style="                background-image: url('<?php echo get_template_directory_uri();?>/assets/images/header.png')">
            <div class="py-5 bg-image-full ">
                    <div class="main-header">
                    <h1 class="text-dark bg-light fs-3 fw-bolder smart-heading "><?php bloginfo('name'); ?></h1>
                    <p class="text-white mb-0 badge bg-success"><?php bloginfo('description'); ?></p>
                </div>
            </div>
        </header>
