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
?>
<section class="slider-area">
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
			$image = siga_Resize( $url, 1920, 700, true, true, true );
		?>
		<div class="hero-single-slider" style="background-image: url(<?php echo $image;?>);">
			<div class="container">
				<div class="row">
					<div class="col-md-12 mx-auto">
						<div class="hero-content text-center">
							<h2 class="hero-sub-title"><?php the_field('slider_sub_title'); ?></h2>
							<h3 class="hero-title"><?php the_title();?></h3>
							<?php the_content(); ?>
							<div class="donate-now">
								<a href="<?php the_field('slider_button_url'); ?>" class="slider-btn">
									<?php the_field('slider_button_setting'); ?>
								</a>
							</div>
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
<div class="home-insurence-block">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 mx-auto text-center">
				<h2><?php echo esc_html($application_opt['insurence_title']);?></h2>
				<p><?php echo wp_kses_post($application_opt['insurence_content']);?></p>
			</div>
		</div>
		<div class="row">
			<?php 
				$slider = new WP_Query(array(
				'post_type' => 'insurence',
				'posts_per_page'=> -1,
				'order' => 'DESC'
				));	
				while($slider -> have_posts()): $slider->the_post();
				$url = wp_get_attachment_url( get_post_thumbnail_id() );
			?> 
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="single-insurence-block">
					<div class="image">
						<a href="<?php the_permalink();?>"><img src="<?php echo $url?>" alt="<?php the_title();?>"></a>
					</div>
					<div class="content">
						<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
						<p><?php echo wp_trim_words(get_the_content(),5); ?></p>
						<div class="read-more">
							<a href="<?php the_permalink();?>"><?php echo esc_html( 'weiterlesen','insurence' ); ?></a>
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
<div class="home-logo-area background-image" data-src="http://localhost/Webdesign-Vecuro/vfdkassel/wp-content/uploads/2019/12/quote_bg_texture.png">
	<?php echo do_shortcode('[review]');?>
</div>
<div class="partner-logo-area">							
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2><?php echo esc_html($application_opt['partner_title']);?></h2>
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
						$image = wp_get_attachment_url( get_post_thumbnail_id() );
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
<?php
get_footer();
