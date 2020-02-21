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

<div class="contact-page-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2><?php echo esc_html($application_opt['contact_title']);?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-md-4 ml-auto">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<?php 
								$count= 1;
								$admission = new WP_Query(array(
									'post_type' => 'location',
									'posts_per_page'=> -1,
									'order' => 'ASC'
								));
							?>
							<?php while($admission -> have_posts()): $admission->the_post();?>
								<li class="nav-item">
									<a class="nav-link <?php if($count == 1) {echo 'active show';}?>" data-toggle="tab" href="#time_<?php echo $count; ?>"><?php the_title();?></a>
								</li>
							<?php                         
								$count++;
									endwhile; 
								wp_reset_query();
							?>
						</ul>
						
					</div>
				</div>
				<div class="tab-content  wow fadeInUp animated" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;" data-wow-delay="0.3s" id="myTabContent">
					<?php 
						$count= 1;
						$admission = new WP_Query(array(
							'post_type' => 'location',
							'posts_per_page'=> -1,
							'order' => 'ASC'
						));
					?>
					<?php 
						while($admission -> have_posts()): $admission->the_post();						
						$url = wp_get_attachment_url( get_post_thumbnail_id() );
						$image = siga_Resize( $url, 1920, 600, true, true, true );
					?>
					<div class="tab-pane fade  <?php if($count == 1) {echo 'active show';}?>" id="time_<?php echo $count; ?>">
						<div class="map-area">
							<img src="<?php echo $image; ?>" alt="<?php the_title();?>">
							<?php the_content();?>
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
</div>

<div class="contact-form-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2><?php echo esc_html($application_opt['quote_now_title']);?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form 1"]' );?>
			</div>
		</div>
	</div>
</div>


<?php
get_footer();
