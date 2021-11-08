<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Thahiti
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'UTF-8' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-lg">
                <a class="navbar-brand" href="#">
                    <img src="<?php the_field( 'header_logo' ); ?>" alt="logo">
                    <?php bloginfo( 'name' ); ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false"">
                    <span class=" navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                    <!-- <ul class="navbar-nav mr-auto mb-2">
                        <li class="nav-item">
                            <a class="nav-link active"  aria-current="page" href="#discover">discover</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experience">experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#travelguides">travel guides</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">about</a>
                        </li>
                    </ul> -->
					<?php wp_nav_menu (array (
						'Theme_location' 	=> 'menu-1',
						'menu_id'			=> 'primary_menu',
                        'menu_class'        => 'navbar-nav mr-auto mb-2',
						'container_id' 		=> 'navbarContent',
						'container_class' 	=> 'collapse navbar-collapse', 
					) ) ?>
            </div>
        </nav>
        <div class="slider-header">
            <div class="slider__item">
                <img src="<?php the_field( 'header_slide_one' ); ?>" alt="slide1">
            </div>
            <div class="slider__item">
                <img src="<?php the_field( 'header_slide_two' ); ?>" alt="slide2">
            </div>
            <div class="slider__item">
                <img src="<?php the_field( 'header_slide_three' ); ?>" alt="slide3">
            </div>
            <div class="slider__item">
                <img src="<?php the_field( 'header_slide_four' ); ?>" alt="slide4">
            </div>
        </div>
        <div class="header__title">
            <div class="header__title-main">
                <span class="titile-main__bold"><?php the_field( 'header_main_title_bold' ); ?></span><?php the_field( 'header_main_title' ); ?>
            </div>
            <div class="header__title-text">
                <?php the_field('header_subtitle'); ?>
            </div>
        </div>
    </header>
