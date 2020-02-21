<?php
/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Review Page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Application
 */  
get_header();
?>
<!-- Page Heading Start -->
<section class="page-heading-area">
	<div class="container">
		<div class="row">
			<div class="text-center col-lg-12">
				<div class="page-heading-box">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		</div>
	</section>
</div>

	<div class="review-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-l7 col-md-7 col-sm-12">
					<div class="content">
						<h4>Wie zufrieden waren Sie mit unserem Service?</h4>
						<p>Wir würden uns sehr freuen, wenn Sie an dieser Stelle unseren Service und unsere kostenlose Beratungsleistung bewerten würden!</p>
						<form method="post">
							<div class="row">								
								<div class="col-lg-12 acurate">
									<label>Meine Sterne für die VFD-Kassel GmbH:</label>
									<input  type="hidden" style="display:none" id="star" name="star">   
									<fieldset class="rating" name="star">
										<input type="radio" id="star5" name="rating" value="5" />
										<label class = "full" for="star5" title="Sehr gut - 5 Sterne"></label>
										<input type="radio" id="star4" name="rating" value="4" />
										<label class = "full" for="star4" title="Gut - 4 Sterne"></label>
										<input type="radio" id="star3" name="rating" value="3" />
										<label class = "full" for="star3" title="Befriedidigend - 3 Sterne"></label>
										<input type="radio" id="star2" name="rating" value="2" />
										<label class = "full" for="star2" title="Geht so - 2  Sterne"></label>
										<input type="radio" id="star1" name="rating" value="1" />
										<label class = "full" for="star1" title="Richtig übel - 1 Stern"></label>
									</fieldset>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 acurate">
									<label>Versicherungsthema</label>
									<select name="title">
										<option value="krankenverscherung">Krankenversicherung</option>
										<option value="sachversicherung">Sachversicherung</option>
										<option value="lebensversicherung">Lebensversicherung</option>
										<option value="leistungsfall">Leistungsfall</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 acurate">
									<label>Meine Erfahrung mit der VFD-Kassel GmbH (optional)</label>
									<textarea name="text" placeholder="Meine Erfahrung mit der VFD-Kassel GmbH (optional)"> </textarea>								
									
								</div>
							</div>
							<div class="row" style="display:none">
								<div class="col-lg-12 acurate">
									<label>Ihre Emailadresse (wird nicht veröffentlicht)</label>
									<input type="email" name="email" placeholder="test@email.com">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 acurate">
									<label>So soll der Name erscheinen:</label>
									<input type="text" name="name" placeholder="Ihr Name oder Initialen">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 acurate">						
									<button type="submit" name="BtnSubmit">Bewertung absenden</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-12">
					<div class="image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/star.png" alt="star">
						<div class="rating-box">
							<a href="<?php echo esc_url(home_url('/')); ?>bewertungen" target="_blank">

							<?php
								global $wpdb;

								$totalstart = $wpdb->get_var( 'SELECT SUM(star) FROM wp_review');//total 243
								$avarage = $wpdb->get_var( 'SELECT round(AVG(star),2) FROM wp_review');//total 243
								$customers = $wpdb->get_results("SELECT * FROM wp_review  ORDER BY timestamp DESC LIMIT 1");
								$last_review_date = date('m/Y', strtotime($customers[0]->timestamp));
							?>
								<span><?php echo $totalstart; ?> Bewertungen</span>
								<span>
									<strong><?php echo $avarage; ?></strong>
									<ul>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
									</ul>
								</span>
								<span><?php echo $last_review_date; ?><span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



<?php
get_footer();
