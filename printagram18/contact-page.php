<?php
/**
 * The template for displaying all pages
 * Template Name: Contact Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Printagram18_Official_Website
 */

get_header();

$url = wp_get_attachment_url( get_post_thumbnail_id() );  
get_header();
?>
<!-- Page Heading Start -->
<section class="page-heading-area background-image" data-src="<?php echo esc_attr($url ); ?>">
	<div class="container">
		<div class="row">
			<div class="text-center col-lg-12">
				<div class="page-heading-box">
					<h2></h2>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="inner-layout-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="contact-form">
				<h3>Hinterlassen Sie uns eine Nachricht</h3>
					<?php echo do_shortcode('[contact-form-7 id="48" title="Contact form 1"]');?>
				</div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-5">
				<?php
					while ( have_posts() ) :
						the_post();

						the_content();

					endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
