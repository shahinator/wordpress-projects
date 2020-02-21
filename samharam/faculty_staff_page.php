<?php
/**
 * The template for displaying all pages
 * Template Name: Faculty & Staff Page
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
<div class="teacher_data_area">
	<div class="badge">
	<h5><?php echo esc_html($samharam_opt['teacher_title']);?></h5>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 text-center">
				<div class="single-teachers">

				



				<h4>Under development...</h4>

				</div>
			</div>
		</div>
	</div>
</div>
<div class="staff_data_area">
	<div class="badge">
		<h5><?php echo esc_html($samharam_opt['staff_title']);?></h5>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 text-center">
				<div class="single-staff">
				<h4>Under development...</h4>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
