<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Thahiti
 */

?>

<footer class="footer" id="about">
        <div class="container-lg">
            <div class="row">
                <div class="footer__nav footer__logo col-lg-3 col-sm-12 gy-3">
                    <a class="navbar-brand" href="#">
                        <img src="<?php the_field( 'footer_logo' ) ?>" alt="logo">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </div>
                <div class="footer__nav col-lg-2 col-sm-4 gy-3">
                    <ul class="footer__list">
                        <li class="footer__item">
                            <?php the_field( 'col-1__title' ); ?>
                        </li>
                        <?php 
                    $args = array (
                        'post_type'     =>  'island',
                        'showposts' =>  13,
                        
                    );
                    $p = get_posts ($args );
                    foreach ( $p as $post ) {
                        setup_postdata( $post );
                    
                ?>
                    <li class="footer__item">
                            <a class="footer__item-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></a>
                    </li>
                <?php } wp_reset_postdata(); ?>
                        
                    </ul>
                </div>
                <div class="footer__nav col-lg-2 col-sm-4 gy-3">
                    <ul class="footer__list">
                        <li class="footer__item">
                            <?php the_field( 'col-2__title' ); ?>
                        </li>
                        <li class="footer__item">
                            <a href="<?php the_field( 'footer_column_two_link_one' ); ?>" class="footer__item-link"><?php the_field( 'footer_column_two_link_one_text' ); ?></a>
                        </li>
                        <li class="footer__item">
                            <a href="<?php the_field( 'footer_column_two_link_two' ); ?>" class="footer__item-link"><?php the_field( 'footer_column_two_link_two_text' ); ?></a>
                        </li>
                        <li class="footer__item">
                            <a href="<?php the_field( 'footer_column_two_link_three' ); ?>" class="footer__item-link"> <?php the_field( 'footer_column_two_link_three_text' ); ?></a>
                        </li>
                        <li class="footer__item">
                            <a href="<?php the_field( 'footer_column_two_link_four' ); ?>" class="footer__item-link"><?php the_field( 'footer_column_two_link_four_text' ); ?></a>
                        </li>
                        <li class="footer__item">
                            <a href="<?php the_field( 'footer_column_two_link_five' ); ?>" class="footer__item-link"> <?php the_field( 'footer_column_two_link_five_text' ); ?></a>
                        </li>
                        <li class="footer__item">
                            <a href="<?php the_field( 'footer_column_two_link_six' ); ?>" class="footer__item-link"> <?php the_field( 'footer_column_two_link_six_text' ); ?></a>
                        </li>
                        <li class="footer__item">
                            <a href="<?php the_field( 'footer_column_two_link_seven' ); ?>" class="footer__item-link"> <?php the_field( 'footer_column_two_link_seven_text' ); ?></a>
                        </li>
                        <li class="footer__item">
                            <a href="<?php the_field( 'footer_column_two_link_eight' ); ?>" class="footer__item-link"> <?php the_field( 'footer_column_two_link_eight_text' ); ?></a>
                        </li>
                        <li class="footer__item">
                            <a href="<?php the_field( 'footer_column_two_link_nine' ); ?>" class="footer__item-link"><?php the_field( 'footer_column_two_link_nine_text' ); ?> </a>
                        </li>
                    </ul>
                </div>
                <div class="footer__nav col-lg-2 col-sm-4 gy-3">
                    <ul class="footer__list">
                        <li class="footer__item">
                            <?php the_field( 'col-3__title' ); ?>
                        </li>
                        <li class="footer__item">
                            <a href="<?php the_field( 'footer_column_three_link_one' ); ?>" class="footer__item-link"> <?php the_field( 'footer_column_three_link_text_one' ); ?></a>
                        </li>
                        <li class="footer__item">
                            <a href="<?php the_field( 'footer_column_three_link_two' ); ?>" class="footer__item-link"><?php the_field( 'footer_column_three_link_text_two' ); ?></a>
                        </li>
                        <li class="footer__item">
                            <a href="<?php the_field( 'footer_column_three_link_three' ); ?>" class="footer__item-link"> <?php the_field( 'footer_column_three_link_text_three' ); ?></a>
                        </li>
                        <li class="footer__item">
                            <a href="<?php the_field( 'footer_column_three_link_four' ); ?>" class="footer__item-link"><?php the_field( 'footer_column_three_link_text_four' ); ?></a>
                        </li>
                        <li class="footer__item">
                            <a href="<?php the_field( 'footer_column_three_link_five' ); ?>" class="footer__item-link"> <?php the_field( 'footer_column_three_link_text_five' ); ?> </a>
                        </li>
                        <li class="footer__item">
                            <a href="<?php the_field( 'footer_column_three_link_six' ); ?>" class="footer__item-link"><?php the_field( 'footer_column_three_link_text_six' ); ?></a>
                        </li>
                    </ul>
                </div>
                <div class="footer__nav footer__link col-lg-3 col-sm-12 gy-3">
                    <a href="<?php the_field( 'footer_one_link' ) ?>" class="facebook__link">
                        <img src="<?php the_field( 'footer_one_icon_img' ) ?>" alt="">
                    </a>
                    <a href="<?php the_field( 'footer_two_link' ) ?>" class="pinterest__link">
                        <img src="<?php the_field( 'footer_two_icon_img' ) ?>" alt="">
                    </a>
                    <a href="<?php the_field( 'footer_three_link' ) ?>" class="twitter__link">
                        <img src="<?php the_field( 'footer_three_icon_img' ) ?>" alt="">
                    </a>
                    <a href="<?php the_field( 'footer_four_link' ) ?>" class="instagram__link">
                        <img src="<?php the_field( 'footer_four_icon_img' ) ?>" alt="">
                    </a>
                    <a href="<?php the_field( 'footer_five_link' ) ?>" class="youtube__link">
                        <img src="<?php the_field( 'footer_five_icon_img' ) ?>" alt="">
                    </a>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
