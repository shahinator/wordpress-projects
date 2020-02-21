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
		<?php
			while ( have_posts() ) :
			the_post();?>
			<div class="col-lg-12">
				<div class="team-content offer-details">
					<h3><?php the_title();?> <span><?php the_field('team_member_berufsbezeichnung'); ?></span></h3>
					<hr>					
					<?php the_content(); ?>					
				</div>
			</div>

		

<?php endwhile; // End of the loop.?>


		</div>
	</div>
</div>




<?php
get_footer();
