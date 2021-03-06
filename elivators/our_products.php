<?php
/**
 * The template for displaying all pages
 * Template Name: Products Page
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

<section class="product-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<!-- Start Prd Show -->
                	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" wfd-id="145">
         <a class="nav-link  active" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="true">Home Lift/Villa Elevator</a>
		<a class="nav-link  " id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="true">Home lift with Screw &amp; Nets</a>
         <a class="nav-link  " id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="true">Machine Roomless Elevators</a>
         <a class="nav-link  " id="v-pills-9-tab" data-toggle="pill" href="#v-pills-9" role="tab" aria-controls="v-pills-9" aria-selected="true">CMR &amp; High Speed Lift</a>
         <a class="nav-link  " id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="true">Panoramic Elevator</a>
         <a class="nav-link  " id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="true">Hospital Elevator</a>
          <a class="nav-link  " id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Car &amp; Freight Elevators</a>
          <a class="nav-link  " id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-8" aria-selected="true">Escalators</a>
           	<a class="nav-link  " id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="true">Travelators / Moving Walkway</a>
		  </div>
                <!-- End Prd Show -->
			</div>
			<div class="col-lg-9">
				<div class="tab-content" id="v-pills-tabContent">
					<?php
						$count= 1;
						$admission = new WP_Query(array(
							'post_type' => 'product',
							'posts_per_page'=> -1,
							'order' => 'ASC'
						));
						while($admission -> have_posts()): $admission->the_post();
					?>
					<div class="tab-pane fade   <?php if($count==1){echo 'show active';}?>" id="v-pills-<?php echo $count; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $count; ?>-tab">
						<div class="product-details-area">
							<h3><?php the_title(); ?></h3>
							<?php the_content();?>
							<div class="product-details" style="padding-left:30px;">
								<div class="row">
									<div class="col-lg-4"><a href='#'>
										<?php the_post_thumbnail();?>
										</a>
									</div>
									<div class="col-lg-8">
										<div class="product-content">
											<?php the_field('product_features_list'); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
						$count++;
						endwhile;
						wp_reset_query();
					?>

				</div>

				<div class="related-details mt-5">
					<h3><?php echo esc_html($application_opt['related_project']);?></h3>
					<div class="row">
						<?php
							$admission = new WP_Query(array(
								'post_type' => 'product',
								'posts_per_page'=> 4,
								'order' => 'ASC'
							));
							while($admission -> have_posts()): $admission->the_post();
							$url = wp_get_attachment_url( get_post_thumbnail_id() );
							$image = siga_Resize( $url, 100, 120, true, true, true );
						?>
						<div class="col-lg-6">
							<div class="single-related">
								<a href="<?php the_permalink();?>">
									<img src="<?php echo $image;?>" alt="<?php the_title(); ?>">
									<div class="related-content">
										<h5><?php the_title(); ?></h5>
										<p><?php echo wp_trim_words( get_the_content(), 15, '');?></p>
									</div>
								</a>
							</div>
						</div>
						<?php
							endwhile;
							wp_reset_query();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();