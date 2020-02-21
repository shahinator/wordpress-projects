<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oman_Cosmetics_Factory
 */
global $oman_cosmetics_factory_opt;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- preloader start -->
<div id="preloader" class="preloader">

<div class="loader_content">

	<div class="loader-logo">
		<img id="cog" src="<?php echo get_template_directory_uri();?>/images/OCF-logo.gif" alt="">
		<span>Since 1999</span>
	</div>
    <div class="preloader-area">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
    </div>

		</div>

</div>
<!-- preloader end -->


<div id="page" class="site">
	<div class="header-top-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="logo-area">
						<a href="<?php echo esc_url(home_url('/')); ?>">
						<img id="cog" src="<?php echo get_template_directory_uri();?>/images/OCF-logo.gif" alt="<?php bloginfo('name') ?>"> 
						<?php $url= $oman_cosmetics_factory_opt['oman_cosmetics_factory_logo_main']['url']; ?>
						<img src="<?php echo esc_attr($url ); ?>" alt="<?php bloginfo('name') ?>">
						</a>
					</div>

				</div>
				<div class="col-lg-3 col-md-3 col-sm-12">
				</div>
			</div>
		</div>
	</div>
	<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-menu-area">
						<?php oman_cosmetics_factory_main_menu(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="content" class="site-content">
