<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$blog_background_image = $atts['blog_background_image']; 
if ( empty( $atts['blog_background_image'] ) ) {
    return;
}

$url =  esc_url( $blog_background_image['url'] );
$image = xander_resize( $url,1920, 1109, true, true, true );


?>

   <!-- Blog Start -->
    <section class="blog-area blog-area-two default-section background-image" data-src="<?php echo esc_url($image);?>" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-col">
                        <h2><?php echo esc_html($atts['blog_title']); ?></h2>
                        <h6><?php echo esc_html($atts['blog_subtitle']); ?></h6>
                        <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/line.png'; ?>" alt="<?php bloginfo('name');?>">
                        <?php echo wp_kses_post($atts['blog_content']); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-col">
                        <div class="blog-slider-two">
                        <?php 
                            $features = new WP_Query(array(
                                'post_type' => 'post',
                                'posts_per_page' => $atts['posts_per_page'],
                                'order'   => $atts['order'],
                                
                            ));
                            while ( $features-> have_posts() ) : $features->the_post(); 
                            $url = wp_get_attachment_url( get_post_thumbnail_id() );
                            $image = xander_resize( $url, 350, 280, true, true, true );

                        ?>
                            <div class="item">
                                <div class="blog-item">
                                    <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
                                    <div class="blog-item-text">
                                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                        <ul>
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i><a href="#"><?php the_time('F jS, Y') ?></a></li>
                                            <li><i class="fa fa-user" aria-hidden="true"></i><a href="#"><?php echo esc_html(' By ','xander');?><?php the_author(); ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-item">
                                    <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
                                    <div class="blog-item-text">
                                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                        <ul>
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i><a href="#"><?php the_time('F jS, Y') ?></a></li>
                                            <li><i class="fa fa-user" aria-hidden="true"></i><a href="#"><?php echo esc_html(' By ','xander');?><?php the_author(); ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>                         
                            <?php 
                                endwhile; // End of the loop.
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
