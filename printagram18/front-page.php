<?php
/**
 * The template for displaying all pages
 * Template Name: Home Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Printagram18_Official_Website
 */

get_header();

global $printagram18_opt;
$banner_url = $printagram18_opt['banner_image']['url'];

?>

<div class="banner-area  background-image" data-src="<?php echo esc_attr($banner_url ); ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 mx-auto text-center">
				<div class="slider-text owl-carousel">					
					<div class="single-slide">						
                        <p><?php echo wp_kses_post($printagram18_opt['banner_content']);?></p>									
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>

<div class="about-us-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="content">
				<?php
					while ( have_posts() ) :
						the_post();

						the_content();

                    endwhile; // End of the loop.
                    wp_reset_postdata();
				?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="image-slider">
                    <?PHP $url = wp_get_attachment_url( get_post_thumbnail_id() );  ?>
                    <img src="<?php echo esc_attr($url ); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<?php layerslider(1) ?>
<div class="order-area">
    <div class="container">
        <div class="row pb-3">
            <div class="col-lg-12">
                <div class="content">
                    <h2><?php echo esc_html($printagram18_opt['order_title']);?></h2>
                    <p><?php echo wp_kses_post($printagram18_opt['order_content']);?></p>
                </div>
            </div>
        </div>
        <div class="row pb-3">
            <?php   
                    $count =1;     
                    $order_list = new WP_Query(array(
                        'post_type' => 'orderlist',
                        'posts_per_page' => -1,
                        'order'   => 'ASC',
                    ));
                ?>
                <?php while ( $order_list-> have_posts() ) : $order_list->the_post(); ?>
            <div class="col-lg-4 text-center">
                <div class="single-list">
                    <div class="content">                        
                        <div class="number"><?php echo $count ;?></div>
                        <?php the_title();?>
                    </div>
                </div>
            </div>
                                
            <?php 
                $count++;
                endwhile; // End of the loop.
                wp_reset_postdata();
            ?>
        </div>
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <div class="button-more">
                    <a href="<?php echo esc_html($printagram18_opt['order_button_url']);?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri();?>/images/whatsapp-button.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
get_footer();
