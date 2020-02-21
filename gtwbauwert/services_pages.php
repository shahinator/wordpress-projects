<?php
/**
 * The template for displaying all pages
 * Template Name: Services Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Application
 */
global $application_opt;

get_header();
?>

<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <h2><?php the_title();?></h2>
                <ol class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','application')?></a></li>
                    <li><?php the_title();?></li>
                </ol>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<div class="services-page-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">
                <div class="section-title2">
                    <h2><?php echo esc_html($application_opt['services_title']);?></h2>
                    <p><?php echo wp_kses_post($application_opt['services_content']);?></p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="container-fluild">
                <div class="row">
                    <div class="col-lg-12">
                        <?php    
                            $count =1;    
                            $services = get_posts(array(
                                'post_type' => 'services',
                                'posts_per_page' => -1,
                                'order'   => 'ASC',
                            ));
                            
                        ?>
                        <?php 

     

                            $myarray= array_chunk($services, 3, true);
                            $count = 0;
                            foreach($myarray as $array){ 
                                $count++;
                                foreach($array as $maindata){
                                    // echo "<pre>";
                                    // print_r($maindata);
                                    // echo "</pre>";
                                    // $url = wp_get_attachment_url( get_post_thumbnail_id() );
                                    // $image = Siga_Resize( $url, 1200, 600, true, true, true );
                                   ?>
                                    <div class="single-service" id="service_<?php  echo $maindata->ID; ?>">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="images">     
                                                        <?php 
                                                            $image_id= get_post_thumbnail_id( $maindata->ID );
                                                            $url = wp_get_attachment_image_src($image_id, 'full');
                                                                                                                
                                                        ?>                                              
							                        <div class="inner-frame">
                                                        <img src="<?php echo $url[0];?>" alt="">
                                                    </div> 
                                                    <div class="content-area">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4">
                                                                <div class="small-image">
                                                                    <?php 
                                                                        $image = get_post_meta($maindata->ID, 'upload_services_small_image', true);
                                                                        $url = wp_get_attachment_image_src($image, 'full');
                                                                        if( !empty( $image ) ): ?>
                                                                            <img src="<?php echo $url[0]; ?>" alt="title" />
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8">
                                                                <div class="content"> 
                                                                    <div class="inner-styling">
                                                                        <h4><?php echo $maindata->post_title; ?></h4>
                                                                        <div class="inner-content">
                                                                            <p style="font-style:justify"><?php echo $maindata->post_content; ?></p>                     
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .row END -->
                                    </div> 
                                   <?php
                                }
                                if($count==1){?>
                                    <div class="row">
                                        <div class="col-lg-6 col-lg-offset-3 text-center">
                                            <div class="section-title2 second-section">
                                                <h2><?php echo esc_html($application_opt['services_title2']);?></h2>
                                                <p><?php echo wp_kses_post($application_opt['services_content2']);?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                
                            }


                        ?>                       
                        
                        <?php 
                            $count++;
                            //endwhile; // End of the loop.
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div><!-- .container END -->
        </div>
    </div>
</div>
<?php
get_footer();
