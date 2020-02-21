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

 
    <!--Contact Page Section-->
    <section class="page-section">
    	<div class="auto-container">
            <div class="row">
				<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

					endwhile; // End of the loop.
				?>
			</div>
		</div>
	</section>




<?php
get_footer();
