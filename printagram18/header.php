<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Printagram18_Official_Website
 */
global $printagram18_opt;
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
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/jquery-ui.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.css">
    <!-- flipclock css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/simplyCountdown.theme.default.css"/>
    <!-- font-awesome css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">
    <!-- share button css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/shareButtons.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <!-- modernizr css -->
    <script src="<?php echo get_template_directory_uri();?>/js/vendor/modernizr-2.8.3.min.js"></script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
       <!-- Header Area Start Here -->
	   <header>
            <div class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="logo-area">
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <?php $url= $printagram18_opt['printagram18_logo_main']['url']; ?>
                                    <img src="<?php echo esc_attr($url ); ?>" alt="<?php bloginfo('name') ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 text-right">
                            <div class="main-menu">
                                <nav>
								<?php 
									wp_nav_menu(array(
										'menu' => 'header',
										'theme_location' => 'header',
										'container' => 'div',
										'container_class' => 'main-menu',
										'container_id' => 'printagram18_main_menu',
										'menu_class' => 'printagram18_menu_area',
										'menu_id' => 'menu'
										)
									);
								?>

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End Here -->

	<div id="content" class="site-content">
