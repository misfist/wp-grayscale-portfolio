<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pea_portfolio
 */

get_header(); ?>

    <?php 

    // WP_Query arguments
    $args = array (
        'post_type' => array( 'page' ),
        'orderby'   => 'menu_order',
    );

    // The Query
    $query = new WP_Query( $args );

    // The Loop
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {

            $query->the_post(); ?>

            <?php get_template_part( 'template-parts/content', $post->post_name ); ?>

        <?php }
    } else { ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php }

    // Restore original Post Data
    wp_reset_postdata();

    ?>

<?php get_footer(); ?>
