<?php
/**
 * The template for displaying all pages
 * Template Name: Product Sub Category Page show
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Oman_Cosmetics_Factory
 */

get_header();
global $oman_cosmetics_factory_opt;
?>
<div class="breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-right">
				<ul>
					<li> <a href="<?php echo esc_url(home_url('/')); ?>"> <?php echo esc_html('Home','oman-cosmetics-factory');?> </a> </li>
					<li><?php the_title();?></li>
				</ul>
			</div>
		</div>
	</div>
</div>


<div class="product-page-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<?php
						global $post;
						$siga_paged = get_query_var('paged') ? get_query_var('paged') : 1;
						query_posts( array( 
                            'post_type' => 'parveen_gallry',
                            'posts_per_page' =>-1
							) 
						); 
					?>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<div class="product-menu">
									<ul>
										<li class="filter" data-filter="all"><?php esc_html_e('All','oman-cosmetics-factory') ?></li>
										<?php $siga_terms = get_terms( 'parveen_gallry_cat' );
											if ( ! empty( $siga_terms ) && ! is_wp_error( $siga_terms ) ){
												foreach ( $siga_terms as $term ) {

													echo '<li class="filter" data-filter=".' . esc_attr($term->slug) . '" data-id="' . esc_attr($term->term_id) . '">' . esc_html($term->name) . '</li>';
												}	
											} 
										?>
									</ul>
								</div>
							</div>
							<div class="col-lg-12 text-right subcat"></div>
						</div>
						<div class="row">                    
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 acurate">
								<div id="Container">
                                    <div class="row">
                                        <?php while ( have_posts() ) : the_post(); ?>
                                            <?php
                                            $siga_terms = get_the_terms( $post->ID, 'parveen_gallry_cat' );	
                                            if ( $siga_terms && ! is_wp_error( $siga_terms ) ) : 
                                                $siga_links = array();
                                                foreach ( $siga_terms as $term ) {
                                                    $siga_links[] = $term->slug;
                                                }	
                                                $siga_jlink = join( " ", $siga_links );
                                                $type = get_post_meta(get_the_ID(),'_siga_select_type',true);
                                                $tp = strtolower(str_replace(" ", "-", $type));

                                            ?>
                                        <!-- single product start -->
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mix <?php echo esc_attr($siga_jlink); ?>">
                                            <div class="single-product">
                                                <div class="image">
                                                <?php $image = wp_get_attachment_url( get_post_thumbnail_id() );?> 
                                                    <a href="<?php echo esc_url($image); ?>" class="popup-link"> 
                                                        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(get_the_title(get_post_thumbnail_id() ));?>">
                                                        <span><?php echo esc_html('view More','oman-cosmetics-factory'); ?></span>
                                                    </a>
												</div>
												<div class="content">
													<h3><?php the_title();?></h3>
												</div>
                                            </div>
                                        </div>  
                                        <?php endif; endwhile; wp_reset_query();?>                                        
                                    </div>
								</div>
							</div>
						</div>
					</div>
                </div>
			</div>
		</div>
	</div>
</div>





<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="partner-logo owl-carousel">
                <a href="#" class="partner">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/capabilities/partner.jpg" alt="">
                </a>
                <a href="#" class="partner">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/capabilities/partner.jpg" alt="">
                </a>
                <a href="#" class="partner">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/capabilities/partner.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
