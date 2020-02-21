<?php
/**
 * The template for displaying all pages
 * Template Name: Contact Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Application
 */  
get_header();
?>
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <h2><?php the_title();?></h2>
                <ol class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','application')?></a></li>
                    <li><?php the_title();?></li>
                </ol>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>

<div class="inner-layout-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2>Kontakt Information</h2>
				<?php
					while ( have_posts() ) :
						the_post();

						the_content();

					endwhile; // End of the loop.
				?>
			</div>
			<div class="col-lg-6">
				<div class="contact-from">				
					<h2>Schreiben Sie uns</h2>
					<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
