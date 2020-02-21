<?php
    if (!defined('FW')) {
        die('Forbidden');
    }  

global $post;
$cleanhit_paged = get_query_var('paged') ? get_query_var('paged') : 1;
query_posts( array( 
    'post_type' => 'xanderworks', 
    'paged' => $cleanhit_paged,
    'posts_per_page' => $atts['posts_per_page'],
    'order'   => $atts['order'],
    ) ); 
?>

<!-- Portfolio Start -->
<section class="portfolio-area default-section" id="portfolio">
    <div class="container">
        <?php if($atts['section_style'] == 'title_show'): ?>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-col">
                        <h2><?php echo esc_html($atts['work_title']); ?></h2>
                        <h6><?php echo esc_html($atts['work_subtitle']); ?></h6>
                        <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/line.png'; ?>" alt="<?php bloginfo('name');?>">
                        <?php echo wp_kses_post($atts['work_content']); ?>
                    </div>
                </div>
            </div>
        <?php else: ?>
        <?php endif; ?>
    </div>
       
    <?php if($atts['container_style'] == 'container_fuild'): ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-xs-12 sortable-gallery">
                <div class="gallery-filters">
                    <ul>
                        <li><a data-filter="*" href="#" class="active"><?php esc_html_e('All','xander') ?></a></li>
                        <?php $xander_terms = get_terms( 'xanderworks_cat' );
                            if ( ! empty( $xander_terms ) && ! is_wp_error( $xander_terms ) ){
                                foreach ( $xander_terms as $term ) {
                                    echo '<li><a href="#" data-filter=".' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</a></li>';
                                }	
                            } 
                        ?>
                    </ul>
                </div>
                <div class="gallery-container masonry-gallery">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php
                        $xander_terms = get_the_terms( $post->ID, 'xanderworks_cat' );	
                        if ( $xander_terms && ! is_wp_error( $xander_terms ) ) : 
                            $xander_links = array();
                            foreach ( $xander_terms as $term ) {
                                $xander_links[] = $term->slug;
                            }	
                            $xander_jlink = join( " ", $xander_links );
                            $type = get_post_meta(get_the_ID(),'_xander_select_type',true);
                            $tp = strtolower(str_replace(" ", "-", $type));
                    ?>


                    <div class="grid <?php echo esc_attr($xander_jlink); ?>">
                        <div class="portfolio-item">
                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php bloginfo('name');?>">  
                            <div class="portfolio-layer">
                                <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="html5lightbox" data-group="mygroup" data-thumbnail="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" title="<?php bloginfo('name');?>">
                                    <i class="icon_zoom-in_alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>                        
                    <?php 
                        endif; 
                        endwhile; 
                        wp_reset_query();
                    ?>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->    
    <?php else: ?>
    <div class="container">
        <div class="row">
            <div class="col col-xs-12 sortable-gallery">
                <div class="gallery-filters">
                    <ul>
                        <li><a data-filter="*" href="#" class="active"><?php esc_html_e('All','xander') ?></a></li>
                        <?php $xander_terms = get_terms( 'xanderworks_cat' );
                            if ( ! empty( $xander_terms ) && ! is_wp_error( $xander_terms ) ){
                                foreach ( $xander_terms as $term ) {
                                    echo '<li><a href="#" data-filter=".' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</a></li>';
                                }	
                            } 
                        ?>
                    </ul>
                </div>
                <div class="gallery-container masonry-gallery">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php
                        $xander_terms = get_the_terms( $post->ID, 'xanderworks_cat' );	
                        if ( $xander_terms && ! is_wp_error( $xander_terms ) ) : 
                            $xander_links = array();
                            foreach ( $xander_terms as $term ) {
                                $xander_links[] = $term->slug;
                            }	
                            $xander_jlink = join( " ", $xander_links );
                            $type = get_post_meta(get_the_ID(),'_xander_select_type',true);
                            $tp = strtolower(str_replace(" ", "-", $type));
                    ?>


                    <div class="grid <?php echo esc_attr($xander_jlink); ?>">
                        <div class="portfolio-item">
                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php bloginfo('name');?>">  
                            <div class="portfolio-layer">
                                <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="html5lightbox" data-group="mygroup" data-thumbnail="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" title="<?php bloginfo('name');?>">
                                    <i class="icon_zoom-in_alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>                        
                    <?php 
                        endif; 
                        endwhile; 
                        wp_reset_query();
                    ?>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container --> 
    <?php endif; ?>
</section>
<!-- end gallery-section -->


