<?php
/**
 * The template for displaying all pages
 * Template Name: About Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Application
 */
$url = wp_get_attachment_url( get_post_thumbnail_id() );  
get_header();
global $application_opt;
?>
<!-- Page Heading Start -->
<section class="page-heading-area background-image" data-src="<?php echo esc_attr($url ); ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="page-heading-box">
					<?php if( get_field('page_heading') ): ?>
						<h3><?php the_field('page_heading'); ?></h3>
					<?php endif; ?>

					<?php if( get_field('page_header_text') ): ?>
						<?php the_field('page_header_text'); ?>
					<?php endif; ?>


				</div>
			</div>
		</div>
	</section>
</div>
<section class="mission-vision">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3><?php echo esc_html($application_opt['mission_vision_title']);?></h3>
				<?php echo wp_kses_post($application_opt['mission_vision_content']);?>
			</div>
		</div>
	</div>
</section>
<section class="chairman-area acurate">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-12 col-sm-12 acurate">
				<?php 
					$url= $application_opt['chairman_image']['url'];
				?>
				<div class="image">
					<img src="<?php echo $url;?>" alt="<?php the_title();?>">
				</div>
			</div>
			<div class="col-lg-8 col-md-12 col-sm-12 acurate">
				<div class="row">
					<div class="col-lg-12 col-md-12 mr-auto">
						<div class="content">
							<h3><?php echo esc_html($application_opt['chairman_title']);?></h3>
							<p><?php echo wp_kses_post($application_opt['chairman_content']);?></p>
							<div class="name-area">
								<div class="singnature">
									<?php 
										$url= $application_opt['chairman_signature']['url'];
									?>
									<img src="<?php echo $url;?>" alt="<?php the_title();?>">
									<div class="name">
										<h3><?php echo esc_html($application_opt['chairman_name']);?></h3>
										<span><?php echo esc_html($application_opt['chairman_designation']);?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="testimonial-area">
	<div class="container-fluid acurate">
		<div class="row">
			<div class="col-lg-6 acurate">
				<div class="left-side">
					<h3><?php echo esc_html($application_opt['ceo_title']);?></h3>
					<p><?php echo wp_kses_post($application_opt['ceo_content']);?></p>
					<div class="name">
						<h4><?php echo esc_html($application_opt['ceo_name']);?></h4>
						<span><?php echo esc_html($application_opt['ceo_designation']);?></span>
					</div>
				</div>
			</div>
			<div class="col-lg-6 acurate">
				<div class="right-side">
					<div class="row">
						<div class="col-lg-8 mr-auto">
							<?php echo wp_kses_post($application_opt['ceo_announcement']);?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
get_footer();
