<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

?>

    <!-- Testimonial Start -->
    <section class="testimonial-area-two default-section">
        <div class="container">
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
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="testimonial-col-two">
                        <nav>
                          <div class="nav nav-tabs" id="nav-tab" role="tablist">
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
                                $testimonialimage = xander_resize( $url, 117, 117, true, true, true );
                            ?>

                            <a class="nav-item nav-link <?php echo esc_attr($activeclass); ?>" id="nav-<?php  echo xander_make_slug(get_the_title()); ?>" data-toggle="tab" href="#<?php  echo xander_make_slug(get_the_title()); ?>" role="tab" aria-controls="nav-<?php  echo xander_make_slug(get_the_title()); ?>" aria-selected="true">
                                <img src="<?php echo esc_url($testimonialimage);?>" alt="<?php bloginfo('name');?>">
                            </a>
                            <?php 
                                $activeclass = ' ';                                
                                $count++;
                                endwhile; // End of the loop.
                                wp_reset_postdata();
                            ?>  
                          </div>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="testimonial-col-two">
                        <div class="tab-content" id="nav-tabContent">


                        <?php 
                            $features = new WP_Query(array(
                                'post_type' => 'xandertestimonials',
                                'posts_per_page' => $atts['posts_per_page'],
                                'order'   => $atts['order'],
                                
                            ));
                            $activeclass="show active";
                            while ( $features-> have_posts() ) : $features->the_post();
                            $url = wp_get_attachment_url( get_post_thumbnail_id() );
                            $image = xander_resize( $url, 250, 250, true, true, true ); 
                        ?>
                          <div class="tab-pane fade  <?php echo esc_attr($activeclass); ?>" id="<?php  echo xander_make_slug(get_the_title()); ?>" role="tabpanel" aria-labelledby="nav-<?php  echo xander_make_slug(get_the_title()); ?>">
                                <div class="testimonial-box">
                                    <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p><?php echo wp_trim_words( get_the_content(), 20, '');?></p>
                                    <div class="testimonial-stars">
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                          </div>
                            <?php 
                                $activeclass = ' ';
                                endwhile; // End of the loop.
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>