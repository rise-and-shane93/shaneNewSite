<?php
/**
 * Template part for displaying page content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @since Photoway 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-content' ); ?>>
    <div class="post-content-inner">
        <div class="post-text">
            <?php
                # Prints out the contents of this post after applying filters.
                the_content();
                wp_link_pages( array(
                    'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'photoway' ),
                    'after'       => '</div>',
                    'link_before' => '<span class="page-number">',
                    'link_after'  => '</span>',
                ) );
            ?>
        </div>
        <?php photoway_entry_footer(); ?>
    </div>
</article>