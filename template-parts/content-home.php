<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pea_portfolio
 */

?>


<!-- Intro Header -->
<header  id="<?php echo $post->post_name;?>" <?php post_class( 'intro' ); ?>>
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading"><?php bloginfo( 'name' ); ?></h1>
                    <p class="intro-text"><?php bloginfo( 'description' ); ?></p>
                    <a href="#about" class="btn btn-circle page-scroll pulse">
                        <i class="fa fa-angle-double-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>


<div id="content" class="site-content">
