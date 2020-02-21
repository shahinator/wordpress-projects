<?php
/**
 * The template for displaying all pages
 * Template Name: Carrriculumn Page
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

<div class="approach_education_area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<div class="row">
					<div class="col-lg-8">
						<div class="content">
							<h2><?php echo esc_html($samharam_opt['first_section_title']);?></h2>
							<div class="row">
								<?php echo wp_kses_post($samharam_opt['first_section_content']);?>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="image">
							<img src="<?php echo $samharam_opt['first_image']['url'];?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="technology_integration_area background-image" data-src="<?php echo $samharam_opt['second_image_bg']['url'];?>">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<div class="row">
					<div class="col-lg-6">
						<div class="image">
							<img src="<?php echo $samharam_opt['second_feature_bg']['url'];?>" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="content">
							<h2><?php echo esc_html($samharam_opt['second_title']);?></h2>
							<p><?php echo wp_kses_post($samharam_opt['Second_content']);?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="school_timing_area program_area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 mx-auto text-center">
				<h2><?php echo esc_html($samharam_opt['third_title']);?> </h2>
				<p><?php echo esc_html($samharam_opt['third_subtitle']);?> </p>
			</div>
		</div>	
	</div>
	<?php
		while(have_posts()): the_post();				
	?>
	<?php the_content();?>
	<?php
		endwhile; // End of the loop.
		wp_reset_query();
	?>
</div>


<?php get_footer();
