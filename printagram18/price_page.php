<?php
/**
 * The template for displaying all pages
 * Template Name: Prise Template
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Printagram18_Official_Website
 */

get_header();

$url = wp_get_attachment_url( get_post_thumbnail_id() );  
get_header();
?>
<!-- Page Heading Start -->
<section class="page-heading-area background-image" data-src="<?php echo esc_attr($url ); ?>">
	<div class="container">
		<div class="row">
			<div class="text-center col-lg-12">
				<div class="page-heading-box">
					<h2></h2>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="inner-layout-area price-table">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Unsere Preislisten</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="single-price">
					<h4>Pullover</h4>
					<div class="content">
						<ul>
							<li>1-4 / 34.99€</li>
							<li>5-10 / 31.99€</li>
							<li>11-30 / 27.99€</li>
							<li>31-50 / 26.99€</li>
							<li>51-100 / 25.99€</li>
							<li>ab 101 / 20.99€</li>
						</ul>	
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="single-price">
					<h4>T-shirts</h4>
					<div class="content">
						<ul>
							<li> 1-4 / 30,99€ </li>
							<li> 5-10 / 24,99€ </li>
							<li> 11-30 / 21,99€ </li>
							<li> 31-50 / 19,99€ </li>
							<li> 51-100 / 18,99€ </li>
							<li> ab 101 / 16,99€ </li>
						</ul>	
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="single-price">
					<h4>Personalisierung bei Sets <br> (T-Shirt und Pullover)</h4>
					<div class="content">
						<ul>
							<li> Nacken oder Rücken 5,00€ </li>
							<li> Ärmel 5,00€ </li>
							<li> Flaggen 4,00€ </li>
						</ul>
						<small>
							Alle Personalisierungen sind bei Pullover und T-Shirt dabei. Bsp. Druck auf dem Ärmel bei Pullover und T-Shirt mit Namen. 
							Bsp. Druck mit Flaggen der jeweiligen Schüler auf Pullover und T-Shirt (Rückseite)
						</small>
					</div>					
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="single-price">
					<h4>Personalisierung Textilien</h4>
					<div class="content">
						<ul>
							<li> Nacken oder Rücken 4,00€ </li>
							<li> Kapuze 3,00€ (nur Pullover) </li>
							<li> Ärmel 3,00€ </li>
							<li> Flaggen 3,00€ </li>
						</ul>	
					</div>
				</div>
			</div>			
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="single-price">
					<h4>Ärmeldruck allgemein!</h4>
					<div class="content">
						<ul>
							<li> je Ärmel +2,00€ (nicht personalisiert) </li>
						</ul>	
					</div>
					<hr>
					<h4>Motivwechsel</h4>
					<div class="content">
						<ul>
							<li> Motivwechsel 3,00€</li>							
						</ul>	
					</div>					
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="single-price">					
					<h4>Abschlussarmband</h4>
					<div class="content">
						<ul>
							<li>Gratis in jeder Set-Bestellung oder bei unseren Aktionen auf <a href="https://www.instagram.com/printagram18/?hl=de">Instagram</a>. Ansonsten 1€ pro Stück </li>							
						</ul>	
					</div>
				<hr>
					<h4>Express</h4>
					<div class="content">
						<ul>
							<li>Express Versand 3€<br>
								Ware in 8-10 Werktagen garantiert.
							</li>							
						</ul>	
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>
<?php
get_footer();
