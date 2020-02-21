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
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <h2>News Details</h2>
                <ol class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','application')?></a></li>
                    <li>Single News</li>
                </ol>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<div class="inner-layout-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php
					while ( have_posts() ) :
						the_post();
		
						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );
		
					endwhile;
				?>
			</div>
		</div>
	</div>
</div>




<?php
get_footer();
