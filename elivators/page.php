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
 * @package Application
 */
$url = wp_get_attachment_url( get_post_thumbnail_id() );  
get_header();
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



<?php
get_footer();
