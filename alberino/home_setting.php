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
<?php 
$url= $application_opt['banner_image']['url'];
?>
<div class="banner-area background-image" data-src="<?php echo $url;?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center mx-auto">
				<div class="content">
					<h2><a href="<?php echo esc_url(home_url('/')); ?>konzept"><?php echo esc_html($application_opt['banner_title']);?></a></h2>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="our-history-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 mx-auto text-center">
				<h3><?php echo esc_html($application_opt['our_history_title2']);?></h3>
				<p><?php echo wp_kses_post($application_opt['our_history_content2']);?></p>
			</div>
		</div>
	</div>
</div>
<div class="our-offer-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 text-center mx-auto">
				<h2>Unsere Angebote</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 mx-auto text-center">
				<div class="row">
					<div class="our-offer-slider owl-carousel">
					<?php 
						$offers = new WP_Query(array(
						'post_type' => 'offers',
						'posts_per_page'=> -1,
						'order' => 'ASC'
						));	
						while($offers -> have_posts()): $offers->the_post();
						$url = wp_get_attachment_url( get_post_thumbnail_id() );
						$image = Siga_Resize( $url, 350, 400, true, true, true );
					?>
						<div class="single-offer">
							<div class="image">
								<img src="<?php echo $image;?>" alt="<?php the_title();?>">
								<div class="title">
									<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
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
		</div>
	</div>
</div>
<?php
global $post;
$shayan_paged = get_query_var('paged') ? get_query_var('paged') : 1;
query_posts( array( 
    'post_type' => 'products', 
    'paged' => $shayan_paged,
    'posts_per_page' => -1,
    'order'   => 'ASC',
    ) ); 
?>
<!-- latest products start here -->
<section class="products-area" id="gallerie">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <div class="section-title">
                    <h2><?php echo esc_html($application_opt['products_title']);?> </h2>
                    <p><?php echo wp_kses_post($application_opt['products_content']);?></p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="products-menu">
                    <ul> 
                        <li class="filter" data-filter="all"><?php esc_html_e('Alle','application') ?></li>
                        <?php $shayan_terms = get_terms( 'products_cat' );
                            if ( ! empty( $shayan_terms ) && ! is_wp_error( $shayan_terms ) ){
                                foreach ( $shayan_terms as $term ) {
                                    echo '<li class="filter" data-filter=".' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</li>';
                                }	
                            } 
                        ?>
                    </ul>
                </div>
            </div>   
        </div><!-- .row END -->
	</div><!-- .container END -->	
	<div id="Container">
		<div class="container-fluid">
			<div class="row">  
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
					$shayan_terms = get_the_terms( $post->ID, 'products_cat' );	
					if ( $shayan_terms && ! is_wp_error( $shayan_terms ) ) : 
						$shayan_links = array();
						foreach ( $shayan_terms as $term ) {
							$shayan_links[] = $term->slug;
						}	
					$shayan_jlink = join( " ", $shayan_links );
					$type = get_post_meta(get_the_ID(),'_shayan_select_type',true);
					$tp = strtolower(str_replace(" ", "-", $type));							
					$url = wp_get_attachment_url( get_post_thumbnail_id() );
					$image = Siga_Resize( $url, 610, 420, true, true, true );
				?>
					<!-- single products start -->
					<div class="acurate col-lg-4 col-md-4 col-sm-6 mix  <?php echo esc_attr($shayan_jlink); ?>">
						<div class="single-products">
							<div class="image">
								<img src="<?php echo $image;?>" alt="<?php the_title();?>">
								<div class="title">
									<h3><a href="<?php echo CFS()->get('video_url'); ?>"  class="video-popup" ><?php the_title();?></a></h3>									
									<div class="read-more">
										<a href="<?php the_permalink();?>">Details einsehen</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endif; endwhile; wp_reset_query();?>
			</div>
		</div>
	</div>
</section>
<!-- products area end here -->

<div class="promo-area">
	<div class="container">
		<div class="row mt-5">

			<?php 
				$promo = new WP_Query(array(
				'post_type' => 'promo',
				'posts_per_page'=> 4,
				'order' => 'ASC'
				));	
				while($promo -> have_posts()): $promo->the_post();
				$url = wp_get_attachment_url( get_post_thumbnail_id() );
				$image = Siga_Resize( $url, 225, 225, true, true, true );
			?>

			<div class="col-lg-3 col-md-6 col-sm-6 text-center">
				<div class="single-promo">
					<div class="inner-content">
						<div class="image">
							<a href="<?php the_field('details_url'); ?>">
								<img src="<?php echo $image;?>" alt="<?php the_title();?>">
							</a>
						</div>
						<div class="content">
							<h3>
								<a href="<?php the_field('details_url'); ?>">
									<?php the_title();?>
								</a>
							</h3>
							<?php the_content();?>
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


<div class="our-team-area" id="team">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 text-center mx-auto">
				<h2><?php echo esc_html($application_opt['team_title']);?> </h2>
				<p><?php echo wp_kses_post($application_opt['team_content']);?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 mx-auto text-center">
				<div class="row">
					<div class="team-slider owl-carousel">
						<?php 
							$offers = new WP_Query(array(
							'post_type' => 'team',
							'posts_per_page'=> -1,
							'order' => 'ASC'
							));	
							while($offers -> have_posts()): $offers->the_post();
							$url = wp_get_attachment_url( get_post_thumbnail_id() );
							$image = Siga_Resize( $url, 350, 400, true, true, true );
						?>
						
							<div class="single-team">
								<div class="image">
									<img src="<?php echo $image;?>" alt="<?php the_title();?>">
									<div class="title">
										<h3><a href="#"><?php the_title();?></a></h3>
										<span><?php the_field('team_member_berufsbezeichnung'); ?></span>
										<p><?php echo wp_trim_words( get_the_content(),  CFS()->get( 'word_count' ) , '');?></p>
										<a class="more_text" href="<?php the_permalink();?>">mehr erfahren</a>
										<div class="social-media">
											<ul>
												<li><a herf="<?php the_field('facebook_url'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a herf="<?php the_field('twitter'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a herf="<?php the_field('linkedin'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											</ul>
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
		</div>
		<div class="row mt-3">
			<div class="col-lg-8 mx-auto text-center">
				<div class="button-section">
					<p><?php echo esc_html($application_opt['team_title2']);?></p>
					<a class="read-more" href="<?php echo esc_html($application_opt['team_button_text_url']);?>">
						<?php echo esc_html($application_opt['team_button_text']);?>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="our-history-area background-color">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 mx-auto text-center">
				<h2><?php echo esc_html($application_opt['our_history_title']);?></h2>
				<p><?php echo wp_kses_post($application_opt['our_history_content']);?></p>
			</div>
		</div>
	</div>
</div>
<div class="partner-logo-area" id="kooperationspartner">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 mx-auto text-center">
				<h2>
					<?php echo esc_html($application_opt['partner_title']);?> 
				</h2>	
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="logo-slider owl-carousel">
					<?php 
						$offers = new WP_Query(array(
						'post_type' => 'logo',
						'posts_per_page'=> -1,
						'order' => 'ASC'
						));	
						while($offers -> have_posts()): $offers->the_post();
						$url = wp_get_attachment_url( get_post_thumbnail_id() );
					?>
					<div class="single-logo">
						<a href="<?php the_field('logo_url'); ?>" target="_blank">
							<img src="<?php echo $url; ?>" alt="<?php the_title();?>">
						</a>
					</div>

					<?php
						endwhile; // End of the loop.
						wp_reset_query();
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="counter-area" id="wirkungen">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 mx-auto text-center">
				<h2><?php echo esc_html($application_opt['counter_title']);?></h2>				
				<p><?php echo wp_kses_post($application_opt['counter_content']);?></p>
			</div>
		</div>
		<div class="row">
			<?php 
				$offers = new WP_Query(array(
				'post_type' => 'counter',
				'posts_per_page'=> -1,
				'order' => 'ASC'
				));	
				while($offers -> have_posts()): $offers->the_post();
				$url = wp_get_attachment_url( get_post_thumbnail_id() );
				$image = Siga_Resize( $url, 350, 400, true, true, true );
			?>
			<div class="col-lg-3 col-md-6 co-sm-6 text-center">
				<div class="single-counter">
					<h3><?php the_field('number'); ?></h3>
					<h4><?php the_title();?></h4>
					<p><?php echo wp_trim_words( get_the_content(), 15, '');?></p>
				</div>
			</div>
			<?php
				endwhile; // End of the loop.
				wp_reset_query();
			?>


		</div>
	</div>
</div>

<div class="partner-area" id="auszeichnungen">							
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2><?php echo esc_html($application_opt['logo_title']);?></h2>
			</div>
		</div>					
		<div class="row">
			<div class="col-lg-12">
				<div class="logo-slider owl-carousel">
					<?php 
						$offers = new WP_Query(array(
						'post_type' => 'partners',
						'posts_per_page'=> -1,
						'order' => 'ASC'
						));	
						while($offers -> have_posts()): $offers->the_post();
						$url = wp_get_attachment_url( get_post_thumbnail_id() );
						$image = Siga_Resize( $url, 200, 100, true, true, true );
					?>
					<div class="single-logo">
						<a href="<?php the_field('logo_url'); ?>" target="_blank">
							<img src="<?php echo $image; ?>" alt="<?php the_title();?>">
						</a>
					</div>

					<?php
						endwhile; // End of the loop.
						wp_reset_query();
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="testimonial-area" id="bewertungen">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <div class="section-title">
                    <span><?php echo esc_html($application_opt['testimonial_subtitle']);?></span>
                    <h2><?php echo esc_html($application_opt['testimonial_title']);?> </h2>
                    <p><?php echo wp_kses_post($application_opt['testimonial_content']);?></p>
                </div>
            </div>                   
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="testimoial-slider owl-carousel">
                <?php        
                    $testimonial = new WP_Query(array(
                        'post_type' => 'testimonial',
                        'posts_per_page' => -1,
                        'order'   => 'ASC',
                    ));
                ?>
                <?php while ( $testimonial-> have_posts() ) : $testimonial->the_post(); ?>

                    <div class="single-testimonial">
                        <div class="images">
                           <?php the_post_thumbnail();?>
                        </div>
                        <?php the_content();?>
                        <div class="info">
                            <h3><?php the_title();?></h3>
                            <span><?php the_field('name_of_designation'); ?></span>
                        </div>
                    </div>
                                
                <?php 
                    endwhile; // End of the loop.
                    wp_reset_postdata();
                ?>
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section>

<div class="contact-from-area" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="address"> 
					<?php dynamic_sidebar('address');?>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="contact-form">
					<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
