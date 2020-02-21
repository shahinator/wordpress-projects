<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<!-- Service Start -->
<section class="service-area default-section" id="service">
    <div class="container">
        <?php if($atts['section_style'] == 'title_show'): ?>
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
        <?php else: ?>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="service-col">
                    <div id="wrapper">
                        <div id="demo">
                            <ul>
                                <?php 
                                    $features = new WP_Query(array(
                                        'post_type' => 'xanderservices',
                                        'posts_per_page' => $atts['posts_per_page'],
                                        'order'   => $atts['order']                                            
                                    ));
                                    while ( $features-> have_posts() ) : $features->the_post(); 
                                    $url = wp_get_attachment_url( get_post_thumbnail_id() );
                                    $image = xander_resize( $url, 1000, 450, true, true, true );

                                ?>
                                <li> <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>"> </li>
                                <?php 
                                    endwhile; // End of the loop.
                                    wp_reset_postdata();
                                ?>
                            </ul>
                        </div>
                        <div id="sm_submenu">
                            <?php 
                                $features = new WP_Query(array(
                                    'post_type' => 'xanderservices',
                                    'posts_per_page' => $atts['posts_per_page'],
                                    'order'   => $atts['order']                                            
                                ));
                                $count =1;
                                while ( $features-> have_posts() ) : $features->the_post(); 
                            ?>

                            <div class="sm_submenu-item" data-index=" <?php echo esc_html($count);?>"> 
                                <h4><i class="<?php echo get_post_meta( get_the_ID(), 'xanderproject_services_icon', true );?>"></i> <?php the_title();?></h4>
                                <div class="content">
                                    <?php the_content();?>
                                </div>                                 
                                <a href="#"><?php echo esc_html('Read More','xander');?> <i class="arrow_right"></i></a>
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
    </div>
</section>
