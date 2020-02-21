<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<!-- Start Team Here -->
    <!-- Team Start -->
    <section class="team-area default-section" id="team">
        <div class="container">
            <?php if($atts['section_style'] == 'title_show'): ?>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-col">
                        <h2><?php echo esc_html($atts['team_title']); ?></h2>
                        <h6><?php echo esc_html($atts['team_subtitle']); ?></h6>
                        <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/line.png'; ?>" alt="<?php bloginfo('name');?>">
                        <?php echo wp_kses_post($atts['team_content']); ?>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <?php endif; ?>
            <div class="row">


            <?php 
                $features = new WP_Query(array(
                    'post_type' => 'xanderteams',
                    'posts_per_page' => $atts['posts_per_page'],
                    'order'   => $atts['order'],
                    
                ));
                $count = 0;
                while ( $features-> have_posts() ) : $features->the_post(); 
                $url = wp_get_attachment_url( get_post_thumbnail_id() );
                $image = xander_resize( $url, 253, 288, true, true, true );

            ?>


                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-col">
                        <div class="team-img">
                            <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">
                        </div>
                        <div class="team-name">
                            <h3><?php the_title(); ?></h3>
                            <h6><?php echo get_post_meta( get_the_ID(), 'xander_team_designation', true );?></h6>
                        </div>
                        <div class="team-content">
                            <p><?php echo wp_trim_words( get_the_content(), 6, '');?></p>

                            <ul>
                                <li><a href="<?php echo get_post_meta( get_the_ID(), 'xander_team_facebook_url', true );?>"><i class="fa fa-facebook color-1" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo get_post_meta( get_the_ID(), 'xander_team_twitter_url', true );?>"><i class="fa fa-twitter color-2" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo get_post_meta( get_the_ID(), 'xander_team_dribbble_url', true );?>"><i class="fa fa-dribbble color-3" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo get_post_meta( get_the_ID(), 'xander_team_pinterest_url', true );?>"><i class="fa fa-pinterest-p color-4" aria-hidden="true"></i></a></li>
                            </ul>

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