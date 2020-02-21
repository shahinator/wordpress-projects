<?php
/**
 * The template for displaying all pages
 * Template Name: Product Page show
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


<div class="our_topper_students_area">
	<div class="container">
		<div class="row ">
			<div class="col-md-12 mx-auto text-center">
				<ul class="nav nav-tabs" id="myTab" role="tablist">

					

					<li class="nav-item first_items selected">
						<a class="nav-link active show" data-toggle="tab" href="#eau-de-perfumes">Eau de perfumes</a>	
						<ul class="under_sub_menu">
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#men">Men</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women">Women</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#unisex">Unisex</a></li>
						</ul>
					</li>
					<li class="nav-item not_selected"><a class="nav-link" data-toggle="tab" href="#bhakoors">Bhakoors</a></li>
					<li class="nav-item not_selected"><a class="nav-link" data-toggle="tab" href="#water-based-perfumes">Water based perfumes</a></li>
					<li class="nav-item not_selected"><a class="nav-link" data-toggle="tab" href="#others">Others</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="topper_content">
	<div class="container">		
		<div class="row">                    
			<div class="col-lg-12">				
				<div class="tab-content" id="myTabContent">       
					<?php 
						$count =1;
						$studnet_terms = get_terms( 'parveen_gallry_cat', array(
							'order' => 'DESC'
						) );
						if ( ! empty( $studnet_terms ) && ! is_wp_error( $studnet_terms ) ){
							foreach ( $studnet_terms as $term ) {		
								$termid = $term->term_id;
								//print_r($term);									
					?>
					<div class="tab-pane fade  <?php if($count==1){ echo 'show active';}?>" id="<?php echo esc_attr($term->slug); ?>">
						<div class="row">
								<?php
										$count=1;
										$args = array(
										'post_type'        => 'parveen_gallry', 
										'tax_query' => array(
											array(
											'taxonomy' => 'parveen_gallry_cat',
											'field' => 'term_id',
											'terms' => $termid,
											'include_children' => true,
													'operator' => 'IN'
												)
											),
										'post_status' => array('publish'),
										'posts_per_page' => 6// no limit
									);
									$current_user_posts = get_posts( $args );
									foreach($current_user_posts as $post){
									$post_ID = $post->ID;
								?>
								<div class="col-lg-4 col-md-6 col-sm-12 text-center">
									<div class="single-product">
										<div class="image">
											<?php $image = wp_get_attachment_url( get_post_thumbnail_id() );?> 
											<a href="<?php the_permalink()?>" target="_blank"> 
												<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(get_the_title(get_post_thumbnail_id() ));?>">
												<span><?php echo esc_html('view More','oman-cosmetics-factory'); ?></span>
											</a>
										</div>
										<div class="content">
											<h3><?php the_title();?></h3>
											<p><?php echo wp_trim_words( get_the_content(), 3, '');?></p>
										</div>
									</div>
								</div>
								<?php
								}
							?>
						</div>
					</div>						
					<?php
							$count++; 
							}	
						} 
					?> 	
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
