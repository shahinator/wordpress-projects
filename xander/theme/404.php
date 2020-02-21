<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Xander
 */

get_header();
global $xander_opt;
$error_url= $xander_opt['xander_404_bg']['url'];
get_header();


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
				<h2><?php echo esc_html('404 Page','xander');?></h2>
				<div class="seperator">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home' , 'xander');?></a> <i class="arrow_right"></i> <?php echo esc_html('404 Page','xander');?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Blog Inner CSS -->
<section class="blog-inner-area default-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="error-col background-image"  data-src="<?php echo esc_attr($error_url ); ?>">
					<h1><?php echo esc_html($xander_opt['xander_error_header_text']);?></h1>						
					<h2><?php echo esc_html($xander_opt['xander_error_subheader']);?></h2>
					<a class="btn btn-primary theme-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>" role="button"><?php echo esc_html('Go To Homepage','xander');?></a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
