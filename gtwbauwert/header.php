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
    <meta name="format-detection" content="telephone=no">
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
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
        <!-- Start header -->
        <header id="header" class="site-header header-style-3">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-6">
                            <p><?php echo esc_html($application_opt['application_welcome']); ?></p>
                        </div>
                        <div class="col col-md-6">
                            <div class="contact-info">
                                <ul>
                                    <li><a href="tel:+4960369897670"><i class="fi flaticon-help"></i> <?php echo esc_html($application_opt['application_phone']); ?></a></li>
                                    <li><a href = "mailto: <?php echo esc_html($application_opt['application_mail']); ?>"><i class="fi flaticon-mail-1"></i> <?php echo esc_html($application_opt['application_mail']); ?> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end topbar -->
            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>						
						<a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
								<?php $url= $application_opt['application_logo_main']['url']; ?>
                    			<img src="<?php echo esc_attr($url ); ?>" alt="<?php bloginfo('name') ?>">
							</a>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <?php 
							wp_nav_menu(array(
								'menu' => 'header',
								'theme_location' => 'header',
								'container' => 'div',
								'container_class' => 'main-menu',
								'container_id' => 'application_main_menu',
								'menu_class' => 'application_menu_area nav navbar-nav',
								'menu_id' => 'menu-main'
								)
							);
						?>
                    </div><!-- end of nav-collapse -->
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->

	<div id="content" class="site-content">
