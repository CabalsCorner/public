<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Theme</title>
        <?php wp_head(); ?>
    </head>

    <?php

    ?>

    <body <?php body_class(); ?>>

        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>

        <img src="<?php header_image(); ?>"
            height="<?php echo get_custom_header()->height; ?>"
            width="<?php echo get_custom_header()->width; ?>"
            alt=""
        />