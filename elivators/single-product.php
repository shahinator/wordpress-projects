<?php
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
				<?php
					wp_nav_menu(array(
						'menu' => 'product-menu',
						'theme_location' => 'product-menu',
						'container' => 'div',
						'container_class' => 'product-menu',
						'container_id' => 'product-menu',
						'menu_class' => 'product-menu_area',
						'menu_id' => 'product_menu'
						)
					);
				?>
			</div>
			<div class="col-lg-9">
				<div class="tab-content" >					
					<div class="product-details-area">
						<h3><?php the_title(); ?></h3>
						<?php the_content();?>
						<div class="product-details  mt-5">
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
