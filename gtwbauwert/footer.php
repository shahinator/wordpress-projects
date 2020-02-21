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


    <!-- start site-footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar('footer');?>                
            </div>
        </div> <!-- end container -->
    </footer>
    <!-- end site-footer -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="copyright">
                        <?php echo wp_kses_post($application_opt['application_copyright']);?>
                    </p>
                </div>
            </div>
            
        </div>
    </div>





</div><!-- #page -->


<div class="sb-Container"></div>


<?php wp_footer(); ?>


</body>
</html>
