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
					<div class="col-md-12">
						<div class="hero-content text-center">
							<h2 class="hero-sub-title"><?php the_field('slider_sub_title'); ?></h2>
							<h3 class="hero-title"><?php the_title();?></h3>
							<?php the_content(); ?>
							<div class="donate-now">
								<a href="<?php the_field('read_more_url'); ?>" class="slider-btn">
									<?php the_field('read_more'); ?>
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