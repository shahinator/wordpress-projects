<?php
/**
 * The template for displaying all pages
 * Template Name: Contact
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Oman_Cosmetics_Factory
 */

get_header();
global $oman_cosmetics_factory_opt;
?>
<div class="breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-right">
				<ul>
					<li> <a href="<?php echo esc_url(home_url('/')); ?>"> <?php echo esc_html('Home','oman-cosmetics-factory');?> </a> </li>
					<li><?php the_title();?></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="contact-page-map-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center mx-auto">
                <div class="section-title">
                    <h2> <?php echo esc_html($oman_cosmetics_factory_opt['contact_text']);?></h2>
                    <span><?php echo esc_html($oman_cosmetics_factory_opt['contact_subtext']);?></span>
                </div>
            </div>
        </div>
    </div>
    



        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.4264053273287!2d58.56570331497832!3d23.58903578466922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e91f742f2d7d857%3A0xb5ba9f0fc7d997ea!2s4621+Way%2C+Muscat%2C+Oman!5e0!3m2!1sen!2sbd!4v1561036014952!5m2!1sen!2sbd" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>



    <div class="container-fluid acurate">
        <div class="row">
            <div class="col-lg-3 mx-auto">
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');?>
                </div>
            </div>
            <div class="col-lg-4 acurate">             
                <div class="contact-address">
                    <?php dynamic_sidebar('footer_five');?>  
                </div>
            </div>
        </div>
    </div>


</div>



<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="partner-logo owl-carousel">
                <a href="#" class="partner">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/capabilities/partner.jpg" alt="">
                </a>
                <a href="#" class="partner">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/capabilities/partner.jpg" alt="">
                </a>
                <a href="#" class="partner">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/capabilities/partner.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
