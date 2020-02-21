<?php
/**
 * The template for displaying all pages
 * Template Name: Home Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Application
 */  
get_header();
global $application_opt;
?>


	<!-- start of hero -->
	<section class="hero hero-slider-wrapper hero-style-3">
		<div class="hero-slider">
			<?php 
                $slider = new WP_Query(array(
                'post_type' => 'slider',
                'posts_per_page'=> -1,
                'order' => 'DESC'
                ));	
                while($slider -> have_posts()): $slider->the_post();
                $url = wp_get_attachment_url( get_post_thumbnail_id() );
                $image = Siga_Resize( $url, 1920, 1000, true, true, true );
            ?>
			<div class="slide background-image" data-src="<?php echo $image;?>">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 col-sm-12 slide-caption">
							<div class="slide-subtitle">
								<h4><?php the_content();?></h4>
							</div>
							<div class="slide-title">
								<h2><?php the_title();?></h2>
							</div>
							<div class="btns">
								<a href="<?php the_field('button_url'); ?>" class="theme-btn"><?php the_field('button_name'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
            <?php
                endwhile; // End of the loop.
                wp_reset_query();
            ?>
		</div>
		<div class="pagi-info"></div>
		<div class="social-links">
			<ul>
				<li><a href="<?php echo esc_html($application_opt['application_facebook']);?>"><i class="ti-facebook"></i></a></li>
				<li><a href="<?php echo esc_html($application_opt['application_twitter']);?>"><i class="ti-twitter-alt"></i></a></li>
				<li><a href="<?php echo esc_html($application_opt['application_linkedin']);?>"><i class="ti-linkedin"></i></a></li>
			</ul>
		</div>
	</section>
	<!-- end of hero slider -->
	<!-- start about-section-s3 -->
	<section class="about-section-s3 section-padding">
		<div class="container">
			<div class="row">
				<div class="col col-lg-6 col-md-7 about-content-area">
					<div class="section-title">
						<span><?php echo esc_html($application_opt['about_subtitle']);?></span>
						<h2><?php echo esc_html($application_opt['about_title']);?></h2>
						<div class="transparent-text"><?php echo esc_html($application_opt['main_title']);?></div>
					</div>
					<div class="about-text">
						<?php echo wp_kses_post($application_opt['about_content']);?>
						<a href="<?php echo esc_url(home_url('/')); ?>leistungen" class="theme-btn-s2"><?php echo esc_html($application_opt['about_button']);?></a>
						
					</div>
				</div>
				<div class="col col-lg-6 col-md-5">
					<?php $url_bg = $application_opt['about_image']['url'] ?>
					<div class="img-holder">
						<img src="<?php echo $url_bg;?>">
					</div>
				</div>
			</div>
		</div> <!-- end container -->
	</section>
	<!-- end about-section-s3 -->
	<!-- start services-section-s2 -->
	<section class="services-section-s2 section-padding">
		<div class="container">
			<div class="row">
				<div class="col col-xs-12">
					<div class="section-title">
						<span><?php echo esc_html($application_opt['services_subtitle']);?></span>
						<h2><?php echo esc_html($application_opt['services_title']);?></h2>
						<div class="transparent-text"><?php echo esc_html($application_opt['services_main_title']);?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-xs-12">
					<div class="service-grids service-slider-s2">
						<?php 
							$slider = new WP_Query(array(
							'post_type' => 'services',
							'posts_per_page'=> -1,
							'order' => 'DESC'
							));	
							while($slider -> have_posts()): $slider->the_post();
							$url = wp_get_attachment_url( get_post_thumbnail_id() );
							$image = Siga_Resize( $url, 600, 640, true, true, true );
						?>
						<div class="grid">
							<div class="img-holder">
								<img src="<?php echo $image;?>">
							</div>
							<div class="details">
								<h3><a href="<?php echo esc_url(home_url('/')); ?>leistungen"><?php the_title(); ?></a></h3>
							</div>
						</div>
						<?php
							endwhile; // End of the loop.
							wp_reset_query();
						?>
					</div>
				</div>
			</div>
		</div> <!-- end container -->
	</section>
	<!-- end services-section-s2 -->

	<!-- start specialization -->
	<section class="specialization section-padding">
		<div class="container">
			<div class="row">
				<div class="col col-xs-12">
					<div class="section-title-s2">
						<h2><?php echo esc_html($application_opt['features_title']);?></h2>
						<div class="transparent-text"><?php echo esc_html($application_opt['features_subtitle']);?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-xs-12">
					<div class="specialization-grids clearfix">	
						<?php dynamic_sidebar('features_content');?>     

					</div>
				</div>
			</div>
		</div> <!-- end container -->
	</section>
	<!-- end specialization -->

	<!-- start recent-projects-s3 -->
	<section class="recent-projects-s3 section-padding">
		<div class="container">
			<div class="row">
				<div class="col col-xs-12">
					<div class="section-title-s4">
						<span><?php echo esc_html($application_opt['products_subtitle']);?></span>
						<h2><?php echo esc_html($application_opt['products_title']);?></h2>
						<div class="transparent-text"><?php echo esc_html($application_opt['products_main_title']);?></div>
					</div>
				</div>
			</div>			
		</div>
		<div class="container-fluid">
			<div class="row wrapper-product">
				<?php 
					$slider = new WP_Query(array(
					'post_type' => 'products',
					'posts_per_page'=> -1,
					'order' => 'DESC'
					));	
					while($slider -> have_posts()): $slider->the_post();
					$url = wp_get_attachment_url( get_post_thumbnail_id() );
					$image = Siga_Resize( $url, 600, 465, true, true, true );
				?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 acurate">
					<div class="single-gellary">
						<div class="image">
							<img src="<?php echo $image;?>" alt="<?php the_title();?>">
						</div>
						<p><?php the_content();?></p>
					</div>
				</div>
				<?php
					endwhile; // End of the loop.
					wp_reset_query();
				?>
			</div>
			<div class="row">
				<div class="col col-xs-12">
					<div class="view-all">
						<a href="#">Alle Projekte anzeigen <i class="fi flaticon-slim-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end recent-projects-s3 -->





	<!-- start testimonials-section-s2 -->
	<section class="testimonials-section-s2 section-padding " style="display:none">
		<div class="container">
			<div class="row">
				<div class="col col-xs-12">
					<div class="testimonials-grids testimonial-slider-s2 clearfix">
						<?php 
							$slider = new WP_Query(array(
							'post_type' => 'testimonial',
							'posts_per_page'=> -1
							));	
							while($slider -> have_posts()): $slider->the_post();
							$url = wp_get_attachment_url( get_post_thumbnail_id() );
							$image = Siga_Resize( $url, 90, 90, true, true, true );
						?>
						
						<div class="grid">
							<p><?php echo wp_trim_words(get_the_content(),50); ?></p>   
							<div class="client-info">
								<div class="img-holder">
									<img src="<?php echo $image;?>">
								</div>
								<div class="client-details">
									<h4><?php the_title();?></h4>
									<p><?php the_field('designation'); ?></p>
								</div>
							</div>
						</div>
						<?php
							endwhile; // End of the loop.
							wp_reset_query();
						?>
					</div>
				</div>
			</div>
		</div> <!-- end container -->
	</section>
	<!-- end testimonials-section-s2 -->

	<!-- start recent-blog-section -->
	<section class="recent-blog-section section-padding" style="display:none">
		<div class="container">
			<div class="row">
				<div class="col col-xs-12">
					<div class="section-title">
						<span><?php echo esc_html($application_opt['blog_subtitle']);?></span>
						<h2><?php echo esc_html($application_opt['blog_title']);?></h2>
						<div class="transparent-text"><?php echo esc_html($application_opt['blog_mian_title']);?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-xs-12">
					<div class="blog-grids clearfix">
						<?php 
							$slider = new WP_Query(array(
							'post_type' => 'post',
							'posts_per_page'=> 3,
							'order' => 'DESC'
							));	
							while($slider -> have_posts()): $slider->the_post();
							$url = wp_get_attachment_url( get_post_thumbnail_id() );
							$image = Siga_Resize( $url, 380, 290, true, true, true );
						?>
						<div class="grid">
							<div class="img-holder">
								<img src="<?php echo $image;?>">
							</div>
							<div class="details">
								<ul class="entry-meta">
									<li><a href="#"><i class="ti-calendar"></i>  <?php the_time( 'F jS, Y' ); ?></a></li>
									<li><a href="#"><i class="ti-folder"></i><?php the_category( ', ' ); ?></a></li>
								</ul>
								<h3><a href="#"><?php echo wp_trim_words(get_the_title(),15); ?></a></h3>
							</div>
						</div>
						<?php
							endwhile; // End of the loop.
							wp_reset_query();
						?>
					</div>
				</div>
			</div>
		</div> <!-- end container -->
	</section>
	<!-- end recent-blog-section -->
        <!-- start partners-section -->
        <section class="partners-section" style="display:none">
            <h2 class="hidden">Partners</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider">
							<?php 
								$slider = new WP_Query(array(
								'post_type' => 'logo',
								'posts_per_page'=> -1,
								'order' => 'DESC'
								));	
								while($slider -> have_posts()): $slider->the_post();
								$url = wp_get_attachment_url( get_post_thumbnail_id() );
								$image = Siga_Resize( $url, 155, 70, true, true, true );
							?>
                            <div class="grid">
								<img src="<?php echo $image;?>">
							</div>
							
							<?php
								endwhile; // End of the loop.
								wp_reset_query();
							?>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end partners-section -->

        <!-- start contact-section -->
        <section class="contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-5">
                        <div class="contact-title">
                            <h2><?php echo esc_html($application_opt['contact_title']);?></h2>
                            <p><?php echo esc_html($application_opt['contact_subtitle']);?></p>
                        </div>
						<?php echo wp_kses_post($application_opt['contact_content']);?>
                    </div>
                    <div class="col col-md-7">
                        <div class="contact-form-area">
                            <div class="contact-form-holder">
                                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');?>
                            </div>
                            <div class="contact-pic">
								<?php $url_bg = $application_opt['contact_image']['url'] ?>
                                <img src="<?php echo $url_bg;?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-section -->



<?php
get_footer();
