<?php
/**
 * The template for displaying all pages
 * Template Name: Full Width Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Application
 */
get_header();
global $application_opt;
?>
<!-- Page Heading Start -->
<section class="page-heading-area">
	<div class="container">
		<div class="row">
			<div class="text-center col-lg-12">
				<div class="page-heading-box">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		</div>
	</section>
</div>

<div class="inner-layout-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
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

<div class="google-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10290.062113294276!2d9.525533!3d49.85156!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3fb6fb4b9555d2bc!2sAlberino%20Naturerleben%20%26%20Umweltbildung!5e0!3m2!1sen!2sbd!4v1576579635386!5m2!1sen!2sbd" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
<?php
get_footer();
