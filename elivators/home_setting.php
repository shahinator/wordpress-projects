<?php
/**
 * The template for displaying all pages
 * Template Name: Home Template
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
<section class="slider-area">
	<div class="slider-form">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php echo do_shortcode('[contact-form-7 id="65" title="Home Form"]');?>
				</div>
			</div>
		</div>
	</div>
	<div class="sticky-icons">
		<ul>
			<li>
				<a href="mailto:makeonweb@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
			</li>
			<li>
				<a href="#" class="form"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
			</li>
		</ul>
	</div>
	<div class="hero-slider owl-carousel">
		<?php
			$count=1;
			$slider = new WP_Query(array(
			'post_type' => 'slider',
			'posts_per_page'=> -1,
			'order' => 'ASC'
			));
			while($slider -> have_posts()): $slider->the_post();
			$url = wp_get_attachment_url( get_post_thumbnail_id() );
			$image = siga_Resize( $url, 1920, 650, true, true, true );
		?>
		<div class="hero-single-slider" style="background-image: url(<?php echo $image;?>);">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-8 col-sm-12">
						<div class="hero-content">
							<h3 class="hero-title"><?php the_title();?></h3>
							<?php the_content(); ?>
						</div><!-- .hero-content END -->
					</div>
				</div><!-- .row END -->
			</div><!-- .container END -->
			<div class="overlay black-bg"></div>
		</div><!-- .hero-single-slider END -->
		<?php
			$count++;
			endwhile; // End of the loop.
			wp_reset_query();
		?>

	</div><!-- .hero-slider END -->
</section>
<div class="home-product-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row"> 
                <!-- Services Start -->
					
                    <div class="col-lg-12" wfd-id="177">
				<div class="row" wfd-id="178">
				<div class="col-lg-4 col-md-4 col-sm-4 acurate" wfd-id="193">
						<div class="small-product" wfd-id="194">
						<i class="fa fa-home" aria-hidden="true"></i>
                         <h4>
							<a href="http://www.topfoodsintl.com/meele/?product=home-lift-villa-elevator">
							Home Lift/Villa Elevator</a>
						</h4>
						</div>
			     </div>
			     
			     	<div class="col-lg-4 col-md-4 col-sm-4 acurate" wfd-id="191">
					    	<div class="small-product" wfd-id="192">
								<i class="fa fa-medium" aria-hidden="true"></i>
                                 <h4>
								<a href="http://www.topfoodsintl.com/meele/?product=home-lift-with-screw-nets">
									Home lift with Screw &amp; Nets								</a>
							</h4>

						   </div>
					  </div>
					  
					  <div class="col-lg-4 col-md-4 col-sm-4 acurate" wfd-id="187">
						<div class="small-product" wfd-id="188">
															<i class="fa fa-hospital-o" aria-hidden="true"></i>

							<h4>
								<a href="http://www.topfoodsintl.com/meele/?product=machine-roomless-elevators">
									Machine Roomless Elevators								</a>
							</h4>

						</div>
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-4 acurate" wfd-id="179">
						<div class="small-product" wfd-id="180">
							<i class="fa fa-stack-exchange" aria-hidden="true"></i>
							<h4>
								<a href="http://www.topfoodsintl.com/meele/?product=cmr-high-speed-lift">
									CMR &amp; High Speed Lift</a>
							</h4>
						</div>
					</div>
					

	              <div class="col-lg-4 col-md-4 col-sm-4 acurate" wfd-id="183">
					  <div class="small-product" wfd-id="184">
								<i class="fa fa-linode" aria-hidden="true"></i>

							<h4>
								<a href="http://www.topfoodsintl.com/meele/?product=panoramic-elevator">
									Panoramic Elevator								</a>
							</h4>
						  </div>
				   </div>
				   

						<div class="col-lg-4 col-md-4 col-sm-4 acurate" wfd-id="185">
					    	<div class="small-product" wfd-id="186">
								<i class="fa fa-ravelry" aria-hidden="true"></i>

							<h4>
								<a href="http://www.topfoodsintl.com/meele/?product=hospital-elevator">
									Hospital Elevator								</a>
							</h4>
						   </div>
					    </div>
					    
					    
				   
					<div class="col-lg-4 col-md-4 col-sm-4 acurate" wfd-id="195">
						<div class="small-product" wfd-id="196">
							<i class="fa fa-wheelchair-alt" aria-hidden="true"></i>

							<h4>
								<a href="http://www.topfoodsintl.com/meele/?product=elivators-steps">
									Car &amp; Freight Elevators								</a>
							</h4>
						</div>
					</div>

                       <div class="col-lg-4 col-md-4 col-sm-4 acurate" wfd-id="181">
						    <div class="small-product" wfd-id="182">
							<i class="fa fa-undo" aria-hidden="true"></i>
							<h4>
								<a href="http://www.topfoodsintl.com/meele/?product=escalators">
									Escalators								</a>
							</h4>
						   </div>
				    	</div>

                     <div class="col-lg-4 col-md-4 col-sm-4 acurate" wfd-id="189">
						     <div class="small-product" wfd-id="190">
								<i class="fa fa-plane" aria-hidden="true"></i>
							<h4>
								<a href="http://www.topfoodsintl.com/meele/?product=travelators-moving-walkway">
									Travelators / Moving Walkway								</a>
							</h4>

						</div>
					</div>





				</div>
			</div>
				<!-- Services End -->
				</div> 
			</div>
		</div>
	</div>
</div>
<div class="services-area">
	<div class="container-fluid acurate">
		<div class="row">
			<div class="col-lg-12 acurate">
				<div class="special-services">
					<?php
						$services = new WP_Query(array(
						'post_type' => 'services',
						'posts_per_page'=> 1,
						'order' => 'ASC'
						));
						while($services -> have_posts()): $services->the_post();
						$url = wp_get_attachment_url( get_post_thumbnail_id() );
						$image = siga_Resize( $url, 900, 300, true, true, true );
					?>
					<div class="row">
						<div class="col-lg-6 acurate">
							<div class="content top-content" style="height:264px;">
								<h3><?php the_title();?></h3>
								<p><?php// echo wp_trim_words( get_the_content(), 35, '');?></p>
								<p style="width:190px;"><?php echo  get_the_content();?></p>
							</div>
						</div>
						<div class="col-lg-6 acurate">
							<img src="<?php echo $image;?>" alt="<?php the_title();?>">
						</div>
					</div>
					<?php
						endwhile; // End of the loop.
						wp_reset_query();
					?>

				</div>
			</div>
		</div>
		<div class="row">
			<?php
				$services = new WP_Query(array(
				'post_type' => 'services',
				'posts_per_page'=> 2,
				'order' => 'DESC'
				));
				while($services -> have_posts()): $services->the_post();
				$url = wp_get_attachment_url( get_post_thumbnail_id() );
				$image = siga_Resize( $url, 450, 280, true, true, true );
			?>
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12 acurate">
							<div class="row">
								<div class="col-lg-6">
									<img src="<?php echo $image;?>" alt="<?php the_title();?>">
								</div>
								<div class="col-lg-6">
									<div class="content">
										<h3><?php the_title();?></h3>
										<p><?php echo wp_trim_words( get_the_content(), 35, '');?></p>
										<div class="more">
											<a href="/meele/?page_id=12">More</a>
										</div>
									</div>
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
	</div>
</div>
<div class="network-area">
	<div class="container-fluid acurate">
		<div class="row">
			<div class="col-lg-6 mx-auto text-center">
				<h2><?php echo esc_html($application_opt['marketing_title']);?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-12">
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
								<div class="map-area"><?php the_field('google_map_setting'); ?></div>
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
			<div class="col-lg-6 col-md-12">
				<?php echo wp_kses_post($application_opt['marketing_content']);?>
			</div>
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