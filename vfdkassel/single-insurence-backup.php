<?php
/**
 * the template for displaying all posts.
 */
   get_header(); 
?>
<div id="main-content" class="main-container blog-single"  role="main">
	<?php
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile; // End of the loop.
	?>
</div> <!--#main-content -->
<?php get_footer(); ?>