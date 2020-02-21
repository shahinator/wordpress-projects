<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Oman_Cosmetics_Factory
 */
get_header();
global $oman_cosmetics_factory_opt;
?>
<div class="breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-right">
				<ul>
					<li> <a href="<?php echo esc_url(home_url('/')); ?>"> <?php echo esc_html('Home','oman-cosmetics-factory');?> </a> </li>
					<li> <a href="<?php echo esc_url(home_url('/product/')); ?>"> <?php echo esc_html('Products','oman-cosmetics-factory');?> </a> </li>
					<li><?php the_archive_title(); ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php
	while ( have_posts() ) :
		the_post();?>

		<div class="single-product-page-area">
			<div class="container">
				<div class="row">
                <div class="col-lg-12">
					<h2><?php 
     //echo get_the_archive_title();
    ?></h2><hr>
				</div>
					<div class="col-lg-4 text-center">
						<div class="products-image">
							<?php $image = wp_get_attachment_url( get_post_thumbnail_id() );?>	
							<a href="<?php echo esc_url($image); ?>" class="popup-link"> 
								<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(get_the_title(get_post_thumbnail_id() ));?>">
							</a>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="products-description">
							<h3><?php the_title();?></h3>
							<?php the_content();?>
							<div class="attributes">
								<ul>
									<?php if( get_field('sizes') ): ?>
										<li> <span>sizes : </span><?php the_field('sizes'); ?>  </li>
									<?php endif; ?>
									<?php if( get_field('fragrance_type') ): ?>
										<li> <span>fragrance type : </span><?php the_field('fragrance_type'); ?>  </li>
									<?php endif; ?>
									<?php if( get_field('targeted_group') ): ?>
										<li> <span>Main Accords : </span><?php the_field('targeted_group'); ?>  </li>
									<?php endif; ?>
									<?php if( get_field('brand') ): ?>
										<li> <span>brand : </span><?php the_field('brand'); ?>  </li>
									<?php endif; ?>
									<?php if( get_field('sku') ): ?>
										<li> <span>sku : </span><?php the_field('sku'); ?>  </li>
									<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="recently-review-area">
			<div class="container"> 
				<div class="row">
					<div class="col-lg-6 text-center mx-auto">
						<div class="section-title">
							<h2> <?php echo esc_html($oman_cosmetics_factory_opt['product_details_title']);?></h2>
							<span><?php echo esc_html($oman_cosmetics_factory_opt['product_details_subtitle']);?></span>
						</div>
					</div>
				</div>
				<div class="row">
					<?php 
						$args = array(
							'post_type' => 'parveen_gallry',
							'posts_per_page' =>4,
							'order' => 'ASC'
						);                
						// Custom query.
						$blog_post = new WP_Query( $args );
						
						// Check that we have query results.
						if ( $blog_post->have_posts() ) {            
						// Start looping over the query results.
						while ( $blog_post->have_posts() ) {                    
							$blog_post->the_post();                    
							$image = wp_get_attachment_url( get_post_thumbnail_id() );
					?>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<div class="single-product">
							<div class="image">
							<?php $image = wp_get_attachment_url( get_post_thumbnail_id() );?> 
								<a href="<?php the_permalink()?>" target="_blank"> 
									<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(get_the_title(get_post_thumbnail_id() ));?>">
									<span><?php echo esc_html('view More','oman-cosmetics-factory'); ?></span>
								</a>
							</div>
							<div class="content">
								<h3><?php the_title();?></h3>
								<p><?php echo wp_trim_words( get_the_content(), 3, '');?></p>
							</div>
						</div>
					</div>
					<?php 
						
						}
					
					}
					
					// Restore original post data.
					wp_reset_postdata();
					
					?>
				</div>
			</div>
		</div>

		<?php 

	endwhile; // End of the loop.
?>

<?php
get_footer();