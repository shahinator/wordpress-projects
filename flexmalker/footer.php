<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Application
 */
global $application_opt;
?>
    <!--Clients Section-->
    <section class="clients-section" style="display:none">
        <div class="auto-container">
            
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                <?php 
                    $count=1;
                    $services = new WP_Query(array(
                        'post_type' => 'logo',
                        'post_status' => 'publish',
                        'posts_per_page' => -1
                    ));	
                    while($services -> have_posts()): $services->the_post();            
                    $url = wp_get_attachment_url( get_post_thumbnail_id() );
                ?> 
                    <li class="slide-item">
                        <figure class="image-box">
                            <a href="<?php the_field('logo_url'); ?>" target="_blank"><img src="<?php echo $url;?>" alt="<?php the_title();?>"></a>
                    </figure>
                    </li>
                <?php
                    $count++;
                    endwhile; // End of the loop.
                    wp_reset_query();
                ?>
                </ul>
            </div>
            
        </div>
    </section>
    <!--End Clients Section-->
    <!--Footer Style Two-->
    <footer class="footer-style-two">
		<div class="auto-container">
        
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
						
                        	<!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-6 col-xs-12">                               
                                <?php dynamic_sidebar('footer-1');?>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <?php dynamic_sidebar('footer-2');?>
                            </div>
                        
                        </div>
                    </div>
                    
                    <!--big column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                        	
                            <!--Footer Column-->
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <?php dynamic_sidebar('footer-3');?>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                <?php dynamic_sidebar('footer-4');?>                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
        	<div class="copyright">
            <?php echo wp_kses_post($application_opt['application_copyright']);?>
            </div>
        </div>
        
    </footer>
    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>



<script src="<?php echo get_template_directory_uri();?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.fancybox.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/owl.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery-ui.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/appear.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/script.js"></script>
<!--End Google Map APi-->
<?php wp_footer();?>
</body>
</html>