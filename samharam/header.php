<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package samharam
 */
global $samharam_opt;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<style>
	.certficate{
		font-size: 18px;
		font-weight: 600;
		color: #fff;
		margin-bottom: 30px;
		padding-bottom: 15px;
		position: relative;
		width:200px;
	}
	.certficate::after{
		width: 30px;
		height: 1px;
		left: 85px;
		bottom: 0;
		content: "";
		background: #fff;
		z-index: 99999;
		position: absolute;

    }


</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<div class="website-site-promo-section">
		<!-- header area start here -->
		<header>
			<div class="header-area" id="sticky">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-1 col-md-12">
							<div class="logo-area">
								<a href="<?php echo esc_url(home_url('/')); ?>">
								<?php $url= $samharam_opt['samharam_logo_main']['url']; ?>
								<img src="<?php echo esc_attr($url ); ?>" alt="<?php bloginfo('name') ?>">
								</a>
							</div>
						</div>
						<div class="col-lg-11 col-md-12">
							<div class="main-menu-area">
								<?php samharam_main_menu(); ?>
							</div>
						<!-- </div>
						<div class="col-lg-1 col-md-12">
							<div class="language_part">
								<?php //echo do_shortcode('[gtranslate]'); ?>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</header>

<?php
if ( is_front_page() && is_home() ) {?>
<?php if (!empty($samharam_opt['samaram_banner_setting_options']) && $samharam_opt['samaram_banner_setting_options'] == 1) { ?>
	<div class="banner-area">
		<div class="video-area">
			<video class="bv-video"></video>
		</div>
		<div class="language">
			<ul>
				<li> <a href="#"><?php echo esc_html('English','samharam');?></a> </li>
				<li> <a href="#"><?php echo esc_html('Arabic','samharam');?></a> </li>
			</ul>
		</div>
	</div>
	<?php } else{?>
	<div class="video_background_slider bg_video_two">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner_slider owl-carousel">
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['first_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['second_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['third_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['four_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['five_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['six_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['seven_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['eight_slide_text']);?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<?php
	// Default homepage

	} elseif ( is_front_page()){?>

	<?php if (!empty($samharam_opt['samaram_banner_setting_options']) && $samharam_opt['samaram_banner_setting_options'] == 1) { ?>

	<div class="banner-area">
		<div class="video-area">
			<video class="bv-video"></video>
		</div>
		<div class="language">
			<ul>
				<li> <a href="#"><?php echo esc_html('English','samharam');?></a> </li>
				<li> <a href="#"><?php echo esc_html('Arabic','samharam');?></a> </li>
			</ul>
		</div>
	</div>
	<?php } else{?>
		<div class="video_background_slider bg_video_two">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner_slider owl-carousel">
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['first_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['second_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['third_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['four_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['five_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['six_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['seven_slide_text']);?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }?>


	<?php
	//Static homepage

	} elseif ( is_home()){?>

	<?php if (!empty($samharam_opt['samaram_banner_setting_options']) && $samharam_opt['samaram_banner_setting_options'] == 1) { ?>

	<div class="banner-area">
		<div class="video-area">
			<video class="bv-video"></video>
		</div>
		<div class="language">
			<ul>
				<li> <a href="#"><?php echo esc_html('English','samharam');?></a> </li>
				<li> <a href="#"><?php echo esc_html('Arabic','samharam');?></a> </li>
			</ul>
		</div>
	</div>
	<?php } else{?>
		<div class="video_background_slider bg_video_two">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner_slider owl-carousel">
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['first_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['second_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['third_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['four_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['five_slide_text']);?>
						</div>

						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['six_slide_text']);?>
						</div>
						<div class="single_text">
							<?php echo wp_kses_post($samharam_opt['seven_slide_text']);?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }?>
	<?php

	//Blog page

	} else {


$url = wp_get_attachment_url( get_post_thumbnail_id() );
get_header();
?>
<!-- Page Heading Start -->
<section class="page-heading-area background-image" data-src="<?php echo esc_attr($url ); ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 text-center">
				<div class="page-heading-box">
					<?php
					$subtitle = CFS()->get( 'breadcrumb_sub_title' );
					if($subtitle){?>
						<h3><?php // echo CFS()->get( 'breadcrumb_sub_title' );

					echo "Samharam BILINGUAL SCHOOL"; ?></h3>
					<?php
					}?>
					<?php
					$title = CFS()->get( 'breadcrumb_title' );
					if($title){?>
					<h2><?php echo CFS()->get( 'breadcrumb_title' );?></h2>
					<?php
					}else{?>
						<h2><?php the_title();?></h2>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

		<div class="breadcumb_area background-image" data-src="">

		</div>



	<?php

	//everything else

	}

?>






	</div>



	<div id="content" class="site-content">
