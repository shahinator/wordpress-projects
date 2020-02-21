<?php
/**
 * The template for displaying all pages
 * Template Name: Color and Size Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
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
<div class="inner-layout-area color-size">
	<div class="container">
		<div class="row pb-3">
			<div class="col-lg-12">
				<h3>Pullover | Größe / Size</h3>
				<p>Natürlich dürfen die Textilien nicht zu klein oder zu groß ausfallen. Wir haben Euch deswegen eine Größentabelle parat gestellt, mit der Ihr schnell selbst nachmessen könnt.</p>
				<div class="row inner-row">
					<div class="col-lg-8">
						<p><b>Trotz Nachmessen noch unsicher?</b> Kein Problem, wir senden Euch gerne ein Muster zur Anprobe zu. So könnt Ihr gleichzeitig auch unsere Qualität testen. Für weitere Fragen zum Anprobemuster kontaktiert uns bei <a href="https://bit.ly/2FyOrhn">Whatsapp</a> oder <a href="https://www.instagram.com/printagram18/?hl=de">Instagram</a>.</p>
					</div>				
					<div class="col-lg-4">
						<a href="<?php echo esc_url(home_url('/')); ?>angebot" class="btn btn-lg btn-primary">Jetzt Angebot anfordern</a>
					</div>
				</div>
				
			</div>
		</div>
		<div class="row pb-3">
			<div class="col-lg-6 col-md-6">
				<img src="<?php echo get_template_directory_uri();?>/images/red_t_shirt.png" alt="" class="custom-images">
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="pullover-info">
					<table class="table">
						<thead>
							<tr>
							<th scope="col">Pullover</th>
							<th scope="col">A</th>
							<th scope="col">B</th>
							<th scope="col">C</th>
							</tr>
						</thead>
						<tbody>
							<?php the_field('pullover_info'); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<h3>T-Shirt | Größe / Size</h3>				
			</div>							
			<div class="col-lg-4">
				<a href="<?php echo esc_url(home_url('/')); ?>angebot" class="btn btn-lg btn-primary">Jetzt Angebot anfordern</a>
			</div>
		</div>
		<div class="row pb-3">
			<div class="col-lg-6 col-md-6">
				<img src="<?php echo get_template_directory_uri();?>/images/t_shirt.png" alt="" class="custom-images">
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="pullover-info">
					<table class="table">
						<thead>
							<tr>
							<th scope="col">T-Shirt</th>
							<th scope="col">A</th>
							<th scope="col">B</th>
							</tr>
						</thead>
						<tbody>
							<?php the_field('t_shirt_info'); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-lg-12">
				<h3>Farben / Colors</h3>
				<p>Die Auswahl der Farben ist ein wichtiges Thema für Eure Textilien. Die unten angezeigten Palette ist sofort erhältlich und kann jederzeit bestellt werden. Bei Farbunsicherheiten oder wenn eine Farbe unten nicht angezeigt wird, könnt Ihr uns gerne kontaktieren auf <a href="https://bit.ly/2FyOrhn">Whatsapp</a> oder <a href="https://www.instagram.com/printagram18/?hl=de">Instagram</a>.</p>
				<p><font color="#FF0000"><strong>ACHTUNG! Es handelt sich hier nur um einen kleinen Teil der Farbpalette!</strong></font></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
					<img src="<?php echo get_template_directory_uri();?>/images/color-table.jpg" alt="" class="customimages">
			</div>
							
			<div class="col-lg-4">
				<a href="<?php echo esc_url(home_url('/')); ?>angebot" class="btn btn-lg btn-primary">Jetzt Angebot anfordern</a>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
