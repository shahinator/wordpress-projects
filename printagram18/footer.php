<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Printagram18_Official_Website
 */
global $printagram18_opt;
?>

	</div><!-- #content -->

        <footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 mx-auto text-center">
                  <div class="row">
                    <?php dynamic_sidebar('footer');?>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <?php 
                        wp_nav_menu(array(
                          'menu' => 'footer',
                          'theme_location' => 'footer',
                          'container' => 'div'
                          )
                        );
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-buttom">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <p><?php echo wp_kses_post($printagram18_opt['printagram18_copyright']);?></p>
                </div>               
              </div>
            </div>
          </div>
        </footer>
</div><!-- #page -->


<div class="sb-Container"></div>


<?php wp_footer(); ?>
 <!-- all js here -->
<!-- jquery latest version -->
<script src="<?php echo get_template_directory_uri();?>/js/vendor/jquery-1.12.0.min.js"></script>
<!-- bootstrap js -->
<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
<!-- jquery-ui js -->
<script src="<?php echo get_template_directory_uri();?>/js/jquery-ui.min.js"></script>
<!-- wow js -->
<script src="<?php echo get_template_directory_uri();?>/js/wow.min.js"></script>
<!-- plugins js -->
<script src="<?php echo get_template_directory_uri();?>/js/plugins.js"></script>
<!-- Counter Down js -->
<script src="<?php echo get_template_directory_uri();?>/js/simplyCountdown.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.magnific-popup.min.js"></script>
<!-- jquery.counterup js -->
<script src="<?php echo get_template_directory_uri();?>/js/jquery.counterup.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/waypoints.min.js"></script>  
<script src="<?php echo get_template_directory_uri();?>/js/shareButtons.js"></script> 
<script src="<?php echo get_template_directory_uri();?>/js/imagesloaded.pkgd.min.js"></script> 
<script src="<?php echo get_template_directory_uri();?>/js/jquery.matchHeight.js"></script> 
<script src="<?php echo get_template_directory_uri();?>/js/masonry.pkgd.min.js"></script> 
<!-- main js -->
<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
</body>
</html>
