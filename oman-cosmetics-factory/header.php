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
	<meta name="robots" content="index,follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="No 1 cosmetics factory in Oman since 1990, Manufacturer of Perfumes">
	<meta name="description" content="OCF leading brand of exquisite perfumes with everlasting fragrance and essence. We have a diverse collection of French and Arabic perfumes for adults ">
	<meta name="keywords" content="cosmetics factory, perfume factory, oman cosmetics factory, perfumes,Arabian perfumes, Arabian oud, male and female perfumes.men fragrances, female fragrances,bhakoors, oriental  fragrances, western fragrance, fragrances evaluate, water-based perfumes, perfume manufacture in oman, private label perfume manufacturing in oman, 
 branded perfumes in oman,arabic perfumes in oman,perfumes for men,ladies perfume,
 oman best perfumes,top selling perfumes uae,best oud perfume in oman,original perfumes">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="English">
	<meta name="revisit-after" content="90 days">

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=AsQKbrh6JB36s17EG5s7Jf0UYNICnUgvAMwbAcVyPPoQLRrqp0xceVQEypn-f3Mp4nMewtMwoTeUtPqG_I0rhg" charset="UTF-8"></script><style>
	/* width */
	::-webkit-scrollbar {
	  width: 10px;
	  border-radius: 5px;
	}

	/* Track */
	::-webkit-scrollbar-track {
	  background: #f1f1f1;
	  border-radius: 5px;
	}

	/* Handle */
	::-webkit-scrollbar-thumb {
	  background: #888;
	  border-radius: 5px;
	}

	/* Handle on hover */
	::-webkit-scrollbar-thumb:hover {
	  background: #555;
	  border-radius: 5px;
	}
</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- preloader start -->
<div id="preloader" class="preloader">
	<div class="loader-logo">
		<img id="cog" src="<?php echo get_template_directory_uri();?>/images/OCF-logo.gif" alt="">
		<span>Since 1990</span>
	</div>

	<div class="preloader-area">
			<div class="spinner">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
    </div>

	<button style="position: absolute;bottom: 0;left: 45%;background: none;color: #000;" onclick="setpageCookie('skip')">Skip or Load to Site</button>
</div>
<script>
	jQuery(document).ready(function($){

	var pageCookie=getCookie("logoanimation");
		console.log(pageCookie);
	if (pageCookie!=undefined && pageCookie==1) {
		jQuery("#preloader").css("display", "none");
		jQuery("body").css('display', 'block');
	} else {
		jQuery("#preloader").css("display", "block");
		jQuery(window).load(function() {
		jQuery("#preloader").delay(2000).fadeOut("slow");});
		document.cookie = "logoanimation=1";
		jQuery("body").css('display', 'block');

	}


	});

	var date = new Date();
	//date.setTime(date.getTime() + (90 * 10000));
	date.setTime(date.getTime()+(hours*60*60*1000));
	document.cookie = 'logoanimation=; expires='+ date.toGMTString()+'; path=/';
	//jQuery.cookie('logoanimation', '0', { expires: date, path: '/' });

	/* setTimeout(function(){
		document.cookie = "logoanimation=1";
	}, 60000);  */

</script>
<style>
 #preloader{
	position: fixed;
	display:none;
	top: 0;    /* making preloader cover all screen */
	right: 0;
	left: 0;
	bottom: 0;
	background-repeat: no-repeat;
	background-position:center; center;
	background-size: auto auto;
	background-color:#B8C0CF;
	z-index:99; /* must be the highest number of all others to cover them all */
}

</style>

<script>

/*
* Loading Animation Logo on first time open site
*/

function setpageCookie(btn) {

	if (btn=="skip") {


		jQuery("#preloader").remove();
		jQuery("body").css('display', 'block ! important');
		document.cookie = "logoanimation=1";
	} else {
		document.cookie = "logoanimation=0";
	}
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
</script>

<!-- preloader end -->


<div id="page" class="site">
	<header>
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
							<img class="logotextimg" src="<?php echo esc_attr($url ); ?>" alt="<?php bloginfo('name') ?>">
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
	</header>

	<div id="content" class="site-content">