<?php
/**
 * The header for our theme
 * Template Name:Home Page
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Application
 */
global $application_opt;

?>
        <section class="contact pb-70" id="contact">
            <div class="container">
                <div class="row mt-5 mb-3">
                    <div class="col-lg-4 col-md-6 mx-auto text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/divider.png" alt="">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <h6 class="small-title"><?php echo esc_html($application_opt['contact_subtitle']);?></h6>
                        <h4 class="title"><?php echo esc_html($application_opt['contact_title']);?></h4>
                    </div>
                </div>
                <div class="row">
                    <?php dynamic_sidebar('footer');?>   
                </div>
                <div class="row mt-50">
                    <div class="col-md-6 offset-md-3">
                        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>
        </section>
