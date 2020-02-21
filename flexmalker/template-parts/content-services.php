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


          <section class="services pt-5 pb-5" id="services">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-lg-4 col-md-6 mx-auto text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/divider.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h6 class="small-title"><?php echo esc_html($application_opt['service_subtitle']);?></h6>
                        <h4 class="title"><?php echo esc_html($application_opt['service_title']);?></h4>
                    </div>
                    <?php 
                      $count=1;
                      $services = new WP_Query(array(
                        'post_type' => 'services',
                        'posts_per_page'=> -1,
                        'order' => 'ASC'
                      ));	
                      while($services -> have_posts()): $services->the_post();            
                      $url = wp_get_attachment_url( get_post_thumbnail_id() );
                      $image = Siga_Resize( $url, 1500, 1000, true, true, true );
                    ?>
                    <div class="col-md-4">
                        <div class="item bg-<?php echo $count;?>" style="background-image:url(<?php echo $image;?>);">
                            <div class="con">
                                <div class="numb"><?php echo esc_html('0','application');?><?php echo $count;?></div>
                                <h5><?php the_title(); ?></h5>
                                <p><?php echo wp_trim_words( get_the_content(), 20, '');?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                        $count++;
                        endwhile; // End of the loop.
                        wp_reset_query();
                    ?>


                </div>
            </div>
        </section>