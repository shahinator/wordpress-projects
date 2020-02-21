<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

?>
<!-- Testimonial Start -->
<section class="testimonial-area default-section">
    <div class="container">
        <?php if($atts['section_style'] == 'title_show'): ?>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="title-col">
                    <h2><?php echo esc_html($atts['testimonial_title']); ?></h2>
                    <h6><?php echo esc_html($atts['testimonial_subtitle']); ?></h6>
                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/line.png'; ?>" alt="<?php bloginfo('name');?>">
                    <?php echo wp_kses_post($atts['testimonial_content']); ?>
                </div>
            </div>
        </div>
        <?php else: ?>
        <?php endif; ?>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="testimonial-col">
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php 
                                $features = new WP_Query(array(
                                    'post_type' => 'xandertestimonials',
                                    'posts_per_page' => $atts['posts_per_page'],
                                    'order'   => $atts['order'],
                                    
                                ));
                                $count = 0;
                                $activeclass="active";
                                while ( $features-> have_posts() ) : $features->the_post(); 
                                $url = wp_get_attachment_url( get_post_thumbnail_id() );
                                $testimonialimage = xander_resize( $url, 78, 78, true, true, true );
                            ?>

                            <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo esc_attr($count); ?>" class="<?php echo esc_attr($activeclass); ?>">
                                <img src="<?php echo esc_url($testimonialimage);?>" alt="<?php bloginfo('name');?>">
                            </li>
                            <?php 
                                $activeclass = ' ';                                
                                $count++;
                                endwhile; // End of the loop.
                                wp_reset_postdata();
                            ?>                            

                        </ol>
                        <div class="carousel-inner">

                            <?php 
                                $features = new WP_Query(array(
                                    'post_type' => 'xandertestimonials',
                                    'posts_per_page' => $atts['posts_per_page'],
                                    'order'   => $atts['order'],
                                    
                                ));
                                $activeclass="active";
                                while ( $features-> have_posts() ) : $features->the_post(); 
                            ?>
                            <div class="carousel-item <?php echo esc_attr($activeclass); ?>">
                            <div class="testimonial-item"> 
                            <p><?php echo wp_trim_words( get_the_content(), 15, '');?></p>
                                <h6> - <?php echo get_post_meta( get_the_ID(), 'xander_testimonial_designation', true );?></h6>
                            </div>
                            </div>
                            <?php 
                                $activeclass = ' ';
                                endwhile; // End of the loop.
                                wp_reset_postdata();
                            ?>



                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only"><?php echo esc_html('Previous','xander');?></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only"><?php echo esc_html('Next','xander');?></span>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>