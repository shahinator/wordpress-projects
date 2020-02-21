<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="inner-layout-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

					endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>
</div>




<?php
get_footer();
