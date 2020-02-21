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

       
        <!-- Projects -->
        <section class="projects mt-5 pb-40" id="projects">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-lg-4 col-md-6 mx-auto text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/divider.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-20 text-center">
                        <h6 class="small-title"><?php echo esc_html($application_opt['products_subtitle']);?></h6>
                        <h4 class="title"><?php echo esc_html($application_opt['products_title']);?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <?php 
                            $count=1;
                            $services = new WP_Query(array(
                                'post_type' => 'projects',
                                'posts_per_page'=> -1,
                                'order' => 'ASC'
                            ));	
                            while($services -> have_posts()): $services->the_post();            
                            $url = wp_get_attachment_url( get_post_thumbnail_id() );
                            $image = Siga_Resize( $url, 600, 900, true, true, true );
                            ?>
                            <div class="item mb-50">
                                <div class="position-re o-hidden"> 
                                    <img src="<?php echo $image; ?>" alt="<?php the_title();?>"> </div>
                                <div class="con"> <span class="category">
                                        <a href="#"><?php the_content(); ?></a>
                                    </span>
                                    <h5><a href="#"><?php the_title();?></a></h5> 
                                    <a href="#"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <?php
                                $count++;
                                endwhile; // End of the loop.
                                wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>