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
    <footer class="footer-area">
        <div class="container">
            <div class="row">                
              <?php dynamic_sidebar('footer-1');?>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <?php dynamic_sidebar('footer');?>
                                <?php dynamic_sidebar('footer-6');?>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                       <span> <?php echo wp_kses_post($application_opt['application_copyright']);?></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->


<?php wp_footer(); ?>


</body>
</html>
