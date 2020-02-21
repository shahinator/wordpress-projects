<?php
/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Bewertungen Page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Application
 */  
get_header();
?>
<!-- Page Heading Start -->
<section class="page-heading-area">
	<div class="container">
		<div class="row">
			<div class="text-center col-lg-12">
				<div class="page-heading-box">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		</div>
	</section>
</div>

<div class="review-show-page-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php
					$pagenum = isset( $_GET['pagenum'] ) ? absint( $_GET['pagenum'] ) : 1;
					$limit = 25; // number of rows in page
					$offset = ( $pagenum - 1 ) * $limit;
					$total = $wpdb->get_var( "SELECT COUNT(`id`) FROM `wp_review`" );
					$num_of_pages = ceil( $total / $limit );
					$result = $wpdb->get_results( "SELECT * FROM `wp_review` ORDER BY timestamp DESC LIMIT $offset, $limit" );
					?>
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead class="thead-dark">
								<tr>
									<th class="align-middle" style="text-align:center">Sterne</th>
									<th class="align-middle" style="text-align:center">Name</th>
									<th class="align-middle">Bewertung</th>
									<th class="align-middle" style="text-align:center">Datum</th>
								</tr>
							</thead>
							<tbody>	
								<?php 

								foreach( $result as $results ) 
								if( $results->status == 'fav'){
									{
									$star=$results->star;
									$name= $results->name;
									$comments= $results->text;
									$date_picker= $results->date;
									$date = date('d/m/Y', strtotime($date_picker));
									?>

									<tr>
										<th class="align-middle" style="text-align:center"><?php echo $star; ?></th>
										<td class="align-middle"><?php echo $name; ?></td>
										<td class="align-middle" style="width:600px"><?php echo $comments; ?></td>
										<td class="align-middle" style="text-align:center"><?php echo $date; ?></td>
									</tr>

									<?php 
									}
								}
								?>
							</tbody>
						</table>
					</div>
					<?php
					$page_links = paginate_links( array(
						'base' => add_query_arg( 'pagenum', '%#%' ),
						'format' => '',
						'prev_text' => __( '&laquo;', 'aag' ),
						'next_text' => __( '&raquo;', 'aag' ),
						'total' => $num_of_pages,
						'current' => $pagenum
					) );
					if ( $page_links ) {
						echo '<div class="tablenav text-center"><div class="tablenav-pages pb-5">' . 
					$page_links . '</div></div>';
					}
				?>
			</div>
		</div>
<?php
get_footer();
