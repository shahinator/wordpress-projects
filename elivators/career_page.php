<?php
/**
 * The template for displaying all pages
 * Template Name: Career Page
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

<div class="career-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="content">
					<p><?php echo wp_kses_post($application_opt['opening_text']);?></p>
					<div id="accordion">
						<h3><?php echo esc_html($application_opt['opening_title']);?></h3>						
                        <?php 
                            $count= 1;
                            $activeClass = 'true';
                            $inactiveClass = 'false';
                            $active = 'show';
                            $admission = new WP_Query(array(
                                'post_type' => 'career',
                                'posts_per_page'=> -1,
                                'order' => 'ASC'
							));
							while($admission -> have_posts()): $admission->the_post();
                        ?>
						<div class="card">
							<div class="card-header" id="heading<?php echo $count;?>">
								<h5 class="mb-0">
									<button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $count;?>" aria-expanded="<?php if( $count==1 ){ echo esc_attr($activeClass); }else{echo $inactive;} ?>" aria-controls="collapse<?php echo $count;?>">
										<i class="fa fa" aria-hidden="true"></i>
										<?php the_title();?>
									</button>
								</h5>
							</div>
							<div id="collapse<?php echo $count;?>" class="collapse <?php if( $count==1 ){ echo esc_attr($active); } ?>" aria-labelledby="heading<?php echo $count;?>" data-parent="#accordion">
								<div class="card-body">
									<div class="featured">										
										<a href="<?php echo esc_url(home_url('/')); ?>contact" class="apply">Apply Now</a>
										<div class="row">											
											<?php the_field('job_featured'); ?>
										</div>
									</div>
									<div class="key-skill">							
										<?php the_field('job_skill'); ?>
									</div>
									<div class="job-deatails">
										<?php the_content();?>
									</div>
									<div class="note">
										<?php the_field('job_note'); ?>									 
									</div>
								</div>
							</div>
						</div>
                        <?php                         
                            $count++;
                            endwhile; 
                            wp_reset_postdata();
                        ?>


					</div>
				</div>
			</div>
			<div class="col-lg-3">				
				<p><?php echo wp_kses_post($application_opt['opening_sidebar']);?></p>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
