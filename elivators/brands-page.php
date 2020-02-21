<?php
/**
 * The template for displaying all pages
 * Template Name: Brands Page
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

<section class="page-heading-area background-image  white-color" data-src="<?php echo esc_attr($url ); ?>">
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
	</div>
</section>
<div class="brands-page-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<?php 
					$count= 1;
					$admission = new WP_Query(array(
						'post_type' => 'brands',
						'posts_per_page'=> -1,
						'order' => 'DESC'
					));
				?>
				<?php 
					while($admission -> have_posts()): $admission->the_post();
				?>

				<div class="row mt-5">
					<div class="col-lg-2 col-md-3">
						<div class="brands-logo">
							<?php the_post_thumbnail(); ?>
						</div>
					</div>
					<div class="col-lg-10 col-md-9">
						<?php the_content();?>
					</div>
				</div>

				<div class="row mt-5">
					<div class="col-lg-12">
						<?php the_field('brands_pictures'); ?>
					</div>
				</div>

				<?php                         
					$count++;
					endwhile; 
					wp_reset_query();
				?>
	
			</div>
		</div>
	</div>
</div>

<?php
get_footer();