<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xander
 */
global $xander_opt;

?>

	<!-- Main Header start -->
	<header class="main-header">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img  class="logo-white" src="<?php echo esc_url(xander_logo_url(XANDER_IMAGES . '/logo.png'));?>" alt="<?php bloginfo('name') ?>">
					<img  class="logo-black" src="<?php echo esc_url(xander_logo_url(XANDER_IMAGES . '/logo-black.png'));?>" alt="<?php bloginfo('name') ?>">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">					
					<?php xander_main_menu(); ?>
                </div>
            </div>
        </nav>
    </header>

