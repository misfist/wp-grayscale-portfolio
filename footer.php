<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pea_portfolio
 */

?>

	</div><!-- #content -->

    <footer id="colophon" class="site-footer navbar-fixed-bottom" role="contentinfo">
        <div class="container text-center">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'footer-menu', 'menu_class' => 'list-inline', 'container' => 'nav', 'container_class' => 'footer-nav', 'container_id' => 'main-navbar-collapse' ) ); ?>
            <div class="copyleft"><span class="fa fa-copyright fa-flip-horizontal"></span> Copyleft &bull; <a href="https://github.com/misfist/one-page-portfolio" target="_blank"><i class="fa fa-github"></i> Source</a></div>
        </div>
    </footer><!-- #colophon -->
<!-- </div> --><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
