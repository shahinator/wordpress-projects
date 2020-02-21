<?php
/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Application
 */
$url = wp_get_attachment_url( get_post_thumbnail_id() );  
global $application_opt;
get_header();
?>
    
 
    <!--Contact Page Section-->
    <section class="page-section">
    	<div class="auto-container">
            <div class="row">
                <?php
					while ( have_posts() ) :
						the_post();

						the_content();

					endwhile; // End of the loop.
				?>
            </div>            
        </div>
    </section>
    <!--End Contact Page Section-->
<?php get_footer();?>