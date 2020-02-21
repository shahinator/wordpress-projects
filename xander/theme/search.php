<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				<h2><?php printf(esc_html__('%s', 'xander'), get_search_query()); ?></h2>
				<div class="seperator">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home' , 'xander');?></a> <i class="arrow_right"></i> <?php printf(esc_html__('%s', 'xander'), get_search_query()); ?>
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
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

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
