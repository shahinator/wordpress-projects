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
	<?php wp_head(); ?>
</head>
<?php
date_default_timezone_set('Asia/Dubai');
$time = date("h:i:sa");
?>

<body <?php body_class(); ?>>
<div id="page" class="site">


<header>
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="header-tpper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <div class="info-list">
                                        <ul>
                                            <li><span>Call Us :	</span> Muscat
                                                <?php echo esc_html($application_opt['application_phone']); ?> | </li>
                                            <li>Salalah
                                                <?php echo esc_html($application_opt['application_phone2']); ?> |</li>
                                            <li><span> Email :  </span>
                                                <?php echo esc_html($application_opt['application_mail']); ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="info-list right-area">
                                        <ul>
                                            <li><span>Time :  <?php echo $time; ?></span>                                     
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <?php $url= $application_opt['application_logo_main']['url']; ?>
                            <img src="<?php echo esc_attr($url ); ?>" alt="<?php bloginfo('name') ?>">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="menu-top">
                        <div class="row">
                            <div class="col-lg-12 col-md-9">
                                <ul>
                                    <li>
                                        <?php
                                            get_search_form();
                                        ?>
                                    </li>
                                    <li><i class="fa fa-dribbble" aria-hidden="true"></i>Eng</li>
                                    <li><i class="fa fa-user-circle-o" aria-hidden="true"></i>Login</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu">
                        <?php
                            wp_nav_menu(array(
                                'menu' => 'header',
                                'theme_location' => 'header',
                                'container' => 'div',
                                'container_class' => 'main-menu',
                                'container_id' => 'application_main_menu',
                                'menu_class' => 'application_menu_area',
                                'menu_id' => 'menu'
                                )
                            );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
	<div id="content" class="site-content">
