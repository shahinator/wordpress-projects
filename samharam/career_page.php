<?php
/**
 * The template for displaying all pages
 * Template Name: Career Page
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
<div class="career_page_area">
	<div class="container-fluid">
			<?php
				while(have_posts()): the_post();				
			?>
			<?php the_content();?>
			<?php
				endwhile; // End of the loop.
				wp_reset_query();
			?>
	</div>
</div>
<?php get_footer();
