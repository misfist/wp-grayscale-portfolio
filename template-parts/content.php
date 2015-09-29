<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pea_portfolio
 */

?>

<!-- About Section -->
<section id="<?php echo $post->post_name;?>" class="content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
            <?php if( get_field('sub_head') ) { ?><h3><?php the_field('sub_head'); ?></h3><?php } ?>
            <?php
                the_content( sprintf(
                /* translators: %s: Name of current post. */
                wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pea_portfolio' ), array( 'span' => array( 'class' => array() ) ) ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ) );
            ?>
        </div>
    </div>
</section><!-- #post-## -->
