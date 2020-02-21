<?php
/**
 * The template for displaying all pages
 * Template Name: About Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samharam
 */
global $samharam_opt;
get_header();
?>

<div class="about_mession_vission_area"  style="display:none;">
	<div class="container-fluid acurate">
		<div class="row">
			<div class="col-lg-6 acurate">
				<div class="mession_area">
					<div class="icon">
						<?php $url = $samharam_opt['mission_image']['url'] ?>
						<img src="<?php echo esc_attr($url ); ?>" alt="<?php bloginfo('name') ?>">
					</div>
					<div class="content">
						<h3><?php echo esc_html($samharam_opt['mission_title']);?> </h3>
						<p><?php echo wp_kses_post($samharam_opt['mission_content']);?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 acurate">
				<div class="vission_area">
					<div class="icon">
						<?php $url1 = $samharam_opt['vission_image']['url'] ?>
						<img src="<?php echo esc_attr($url1 ); ?>" alt="<?php bloginfo('name') ?>">
					</div>
					<div class="content">
						<h3><?php echo esc_html($samharam_opt['vission_title']);?> </h3>
						<p><?php echo wp_kses_post($samharam_opt['vission_content']);?></p>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<div class="school_history_area">
	<div class="container">
		<div class="row">
				<div class="col-lg-12 text-center">
					<div class="content_area">
						<?php
							while ( have_posts() ) :
							the_post();
							?>
							<?php the_content();?>
							<?php
							endwhile; // End of the loop.
						?>
					</div>
				</div>
		</div>
	</div>
</div>

<div class="afilation_certificate_area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="row">
							<div class="col-lg-4 col-md-12">
								<div class="tab_area">
									<ul class="nav nav-tabs" id="myTab" role="tablist">

									<?php

										$count= 1;
										$admission = new WP_Query(array(
											'post_type' => 'samharam_features',
											'posts_per_page'=> -1,
											'order' => 'ASC'
										));
									?>
										<?php while($admission -> have_posts()): $admission->the_post();?>
										<li class="nav-item">
											<a class="nav-link <?php if($count==1){echo 'show active';}?>" data-toggle="tab" href="#board_<?php echo $count; ?>"><?php the_title();?></a>
										</li>
										<?php
                        					$count++;
                    							endwhile;
                        					wp_reset_query();?>

									</ul>
								</div>
							</div>
							<div class="col-lg-8 col-md-12">
								<div class="image">
								<?php $url1 = $samharam_opt['gallery_image']['url'] ?>
								<img src="<?php echo esc_attr($url1 ); ?>" alt="<?php bloginfo('name') ?>">
									<div class="view_button">
										<a href="<?php echo esc_html($samharam_opt['image_title_link']);?>"><?php echo esc_html($samharam_opt['image_title']);?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="tab_content_area">
							<div class="tab-content  wow fadeInUp" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;" data-wow-delay="0.3s" id="myTabContent">

							<?php

							$count= 1;
							$admission = new WP_Query(array(
								'post_type' => 'samharam_features',
								'posts_per_page'=> -1,
								'order' => 'ASC'
							));
							?>
							<?php while($admission -> have_posts()): $admission->the_post();?>
								<div class="tab-pane fade  <?php if($count==1){ echo 'show active';}?>" id="board_<?php echo $count; ?>">
									<div class="row">
										<div class="col-lg-12">
											<div class="single_school_time">
												<div class="content">
													<h3><?php the_title();?></h3>
													<?php the_content();?>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php
								$count++;
									endwhile;
								wp_reset_query();?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="team_members_list">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 text-center">
				<ul class="nav nav-tabs" id="myTab" role="tablist">

									<!-- //category title loop -->
					<?php
						$count =1;
						$studnet_terms = get_terms( 'samharam_team_cat', array(
							'order' => 'DESC'
						) );
						if ( ! empty( $studnet_terms ) && ! is_wp_error( $studnet_terms ) ){
							foreach ( $studnet_terms as $term ) {
							?>
								<li class="nav-item">
								<?php if ($term->name=='BOARD OF COUNCIL') { ?>
									<!--a class="nav-link <?php if($count==1){echo "active";}?>" data-toggle="tab" href="#team_<?php echo $count; ?>" -->
									<a class="nav-link <?php if($count==1){echo "active";}?>"  data-toggle="tab" href="#team_1">
								 <?php }else{?>
								 <a class="nav-link <?php if($count==1){echo "active";}?>" data-toggle="tab" href="#team_2">
								 <?php } ?>
									<?php  echo esc_html($term->name); ?>
									</a>
								</li>
							<?php
								$count++;
								wp_reset_query();
							}
						}
					?>
				</ul>
			</div>
			<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-10 mx-auto text-center">


							<!-- catrgoey content loop		 -->
							<div class="tab-content  wow fadeInUp" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;" data-wow-delay="0.3s" id="myTabContent">
							<?php
								$count =1;
								$studnet_terms = get_terms( 'samharam_team_cat', array(
									'order' => 'ASC'
								) );
								if ( ! empty( $studnet_terms ) && ! is_wp_error( $studnet_terms ) ){
									foreach ( $studnet_terms as $term ) {
										$termid = $term->term_id;

										?>

									<div class="tab-pane fade  <?php if($count==2){ echo 'show active';}?>" id="team_<?php echo $count; ?>">
										<div class="row">
												<div class="team_member_sliders owl-carousel">
												<?php
														$count=1;
														$args = array(
														'post_type'        => 'samharam_team',
														'tax_query' => array(
															array(
															'taxonomy' => 'samharam_team_cat',
															'field' => 'term_id',
															'terms' => $termid,
															'include_children' => true,
        													'operator' => 'IN'
															 )
															),
														'post_status' => array('publish'),
														'posts_per_page' => -1// no limit
													);
													$current_user_posts = get_posts( $args );
													foreach($current_user_posts as $post){
													$post_ID = $post->ID;


												?>
												<div class="single_team_member">
														<div class="image">
														<?php the_post_thumbnail();?>
														</div>
														<div class="content">
															<h3><?php the_title();?></h3>
															<hr/>

														</div>
												</div>
												<?php
												}
											?>
										</div>
								</div>
							</div>
							<?php
									$count++;
									wp_reset_query();
									}
								}
							?>
						</div>
				</div>
			</div>
		</div>

		</div>
	</div>
</div>

<div class="about_chairman_message" style="display:none;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mx-auto">
				<div class="row">
					<div class="col-lg-9">
						<div class="content">
							<h3><?php echo esc_html($samharam_opt['message_title']);?></h3>
							<p><?php echo wp_kses_post($samharam_opt['message_content']);?></p>
								<?php $url2 = $samharam_opt['signature_image']['url'] ?>
								<img src="<?php echo esc_attr($url2 ); ?>" alt="<?php bloginfo('name') ?>">

						</div>
					</div>
					<div class="col-lg-3">
						<div class="chairman_image">
        				    <div class="inner-image">
        						<?php $url1 = $samharam_opt['chairman_image']['url'] ?>
        						<img src="<?php echo esc_attr($url1 ); ?>" alt="<?php bloginfo('name') ?>">
        					</div>
							<div class="designation">
								<h4> <?php echo esc_html($samharam_opt['chairman_name']);?></h4>
								<span><?php echo esc_html($samharam_opt['designation']);?></span>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="chairman_message">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="chairman_image">
				    <div class="inner-image">
						<?php $url1 = $samharam_opt['chairman_image']['url'] ?>
						<img src="<?php echo esc_attr($url1 ); ?>" alt="<?php bloginfo('name') ?>">
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="content">
					<h3><?php echo esc_html($samharam_opt['message_title']);?></h3>
					<p><?php echo wp_kses_post($samharam_opt['message_content']);?></p>
					<div class="designation">
						<h4> <?php echo esc_html($samharam_opt['chairman_name']);?></h4>
						<span><?php echo esc_html($samharam_opt['designation']);?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="school_timing_area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 mx-auto text-center">
				<h2><?php echo esc_html($samharam_opt['school_time']);?></h2>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-11 mx-auto">
				<div class="inner_content">
					<div class="row">
						<div class="col-lg-12">
							<ul class="nav nav-tabs" id="myTab" role="tablist">

								<?php
									$count= 1;
									$admission = new WP_Query(array(
										'post_type' => 'school_time',
										'posts_per_page'=> -1,
										'order' => 'DESC'
									));
								?>
								<?php while($admission -> have_posts()): $admission->the_post();?>
									<li class="nav-item">
										<a class="nav-link <?php if($count == 1) {echo 'active show';}?>" data-toggle="tab" href="#time_<?php echo $count; ?>"><?php the_title();?></a>
									</li>
								<?php
									$count++;
										endwhile;
									wp_reset_query();
								?>



							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="tab-content  wow fadeInUp animated" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;" data-wow-delay="0.3s" id="myTabContent">
								<?php
									$count= 1;
									$admission = new WP_Query(array(
										'post_type' => 'school_time',
										'posts_per_page'=> -1,
										'order' => 'DESC'
									));
								?>
								<?php while($admission -> have_posts()): $admission->the_post();?>
								<div class="tab-pane fade  <?php if($count == 1) {echo 'active show';}?>" id="time_<?php echo $count; ?>">
									<div class="row">
										<div class="col-lg-12">
											<div class="single_school_time">
												<div class="row">
													<div class="col-lg-10 mx-auto">
														<div class="content">
															<?php the_content();?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>


								<?php
									$count++;
										endwhile;
									wp_reset_query();
								?>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="school_uniform_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2><?php echo esc_html($samharam_opt['school_uniform_title']);?></h2>
				<p><?php echo esc_html($samharam_opt['school_subuniform_subtitle']);?></p>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<div class="row">
					<?php
						$count = 1;
						$uniform = new WP_Query(array(
							'post_type' => 'school_uniform',
							'posts_per_page'=> 4,
							'order' => 'ASC'
						));
						while($uniform -> have_posts()): $uniform->the_post();
					?>

					<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="single-uniform">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="content">
										<h3><?php the_title();?> </h3>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="image">
										<?php the_post_thumbnail();?>
									</div>
								</div>

							</div>
						</div>
					</div>


					<?php
						$count++;	endwhile;
						wp_reset_query();
					?>

				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer();
