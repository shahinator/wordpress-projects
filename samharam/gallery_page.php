<?php
/**
 * The template for displaying all pages
 * Template Name: Samharam Gallery Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samharam
 */
global $samharam_opt;
get_header();
?>
<div class="gallery_page_area" style="height:100%;overflow:hidden;">
	<div class="container">
		<div class="row mt-3">
			<div class="col-lg-12">
				<h3><?php echo esc_html($samharam_opt['gallery_title']);?></h3>				
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="content_area">
					<ul>
					<?php 
						$facilities = new WP_Query(array(
							'post_type' => 'gallery',
							'posts_per_page'=> -1,
							'order' => 'ASC'
							));	
							while($facilities -> have_posts()): $facilities->the_post();
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full-thumbnail' );
						?>

						<li>
							<a href="<?php echo $image[0] ; ?>" class="popup-link">
							 <?php the_post_thumbnail();?> 
							 <div class="title">
								 <?php the_title();?>
							 </div>
							</a>
						</li>

		
						<?php
					endwhile; // End of the loop.
					wp_reset_query();
				?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="video_page_area " style="height:100%;overflow:hidden;">
	<div class="container">
		<div class="row  mt-3">
			<div class="col-lg-12">
				<h3><?php echo esc_html($samharam_opt['video_title']);?></h3>				
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-lg-12">
				<div class="content_area">
					<ul>
					<?php 
						$facilities = new WP_Query(array(
							'post_type' => 'video',
							'posts_per_page'=> -1,
							'order' => 'ASC'
							));	
							while($facilities -> have_posts()): $facilities->the_post();
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full-thumbnail' );
						?>
						<li>
							<a href="<?php echo CFS()->get( 'put_your_video_url' ); ?>" class="video-popup"><?php the_post_thumbnail();?> </a>
							
						</li>	
						<?php
							endwhile; // End of the loop.
							wp_reset_query();
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();
