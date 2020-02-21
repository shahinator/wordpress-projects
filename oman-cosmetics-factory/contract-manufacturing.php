<?php
/**
 * The template for displaying all pages
 * Template Name: Contract Manufacturing Page
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

<div class="manufacturing-company-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <?php
                    while ( have_posts() ) :
                    the_post();
                    ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php the_content();?>
                    </div><!-- #post-<?php the_ID(); ?> -->
                    <?php
                    endwhile; // End of the loop.
                ?>
            </div>
        </div>
    </div>
</div>
<div class="our-services-company-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="row">
                    <div class="col-lg-6 text-center mx-auto">
                        <div class="section-title">
                            <h2> <?php echo esc_html($oman_cosmetics_factory_opt['our_services_text']);?></h2>
                            <span><?php echo esc_html($oman_cosmetics_factory_opt['our_services_subtext']);?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="services_list" style="margin-left:-90px;border: 1px solid #ededed;">
                            <?php // echo wp_kses_post($oman_cosmetics_factory_opt['services_list']);?>
                            <!-- img src="https://www.omancosmeticsfactory.com/wp-content/uploads/2019/12/contractmanufacter_527x352.jpg" alt="Your Branding Partner - Oman Cosmetics Factory" -->

<?php
echo do_shortcode('[smartslider3 slider=2]');
?>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <?php echo do_shortcode('[contact-form-7 id="219" title="quick enquiry"]');?>
                    </div>
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
