<?php
if (!defined('FW')) {
    die('Forbidden');
}
global $teadokan_opt;

$banner = $atts['banner']; 
if ( empty( $atts['banner'] ) ) {
    return;
}
$url =  esc_url( $banner['url'] );
$image = xander_resize( $url,1920, 960, true, true, true );
?>
 
<!-- Hero Start -->
<section class="hero-area hero-area-two background-image" data-src="<?php echo esc_url($image); ?>">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <div class="hero-col">
                    <div class="main-slider">


                        <?php           
                            $slider_post = new WP_Query(array(
                                'post_type' => 'xanderslider',
                                'posts_per_page' => $atts['posts_per_page'],
                                'order'   => $atts['order'],
                                
                            ));
                            while ( $slider_post-> have_posts() ) : $slider_post->the_post(); 
                            
                        ?>
                        <div class="item">
                            <h1><?php the_title();?> <span><?php echo get_post_meta( get_the_ID(), 'xanderslider_slider_subtitle', true );?> </span></h1>
                            <?php the_content();?>
                            <a class="btn btn-primary theme-btn" href="<?php echo get_post_meta( get_the_ID(), 'xanderslider_button_url', true );?>" role="button"><?php echo get_post_meta( get_the_ID(), 'xanderslider_button_name', true );?></a>
                            <a class="btn btn-primary theme-btn" href="<?php echo get_post_meta( get_the_ID(), 'xanderslider_button_url2', true );?>" role="button"><?php echo get_post_meta( get_the_ID(), 'xanderslider_button_name2', true );?></a>
                        </div>


                        <?php 
                            endwhile; // End of the loop.
                            wp_reset_postdata();?>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="goto-down">
        <a href="#service" class="page-scroll"><i class="arrow_carrot-down"></i></a>
    </div>
</section>

    