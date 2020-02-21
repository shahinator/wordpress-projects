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
<div class="product-page-area">
	<div class="container">
		<div class="row">
        <div class="col-lg-12">
					<h2><?php the_archive_title(); ?></h2><hr>
				</div>
			<div class="col-md-12">
				<div class="content">
					<?php
						$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
						$q = new WP_Query([
							'post_type' => 'parveen_gallry',
							'posts_per_page' => get_option('posts_per_page'),
							get_query_var( 'taxonomy' ) => get_query_var( 'term' ),
							'paged' => $paged
						]);
						$temp_query = $wp_query;
						$wp_query = null;
						$wp_query = $q;
						if ( $q->have_posts() ) :
							while ( $q->have_posts() ) : $q->the_post();
					?> 
					<div class="row pt-3 single-category-post">
						<div class="col-lg-4">
							<div class="product-image">
								<a href="<?php the_permalink();?>">
									<?php the_post_thumbnail();?>
								</a>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="content">
								<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
								<p><?php echo wp_trim_words( get_the_content(), 10, '');?>&nbsp;<a href="<?php the_permalink();?>">More...</a></p>  
							</div>
						</div>
					</div>
					<?php
						endwhile;
						else:
							echo "You ahve not post, please check again";
						endif;
						wp_reset_postdata();
						$wp_query = NULL;
						$wp_query = $temp_query;
					?>
                </div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();