<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Xander
 */
get_header();
global $xander_opt;


$option_header_image= $xander_opt['xander_blog_bg']['url'];
$features_image = wp_get_attachment_url( get_post_thumbnail_id() ); 
if($features_image){
	$header_image = wp_get_attachment_url( get_post_thumbnail_id() ); 
}elseif( $option_header_image ) {
	$header_image = $xander_opt['xander_blog_bg']['url'];
}else{
	$header_image = XANDER_IMAGES . '/banner.jpg';
}
?> 
<div class="breadcumb-area background-image" data-src="<?php echo esc_url($header_image); ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2><?php the_title(); ?></h2>
				<div class="seperator">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home' , 'xander');?></a> <i class="arrow_right"></i> <?php the_title(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="blog-inner-area default-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">			
				<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'page' );
					endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
