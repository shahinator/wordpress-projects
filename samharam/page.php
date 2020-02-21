<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samharam
 */

get_header();
?>

<div class="inner_section" style="padding:30px 0;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="inner_content">
					<?php
						while ( have_posts() ) :
						the_post();
						?> 
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<h3><?php the_title(); ?></h3>
							<hr/>
							<?php the_content();?>
						</div><!-- #post-<?php the_ID(); ?> -->
						<?php 
						endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
