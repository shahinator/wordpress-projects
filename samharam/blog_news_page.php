<?php
/**
 * The template for displaying all pages
 * Template Name: Blog News Page
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

<div class="blog_page_area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<div class="blog_content">
					<div class="row">
						<div class="col-lg-12">
							<h2> <span> <?php samharam_blog_title(); ?> </span></h2>
							<div class="blog_list">
								<ul>
								<?php 
								$count= 1;
									$facilities = new WP_Query(array(
										'post_type' => 'post',
										'posts_per_page'=> -1,
										'order' => 'ASC'
										));	
										while($facilities -> have_posts()): $facilities->the_post();
										$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full-thumbnail' );
									?>
									<li>
										<div class="single_blog">
											<div class="image">
												<img src="<?php echo $image[0]; ?>" alt="">
												<span>0<?php echo $count;?></span>
											</div>
											<div class="content">
												<h3><?php the_title();?></h3>
												<?php the_content();?>
												<hr/>
												<div class="social_info">
													<p>15k views <span>12 Share</span></p>
												</div>
											</div>
										</div>
									</li>
									<?php
									$count++; 
									endwhile;
					               wp_reset_query();
									?>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer();
