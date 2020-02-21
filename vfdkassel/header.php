<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Application
 */
global $application_opt;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicons/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicons/android-icon196.png" sizes="196x196">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicons/favicon32.png" sizes="32x32">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicons/favicon16.png" sizes="16x16">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/images/favicons/apple-touch-icon-180.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/images/favicons/apple-touch-icon-167.png" sizes="167x167">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/images/favicons/apple-touch-icon-152.png" sizes="152x152">
    <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri();?>/images/favicons/winsq70.png">
    <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri();?>/images/favicons/winsq150.png">
    <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri();?>/images/favicons/winsq310x150.png">
    <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri();?>/images/favicons/winsq310.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header>
		<div class="header-top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<div class="logo">
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<?php $url= $application_opt['application_logo_main']['url']; ?>
                    			<img src="<?php echo esc_attr($url ); ?>" alt="<?php bloginfo('name') ?>">
							</a>
						</div>
					</div>
					<?php if (!empty($application_opt['application_mail']) && !empty($application_opt['application_mail'])) { ?>
					<div class="col-sm-12 col-md-3">
						<div class="info">
							<a href="mailto:<?php echo esc_html($application_opt['application_mail']); ?>">
								<i class="fa fa-envelope-open-o" aria-hidden="true"></i>
								<h6><?php echo esc_html($application_opt['application_mail']); ?></h6>
								<span>Schreiben Sie uns</span>
							</a>
						</div>
					</div>
					<?php } ?>
					<?php if (!empty($application_opt['application_phone']) && !empty($application_opt['application_phone'])) { ?>
						<div class="col-sm-12 col-md-2">
							<div class="info ">
								<a href="tel:<?php echo esc_html($application_opt['application_phone']); ?>">
									<i class="fa fa-phone" aria-hidden="true"></i>
									<h6><?php echo esc_html($application_opt['application_phone']); ?> </h6>
									<span>Rufen Sie uns an</span>
								</a>
							</div>
						</div>
					<?php } ?>

					<?php if (!empty($application_opt['application_quote']) && !empty($application_opt['application_quote'])) { ?>
					<div class="col-sm-12 col-md-3">
						<div class="request-quote">
							<a href="<?php echo esc_html($application_opt['application_quote_url']); ?>"><i class="fa fa-bars" aria-hidden="true"></i><?php echo esc_html($application_opt['application_quote']); ?></a>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="main-menu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?php 
							wp_nav_menu(array(
								'menu' => 'header',
								'theme_location' => 'header',
								'container' => 'div',
								'container_class' => 'main-menu',
								'container_id' => 'application_main_menu',
								'menu_class' => 'application_menu_area',
								'menu_id' => 'menu-main'
								)
							);
						?>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
