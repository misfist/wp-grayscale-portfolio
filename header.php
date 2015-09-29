<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pea_portfolio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" <?php body_class(); ?>>

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <span class="light"></span> <?php bloginfo( 'name' ); ?>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
           
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav navbar-nav', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'main-navbar-collapse' ) ); ?>
                
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



