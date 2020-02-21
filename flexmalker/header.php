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
<html <?php language_attributes(); ?>>
<html>
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
<link href="<?php echo get_template_directory_uri();?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri();?>/css/responsive.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="<?php echo get_template_directory_uri();?>/css/color-themes/default-theme.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- Place favicon.ico in the root directory -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
<?php wp_head()?>
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header">
    
    	<!-- Header Top One -->
    	<div class="header-top-one">
        	<div class="auto-container">
            	<div class="inner-container clearfix">
                    <?php if (!empty($application_opt['application_email']) && !empty($application_opt['application_email'])) { ?>
                    <!--Top Left-->
                    <div class="top-left">
                    	<ul class="links clearfix">
                        	<li><a href="mailto:<?php echo esc_html($application_opt['application_email']); ?>"><span class="icon flaticon-message"></span><?php echo esc_html('E-Mail:','application');?> <?php echo esc_html($application_opt['application_email']); ?></a></li>
                        </ul>
                    </div>
                    <?php } ?>
                    <!--Top Right-->
                    <div class="top-right clearfix">
                    	<!--social-icon-->
                        <div class="social-icon">
                        	<ul class="clearfix">
                                <?php if (!empty($application_opt['application_facebook']) && !empty($application_opt['application_facebook'])) { ?>
                                <li><a href="<?php echo esc_html($application_opt['application_facebook']); ?>"><span class="fa fa-facebook"></span></a></li>
                                <?php } ?>
                                <?php if (!empty($application_opt['application_twitter']) && !empty($application_opt['application_twitter'])) { ?>
                                <li><a href="<?php echo esc_html($application_opt['application_twitter']); ?>"><span class="fa fa-twitter"></span></a></li>
                                <?php } ?>
                                <?php if (!empty($application_opt['application_instagram']) && !empty($application_opt['application_instagram'])) { ?>
                                <li><a href="<?php echo esc_html($application_opt['application_instagram']); ?>"><span class="fa fa-google-plus"></span></a></li>
                                <?php } ?>                                
                            </ul>
                        </div>
                        <?php if (!empty($application_opt['application_phone']) && !empty($application_opt['application_phone'])) { ?>
                        <ul class="number">
                        	<li><span class="icon fa fa-phone"></span> <?php echo esc_html($application_opt['application_phone']); ?> </li>
                        </ul>
                        <?php } ?>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- Header Top One End -->
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
								<?php $url= $application_opt['application_logo_main']['url']; ?>
                    			<img src="<?php echo esc_attr($url ); ?>" alt="<?php bloginfo('name') ?>">
							</a>
                        </div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                    
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
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
                        </nav>
                        <!-- Main Menu End-->
                        
                    </div>
                    <!--Nav Outer End-->
                    
            	</div>    
            </div>
        </div>
        
    </header>
    <!--End Main Header -->
    


<?php
if ( is_front_page() && is_home() ) {
  // Default homepage
  echo get_template_part( 'template-parts/content', 'slider' );
  } elseif ( is_front_page()){
  // Static homepage
  echo get_template_part( 'template-parts/content', 'slider' );
  } elseif ( is_home()){
  // Blog page
  echo get_template_part( 'template-parts/content', 'slider' );
  } else {

  // Everything else
  echo get_template_part( 'template-parts/content', 'breadcumb' );
  }
?>

 