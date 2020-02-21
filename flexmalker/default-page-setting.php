<?php
/**
 * The template for displaying all pages
 * Template Name: Front Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Application
 */
get_header();
global $application_opt;

?>

  
   
    <!--Houses Section-->
    <section class="houses-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<div class="title"> <?php echo esc_html($application_opt['slider_buttom_subtitle']); ?></div>
                <h2>  <?php echo esc_html($application_opt['slider_buttom_title']); ?></h2>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">

            <?php 
                $count=1;
                $services = new WP_Query(array(
                    'post_type' => 'property',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'property_cat',
                            'field'    => 'slug',
                            'terms'    => array( 'purchase' ),
                            'operator' => 'IN'
                        ),
                    ),
                ));	
                while($services -> have_posts()): $services->the_post();            
                $url = wp_get_attachment_url( get_post_thumbnail_id() );
                $image = Siga_Resize( $url, 370, 300, true, true, true );
            ?>                        
                <!--House Block-->
                <div class="house-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="<?php echo $image;?>" alt="<?php the_title();?>" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><?php the_title();?></h3>
                                    </div>
                                    <a class="purchased" href="<?php the_permalink();?>"><?php echo esc_html('Make Best House to Purchase','application');?></a>
                                </div>
                            </div>
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
    <!--End Houses Section-->
    
    <!--Property Section-->
    <section class="property-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<div class="title"> <?php echo esc_html($application_opt['property_subtitle']); ?></div>
                <h2><?php echo esc_html($application_opt['property_title']); ?></h2>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">

            <?php 
                $count=1;
                $services = new WP_Query(array(
                    'post_type' => 'property',
                    'post_status' => 'publish',
                    'posts_per_page' => -1
                ));	
                while($services -> have_posts()): $services->the_post();            
                $url = wp_get_attachment_url( get_post_thumbnail_id() );
                $image = Siga_Resize( $url, 370, 370, true, true, true );
            ?> 

                <!-- live website markup -->
                <div class="property col-sm-6 col-md-4">
                    <div class="property-container">
                        <div class="property-thumbnail">
                            <a href="<?php the_permalink();?>" class="thumbnail">
                            <img src="<?php echo $image;?>" alt="<?php the_title();?>">
                            </a>
                            <div class="property-status property-status-reserviert">
                                <?php the_field('property_status'); ?> 
                            </div>
                        </div>
                        <div class="property-details">
                            <h3 class="property-title">
                                <a href="<?php the_permalink();?>">
                                    <?php the_title();?>
                                </a>
                            </h3>
                            <div class="property-subtitle">
                            <?php the_field('location'); ?>
                            </div>
                            <div class="property-data">
                                <div class="row">
                                    <div class="col-xs-5 dt">Objekt ID:</div>
                                    <div class="col-xs-7 dd"></span><?php the_field('objekt_id'); ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-5 dt">Zimmer:</div>
                                    <div class="col-xs-7 dd"><?php the_field('zimmer'); ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-5 dt">Wohnfläche:</div>
                                    <div class="col-xs-7 dd">107 m²</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-5 dt">Nutzfläche:</div>
                                    <div class="col-xs-7 dd">131 m²</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-5 dt">Grundstück:</div>
                                    <div class="col-xs-7 dd">308 m²</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-5 dt">Verfügbar ab:</div>
                                    <div class="col-xs-7 dd">03.02.2020</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-5 dt price">Kaufpreis:</div>
                                    <div class="col-xs-7 dd price"><?php the_field('kaufpreis'); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="property-actions">
                            <div class="btn-group">
                                <a class="btn btn-default btn-sm" role="button" href="<?php the_permalink();?>">
                                    <span class="glyphicon glyphicon-file"></span> Details 
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
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
    <!--End Property Section-->
    <?php $url= $application_opt['call_to_action_image']['url']; ?>
    <!--Call To Action-->
    <section class="call-to-action" style="background-image:url(<?php echo esc_attr($url ); ?>">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<div class="content-column col-md-8 col-sm-12 col-xs-12">
                	<h2> <?php echo esc_html($application_opt['call_to_action_title']); ?></h2>
                    <div class="text"><?php echo wp_kses_post($application_opt['call_to_action_content']);?></div>
                </div>
                <div class="btn-column col-md-4 col-sm-12 col-xs-12">
                	<a href="<?php echo esc_html($application_opt['call_to_action_button_url']); ?>" class="theme-btn btn-style-two"><?php echo esc_html($application_opt['call_to_action_button_name']); ?> <span class="icon flaticon-send-message-button"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Call To Action-->   

    
    <!--Default Section-->
    <section class="default-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Testimonial Column-->
                <div class="testimonial-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column">
                        <!--Sec Title-->
                        <div class="sec-title">
                            <div class="title"><?php echo esc_html($application_opt['testimonial_subtitle']); ?></div>
                            <h2><?php echo esc_html($application_opt['testimonial_title']); ?></h2>
                            <div class="separator"></div>
                        </div>
                        
                        <div class="single-item-carousel owl-carousel owl-theme">
                        
                        <?php 
                            $count=1;
                            $testimonial = new WP_Query(array(
                            'post_type' => 'testimonial',
                            'posts_per_page'=> -1,
                            'order' => 'ASC'
                            ));	
                            while($testimonial -> have_posts()): $testimonial->the_post();
                        ?>

                        	<!--Testimonial Block-->
                            <div class="testimonial-block">
                            	<div class="inner-box">
                                	<div class="image">
                                    	<?php the_post_thumbnail('full');?>
                                    </div>
                                    <h3><?php the_title();?></h3>
                                    <div class="quote-icon">
                                    	<span class="icon"><img src="<?php echo get_template_directory_uri();?>/images/icons/quote-icon.png" alt="" /></span>
                                    </div>
                                    <div class="text"><?php the_content();?></div>
                                    <div class="rating">
                                    	<span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <div class="post-date"><?php the_time('F j, Y'); ?></div>
                                </div>
                            </div>
                            <?php
                                $count++;
                                endwhile; // End of the loop.
                                wp_reset_query();
                            ?>

                            
                        </div>
                        
                    </div>
                    
                </div>
                
                <!--News Column-->
                <div class="news-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column">
                        <!--Sec Title-->
                        <div class="sec-title">
                            <div class="title"><?php echo esc_html($application_opt['blog_subtitle']); ?></div>
                            <h2><?php echo esc_html($application_opt['blog_title']); ?></h2>
                            <div class="separator"></div>
                        </div>
                        
                        <div class="News-carousel owl-carousel owl-theme">

                            <?php 
                                $features = new WP_Query(array(
                                    'post_type' => 'post',
                                    'posts_per_page' => -1
                                    
                                ));
                                while ( $features-> have_posts() ) : $features->the_post(); 
                                $url = wp_get_attachment_url( get_post_thumbnail_id() );
                                $features_image = siga_Resize( $url, 270, 200, true, true, true );

                            ?>
                        	<div class="slide">
                                <!--News Block-->
                                <div class="news-block">
                                    <div class="inner-box">
                                        <div class="row clearfix">
                                            <!--Image Column-->
                                            <div class="image-column col-md-12 col-sm-12 col-xs-12">
                                                <div class="image">
                                                    <a href="<?php the_permalink();?>"><img src="<?php echo $features_image;?>" alt="<?php the_title();?>" /></a>
                                                </div>
                                            </div>
                                            <!--Content Column-->
                                            <div class="content-column col-md-12 col-sm-12 col-xs-12">
                                                <div class="inner-content">
                                                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                                    <div class="text"><?php echo wp_trim_words( get_the_content(), 17, '');?>...</div>
                                                    <ul class="post-meta">
                                                        <li><span class="icon fa fa-user-md"></span><?php the_author();?></li>
                                                        <li><span class="icon fa fa-calendar-check-o"></span><?php the_time('F j, Y'); ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                endwhile; // End of the loop.
                                wp_reset_query();
                            ?>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Default Section-->
    


<?php get_footer();?>