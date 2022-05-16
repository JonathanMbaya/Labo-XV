<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Feuilles de style -->
    <link rel="stylesheet" href="style.css">


    <!-- Link vers les polices du site -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ruda&display=swap" rel="stylesheet">

    <!-- Logo icon -->
    <link href="<?php echo get_template_directory_uri(); ?>/img/logo.png" rel="icon">

    <title> <?php the_title(); ?> </title>


    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<header>

<nav  class ="navbar navbar-expand-md navbar-light">


    <button class="navbar-toggler pull-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span>Menu</span>
        <span class="navbar-toggler-icon"></span>
    </button>

        <div  class ="collapse navbar-collapse menu" id="navbarSupportedContent" >
            <?php

                wp_nav_menu ( array (
                    'theme_location' => 'main',
                    'container' => false ,
                    'menu_class' => 'menu' ,
                    'fallback_cb' => '__return_false' ,
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                    'profondeur' => 2 ,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));

            ?>
        </div >
</nav >