<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link //developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Application
 */
global $application_opt;
?>

	</div><!-- #content -->
	<footer>    
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer');?>
                </div>
            </div>
        </div>
        
        <div class="footer-topper-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <?php dynamic_sidebar('topper');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                    <?php 
                            wp_nav_menu(array(
                                'menu' => 'footer',
                                'theme_location' => 'footer',
                                'container' => 'div',
                                'container_class' => 'footer-menu-area',
                                'container_id' => 'footer_menu',
                                'menu_class' => 'footer_area',
                                'menu_id' => 'footer'
                                )
                            );
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-buttom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>
                            <?php echo wp_kses_post($application_opt['application_copyright']);?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
  </footer>
</div><!-- #page -->


<div class="sb-Container"></div>



<?php wp_footer(); ?>


</body>
</html>
