<?php
/**
 * The template for displaying all pages
 * Template Name: Motive Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Printagram18_Official_Website
 */

get_header();

$url = wp_get_attachment_url( get_post_thumbnail_id() );  
get_header();
?>
<!-- Page Heading Start -->
<section class="page-heading-area background-image" data-src="<?php echo esc_attr($url ); ?>">
	<div class="container">
		<div class="row">
			<div class="text-center col-lg-12">
				<div class="page-heading-box">
					<h2></h2>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="gellary-area">
    <div class="container">  
		<div class="row pt-3">
			<div class="col-lg-12 text-center">
				<h2>Motive</h2>
			</div>
		</div>   
		<div class="row">
			<div class="col-sm-12">
				<div id="list">
					<div class="row">
					<?php          
						$gellary = new WP_Query(array(
							'post_type' => 'gellary',
							'posts_per_page' => -1,
							'order'   => 'ASC',
						));
					?>
					<?php while ( $gellary-> have_posts() ) : $gellary->the_post(); 
					$url = wp_get_attachment_url( get_post_thumbnail_id() );
					$image = siga_resize( $url, 350, null, true, true, true );
					
					?>
						<div class="col-sm-4 item">
							<div class="image">
								<img src="<?php echo esc_url($image); ?>" alt="<?php the_title();?>">
								<div class="overley">
									<div class="content">
										<div class="social-media">
											<ul>
												<li><a href="<?php echo $image;?>" class="popup-link"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="designation">
										<h4><?php the_title()?></h4>
									</div>
								</div>     
							</div>
						</div>
					<?php endwhile; // End of the loop.
            		wp_reset_postdata();?>
					</div>                  
				</div>
			</div>
		</div>
    </div>
</div>
<?php
get_footer();
