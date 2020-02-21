<?php
/**
 * The template for displaying all pages
 * Template Name: Projects Page
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

<div class="projects-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2><?php echo esc_html($application_opt['our_projects']);?></h2>
			</div>
		</div>
		<div class="row">
				<?php
					$count =1;
					$services = new WP_Query(array(
					'post_type' => 'projects',
					'posts_per_page'=> -1,
					'order' => 'DESC'
					));
					while($services -> have_posts()): $services->the_post();
					$url = wp_get_attachment_url( get_post_thumbnail_id() );
					$image = siga_Resize( $url, 300, 280, true, true, true );
					if( $count%2 == 0){
				?>
					<div class="col-md-3">
						<div class="single-project project-<?php echo $count;?>">
							<div class="content">
								<h3><?php the_title();?></h3>
								<p><?php echo wp_trim_words( get_the_content(), 35, '');?></p>
							</div>
							<div class="images">
								<img src="<?php echo $image;?>" alt="<?php the_title(); ?>">
								<div class="title">
									<h3><?php the_title();?></h3>
								</div>
							</div>
						</div>
					</div>

				<?php }else{?>
					<div class="col-md-3">
						<div class="single-project project-<?php echo $count;?>">
							<div class="images">
								<img src="<?php echo $image;?>" alt="<?php the_title(); ?>">
								<div class="title">
									<h3><?php the_title();?></h3>
								</div>
							</div>
							<div class="content">
								<h3><?php the_title();?></h3>
								<p><?php echo wp_trim_words( get_the_content(), 35, '');?></p>
							</div>
						</div>
				</div>
				<?php }
					$count++;
					endwhile; // End of the loop.
					wp_reset_query();
				?>
		</div>
	</div>
</div>


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
