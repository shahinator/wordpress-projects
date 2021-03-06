<?php
/**
 * The template for displaying all pages
 * Template Name: Gallery Page
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
<div class="gallery-area">
	<div class="gallery_tab">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 mx-auto text-center">
					<h2><?php echo esc_html($application_opt['gallery_title']);?></h2>
					<p><?php echo wp_kses_post($application_opt['gallery_text']);?></p>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-md-8 mx-auto text-center">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						  	<li class="nav-item" wfd-id="147">
								<a class="nav-link active " data-toggle="tab" href="#cabins">Cabins</a>
							</li>

                            	<li class="nav-item" wfd-id="140">
								<a class="nav-link " data-toggle="tab" href="#luxury-cabins">Luxury Cabins</a>
							</li>

                             <li class="nav-item" wfd-id="138">
								<a class="nav-link " data-toggle="tab" href="#panoramic-elevator">Panoramic Elevator</a>
							</li>
							
 							<li class="nav-item" wfd-id="143">
								<a class="nav-link " data-toggle="tab" href="#home-lift-screw-nuts">Home lift with Screw & Nets</a>
							</li>

								<li class="nav-item" wfd-id="144">
								<a class="nav-link " data-toggle="tab" href="#esculators">Escalators</a>
							</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="gallery_content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="tab-content" id="myTabContent">
						<?php
							$count =1;
							$studnet_terms = get_terms( 'gallery_cat', array(
								'order' => 'ASC'
							) );
							if ( ! empty( $studnet_terms ) && ! is_wp_error( $studnet_terms ) ){
								foreach ( $studnet_terms as $term ) {
									$termid = $term->term_id;
									//print_r($term);
						?>
						<div class="tab-pane fade  <?php if($count==1){ echo 'show active';}?>" id="<?php echo esc_attr($term->slug); ?>">
							<div class="row">
								<?php
									$count=1;
									$args = array(
									'post_type'        => 'gallery',
									'tax_query' => array(
										array(
										'taxonomy' => 'gallery_cat',
										'field' => 'term_id',
										'terms' => $termid,
										'include_children' => true,
												'operator' => 'IN'
											)
										),
									'post_status' => array('publish'),
									'posts_per_page' => -1// no limit
									);
									$current_user_posts = get_posts( $args );
									foreach($current_user_posts as $post){
									$post_ID = $post->ID;
								//$url = wp_get_attachment_url( get_post_thumbnail_id() );
                                
                                    				$image = wp_get_attachment_url( get_post_thumbnail_id() );
								//$image = siga_Resize( $url, 350, 400, true, true, true );
								?>
								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="single-gallery">
										<div class="images">
											<a href="<?php echo $image ?>" class="popup-link">
												<img src="<?php echo $image; ?>" alt="<?php the_title(); ?>">
											</a>
										</div>
										<div class="content">
											<!-- h4><?php the_title();?></h4 -->
										</div>
									</div>
								</div>
								<?php
									}
								?>
							</div>
						</div>

						<?php
							$count++;
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
get_footer();
