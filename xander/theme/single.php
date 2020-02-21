<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Xander
 */

get_header();
global $xander_opt;


$option_header_image= $xander_opt['xander_blog_bg']['url'];
if( $option_header_image ) {
	$header_image = $xander_opt['xander_blog_bg']['url'];
}else{
	$header_image = XANDER_IMAGES . '/banner.jpg';
}
?> 
<div class="breadcumb-area background-image" data-src="<?php echo esc_url($header_image); ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2><?php xander_blog_header_details(); ?></h2>
				<div class="seperator">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home' , 'xander');?></a> <i class="arrow_right"></i> <?php xander_blog_header_details(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="blog-inner-area default-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
				<?php

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'single' );

						if ( is_singular( 'attachment' ) ) {
							// Parent post navigation.
							the_post_navigation(
								array(
									/* translators: %s: parent post link */
									'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'xander' ), '%title' ),
								)
							);
						} elseif ( is_singular( 'post' ) ) {
							// Previous/next post navigation.
							the_post_navigation(
								array(
									'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'xander' ) . '</span> ' .
										'<span class="screen-reader-text">' . __( 'Next post:', 'xander' ) . '</span> <br/>' .
										'<span class="post-title">%title</span>',
									'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'xander' ) . '</span> ' .
										'<span class="screen-reader-text">' . __( 'Previous post:', 'xander' ) . '</span> <br/>' .
										'<span class="post-title">%title</span>',
								)
							);
						}

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}

					endwhile; // End of the loop.
				?>

                </div>
                <div class="col-lg-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
