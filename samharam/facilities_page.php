<?php
/**
 * The template for displaying all pages
 * Template Name: Facilities Page
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

<div class="facilities_page_area background-image" data-src="<?php echo $samharam_opt['transportation_image']['url'];?>">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 acurate">
				<div class="content">
					<div class="main-content">						
						<h2><?php echo esc_html($samharam_opt['transportation_title']);?></h2>
						<?php echo wp_kses_post($samharam_opt['transportation_content']);?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="library_page_area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 acurate">
				<div class="content">
					<h2><?php echo esc_html($samharam_opt['library_title']);?></h2>
					<p><?php echo wp_kses_post($samharam_opt['library_content']);?></p>
				</div>
			</div>
			<div class="col-lg-6 acurate">
				<div class="image">
					<img src="<?php echo $samharam_opt['library_image']['url'];?>" alt="<?php bloginfo('name');?>">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="sports_page_area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 acurate">
				<div class="image">
					<img src="<?php echo $samharam_opt['sports_image']['url'];?>" alt="<?php bloginfo('name');?>">
				</div>
			</div>
			<div class="col-lg-6 acurate">
				<div class="content">
					<h2><?php echo esc_html($samharam_opt['sports_title']);?></h2>
					<p><?php echo wp_kses_post($samharam_opt['sports_content']);?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="library_page_area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 acurate">
				<div class="content">
					<h2><?php echo esc_html($samharam_opt['prayer_title']);?></h2>
					<p><?php echo wp_kses_post($samharam_opt['prayer_content']);?></p>
				</div>
			</div>
			<div class="col-lg-6 acurate">
				<div class="image">
					<img src="<?php echo $samharam_opt['prayer_image']['url'];?>" alt="<?php bloginfo('name');?>">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="sports_page_area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 acurate">
				<div class="image">
					<img src="<?php echo $samharam_opt['computer_image']['url'];?>" alt="<?php bloginfo('name');?>">
				</div>
			</div>
			<div class="col-lg-6 acurate">
				<div class="content">
					<h2><?php echo esc_html($samharam_opt['computer_title']);?></h2>
					<p><?php echo wp_kses_post($samharam_opt['computer_content']);?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="library_page_area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 acurate">
				<div class="content">
					<h2><?php echo esc_html($samharam_opt['classes_title']);?></h2>
					<p><?php echo wp_kses_post($samharam_opt['classes_content']);?></p>
				</div>
			</div>
			<div class="col-lg-6 acurate">
				<div class="image">
					<img src="<?php echo $samharam_opt['classes_image']['url'];?>" alt="<?php bloginfo('name');?>">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="sports_page_area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 acurate">
				<div class="image">
					<img src="<?php echo $samharam_opt['extra_cariculumn_image']['url'];?>" alt="<?php bloginfo('name');?>">
				</div>
			</div>
			<div class="col-lg-6 acurate">
				<div class="content">
					<h2><?php echo esc_html($samharam_opt['extra_cariculumn_title']);?></h2>
					<p><?php echo wp_kses_post($samharam_opt['extra_cariculumn_content']);?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();
