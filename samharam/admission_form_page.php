<?php
/**
 * The template for displaying all pages
 * Template Name: Admission Form Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samharam
 */
global $samharam_opt;
get_header();
?>
<div class="admission_page_area">
	<div class="container">
		<div class="container">
			<div class="row">
				<?php echo do_shortcode('[contact-form-7 id="309" title="Registration Form"]');?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
