<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oman_Cosmetics_Factory
 */
global $oman_cosmetics_factory_opt;
?>

	</div><!-- #content -->


	<footer>
		<div class="newslater-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 mx-auto text-center">
						<?php echo do_shortcode('[contact-form-7 id="336" title="Mailchimp"]');?>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_middle_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<?php dynamic_sidebar('footer_one');?>
					</div>
					<div class="col-lg-3">
						<?php dynamic_sidebar('footer_two');?>
					</div>
					<div class="col-lg-3">
						<?php dynamic_sidebar('footer_three');?>
					</div>
					<div class="col-lg-3">
						<?php dynamic_sidebar('footer_four');?>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p><?php echo wp_kses_post($oman_cosmetics_factory_opt['oman_cosmetics_factory_copyright']);?></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>