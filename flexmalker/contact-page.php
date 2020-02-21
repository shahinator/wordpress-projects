<?php
/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Contact Page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Application
 */
$url = wp_get_attachment_url( get_post_thumbnail_id() );  
global $application_opt;
get_header();
?>
    
    <!--Contact Page Section-->
    <section class="contact-page-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<div class="title"><?php echo esc_html($application_opt['contact_subtitle']); ?></div>
                <h2><?php echo esc_html($application_opt['contact_title']); ?></h2>
                <div class="separator"></div>
            </div>
            <!--Contact Form-->
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');?>
            </div>
            <!--End Contact Form-->
            
        </div>
    </section>
    <!--End Contact Page Section-->
    <?php get_footer();?>