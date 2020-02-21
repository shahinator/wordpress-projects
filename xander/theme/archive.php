<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
				<h2><?php the_archive_title(); ?></h2>
				<div class="seperator">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home' , 'xander');?></a> <i class="arrow_right"></i> <?php the_archive_title(); ?>
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
					if ( have_posts() ) :					

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;
						the_posts_pagination();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
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
