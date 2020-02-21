<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

    <!-- Service Two Start -->
    <section class="service-area service-area-two default-section" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-col">
                        <h2><?php echo esc_html($atts['services_title']); ?></h2>
                        <h6><?php echo esc_html($atts['services_subtitle']); ?></h6>
                        <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/line.png'; ?>" alt="<?php bloginfo('name');?>">
                        <?php echo wp_kses_post($atts['services_content']); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="carousel-indicators">


<?php 

$count = 1;
$features = new WP_Query(array(
    'post_type' => 'xanderservices',
    'posts_per_page' => $atts['posts_per_page'],
    'order'   => $atts['order']                                            
));
while ( $features-> have_posts() ) : $features->the_post(); 
$url = wp_get_attachment_url( get_post_thumbnail_id() );
$image = xander_resize( $url, 250, 140, true, true, true );


?>


    <div data-target="#<?php echo xander_make_slug(get_the_title());?>" data-slide-to="<?php echo $count;?>" class="<?php if($count == 1){ echo 'active';}?>">
        <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
    </div>

<?php 
    $count++;
    endwhile; // End of the loop.
    wp_reset_postdata();
?>


                        
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="service-two">
                        <div id="<?php echo xander_make_slug(get_the_title());?>" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">


<?php 

    $count = 1;
    $features = new WP_Query(array(
        'post_type' => 'xanderservices',
        'posts_per_page' => $atts['posts_per_page'],
        'order'   => $atts['order']                                            
    ));
    while ( $features-> have_posts() ) : $features->the_post(); 
    $url = wp_get_attachment_url( get_post_thumbnail_id() );
    $image = xander_resize( $url, 830, 490, true, true, true );


?>

                            <div class="carousel-item <?php if($count == 1){ echo 'active';}?>">
                                    <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
                            </div>


                            <?php 
    $count++;
    endwhile; // End of the loop.
    wp_reset_postdata();
?>



                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row our-service-items justify-content-center">




            <?php 

$count = 1;
$features = new WP_Query(array(
    'post_type' => 'xanderservices',
    'posts_per_page' => $atts['posts_per_page'],
    'order'   => $atts['order']                                            
));
while ( $features-> have_posts() ) : $features->the_post(); 


?>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <h1 class="big-number"><?php echo '0'.$count;?></h1>
                        <div class="service-item-content">
                            <h4><i class="<?php echo get_post_meta( get_the_ID(), 'xanderproject_services_icon', true );?>" aria-hidden="true"></i> <?php the_title();?></h4>
                            <p><?php echo wp_trim_words( get_the_content(), 15, '');?></p>
                            <a href="#"><?php echo esc_html('Read More','textdomain');?> <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>

                <?php 
    $count++;
    endwhile; // End of the loop.
    wp_reset_postdata();
?>


            </div>
        </div>
    </section>