<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Xander
 */
global $xander_opt;
$option_footer_image= $xander_opt['xanden_footer_background']['url']; 
if($option_footer_image){
	$url= $xander_opt['xanden_footer_background']['url']; 
}else{
	$url = XANDER_IMAGES . '/footer.jpg';
}




?>


	</div><!-- #content -->
	<!-- Footer Start -->
	<section class="footer-area background-image" data-src="<?php echo esc_attr($url ); ?>">
        <div class="container">
            <div class="row">
				<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
						<?php dynamic_sidebar('sidebar-2'); ?>
				<?php } ?>               
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-col">
                        <div class="to-top">
                            <a href="#page-top" class="page-scroll"><i class="arrow_carrot-up"></i></a>
                        </div>
                        <div class="copyright"> 
                            <?php if (!empty($xander_opt['xander_copyright']) && !empty($xander_opt['xander_copyright'])) { ?>
                                <p>
                                    <?php echo wp_kses_post($xander_opt['xander_copyright']);?>
                                </p>
                            <?php }else {?>
                                <p><?php echo esc_html('Copyright By IRStheme. All Rights Reserved.','xander'); ?></p>
                            <?php } ?>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
