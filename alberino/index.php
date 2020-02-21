<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Application
 */

get_header();
?>
<!-- Page Heading Start -->
<section class="page-heading-area">
	<div class="container">
		<div class="row">
			<div class="text-center col-lg-12">
				<div class="page-heading-box">
					<h2>Blogs</h2>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="inner-layout-area">
	<div class="container">
		<div class="row mt-2 mb-2">
			<div class="col-md-12">
				<?php 
					$offers = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page'=> -1
					));	
					while($offers -> have_posts()): $offers->the_post();
					$url = wp_get_attachment_url( get_post_thumbnail_id() );
					$url = wp_get_attachment_url( get_post_thumbnail_id() );
					$image = Siga_Resize( $url, 350, 350, true, true, true );
				?>
				<div class="single-blog2">
					<div class="row">
						<div class="col-md-4">
							<div class="image">
								<a href="<?php the_permalink() ?>">
									<img src="<?php echo $image; ?>" alt="<?php the_title(); ?>">
								</a>
							</div>
						</div>
						<div class="col-md-8">
							<div class="content">
								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
								<span>veröffentlicht von <a href="#"><?php the_author();?></a> in <a href=""><?php the_category( ', ' ); ?></a></span>
								<hr>
								<p><?php echo wp_trim_words( get_the_content(), 50, '');?></p>
								
								<a class="read-more" href="<?php the_permalink() ?>">mehr erfahren</a>
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




<?php
get_footer();
