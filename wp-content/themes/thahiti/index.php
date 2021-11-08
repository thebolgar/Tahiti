<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Thahiti
 */

get_header();
?>

<section class="discover" id="discover">
        <div class="container-xxl">
            <div class="row">
                <div class="col-12">
                    <h2 class="discover__title title text-uppercase mb-1"><span class="title__bold"><?php the_field('discover_title_bold'); ?></span><?php the_field('discover_title'); ?></h2>
                </div>
                <div class="title-text discover__title-text col-12 mb-5">
                <?php the_field('discover_subtitle'); ?>
                </div>
            </div>
            <div class="row">
                <?php 
                    $args = array (
                        'post_type'     =>  'island',
                        'showposts'     =>  4,
                        'include'       =>  '74,75,76,77'
                    );
                    $p = get_posts ($args );
                    foreach ( $p as $post ) {
                        setup_postdata( $post );
                    
                ?>
                <div class="discover__col col-lg-3 col-sm-6 gy-3">
                    <div class="col-inner">
                        <a data-fancybox="island_img_fancy" href="<?php the_field( 'discover_block_img' ) ?>">
                        <img class="discover__img" src="<?php the_field( 'discover_block_img' ) ?>" alt="">
                        </a>
                        <div class="col-inner__block">
                            <div class="col-inner__block-title">
                                <?php the_title(); ?>
                            </div>
                            <div class="col-inner__block-text">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="col-inner__btn  role="button">
                            <div class="col-inner__btn-text">
                                <span class="btn-text__light"><?php the_field('discover_button_text_price_from'); ?></span> <?php the_field('discover_price'); ?>
                            </div>
                            <img src="<?php the_field('discover_button_arrow_img') ?>" alt="">
                        </a>
                    </div>
                </div>
                <?php } wp_reset_postdata(); ?>
            
               
            </div>
            <div class="dropdown__title">
                <?php the_field('discover_dropdown_title'); ?>
            </div>
            <div class="dropdown">
                <button class="btn dropdown-toggle" data-bs-display="static" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <?php the_field('discover_dropdown_input_field_text'); ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <!-- <li><a class="dropdown-item" href="#">Tahiti</a></li>
                    <li><a class="dropdown-item" href="#">Bora Bora</a></li>
                    <li><a class="dropdown-item" href="#">Moorea</a></li>
                    <li><a class="dropdown-item" href="#">Huahine</a></li>
                    <li><a class="dropdown-item" href="#">Raiatea</a></li>
                    <li><a class="dropdown-item" href="#">Taha'a</a></li>
                    <li><a class="dropdown-item" href="#">Rangiroa</a></li>
                    <li><a class="dropdown-item" href="#">Tikehau</a></li>
                    <li><a class="dropdown-item" href="#">Fakarava</a></li>
                    <li><a class="dropdown-item" href="#">Tetiaroa</a></li>
                    <li><a class="dropdown-item" href="#">Manihi</a></li>
                    <li><a class="dropdown-item" href="#">Marquesas</a></li>
                    <li><a class="dropdown-item" href="#">Australs</a></li> -->
                    <?php 
                    $args = array (
                        'post_type'     =>  'island',
                        'showposts' =>  13,
                        
                    );
                    $p = get_posts ($args );
                    foreach ( $p as $post ) {
                        setup_postdata( $post );
                    
                ?>
                    <li><a class="dropdown-item" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

                <?php } wp_reset_postdata(); ?>
                </ul>
                <button type="button" class="btn btn-success"><?php the_field('discover_dropdown_buttton'); ?></button>
            </div>
            
        </div>
    </section>


    <section class="more" id="experience" style="background-image: url('<?php the_field('experience_bg-img'); ?>');">
        <img src="assets/img/more__decor.png" alt="" class="more__decor">
        <div class="container-lg">
            <div class="more__inner">
                <div class="row">
                    <div class="col-12">
                        <h2 class="more__title title text-uppercase mb-1"><span class="title__bold"><?php the_field('experience_title_bold'); ?></span> <?php the_field('experience_title'); ?></h2>
                    </div>
                    <div class="col-12 more__title-text title-text">
                        <?php the_field('experience_subtitle'); ?>
                    </div>
                </div>
                <div class="more__text">
                <?php the_field('experience_text'); ?>

                </div>
                <button type="button" class="more__btn"><?php the_field('experience_button_text'); ?></button>
            </div>
        </div>
    </section>


    <section class="why">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <h2 class="why__title title text-uppercase mb-3"><span class="title__bold"><?php the_field( 'why_title_bold' ); ?></span> <?php the_field( 'why_title' ); ?></h2>
                </div>
            </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-12 gy-4 why__col">
                    <?php the_field( 'why_title_column_one' ); ?>
                    </div>
                    <div class="col-lg-4 col-sm-12 gy-4 why__col">
                    <?php the_field( 'why_title_column_two' ); ?>
                    </div>
                    <div class="col-lg-4 col-sm-12 gy-4 why__col">
                    <?php the_field( 'why_title_column_three' ); ?>
                    </div>
                </div>
        </div>
    </section>


    <section class="book" id="travelguides" style="background-image: url('<?php the_field('travel_guides_background_img'); ?>');">
        <div class="container-lg">
            <div class="book__decor">
                <div class="book__inner">
                    <h2 class="h2 book__title"><?php the_field( 'travel_guides_title' ); ?></h2>
                    <div class="book__text"><?php the_field( 'travel_guides_subtitle' ); ?></div>
                    <button class="btn book__btn"><?php the_field( 'travel_guides_text_button' ); ?></button>
                </div>
            </div>
        </div>
    </section>

<?php

get_footer();
