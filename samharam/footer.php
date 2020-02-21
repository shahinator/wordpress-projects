<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package samharam
 */
global $samharam_opt;
?>

	</div><!-- #content -->
<style>
	.certificate{
		font-size: 18px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 30px;
    padding-bottom: 15px;
    position: relative;									
     	
	}
	.certificate::after{

	}
</style>
	<footer>
		<div class="footer_menu_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="footer_menu">
							<?php if ( has_nav_menu( 'footer' ) ) : ?>
								
									<?php
										wp_nav_menu(
											array(
												'theme_location' => 'footer',
												'menu_class'     => 'footer_menu_tab',
											)
										);
									?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_middle_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12" style="display:none">
						<?php dynamic_sidebar('footer_one');?>
					</div>
					<div class="col-lg-12 col-md-12" style="display:none">
						<?php dynamic_sidebar('footer_two');?>
					</div>
					<div class="col-lg-12 col-md-12" style="display:none">
						<?php dynamic_sidebar('footer_three');?>
					</div>
					<div class="col-lg-5 col-md-4 contact-info">
						<?php dynamic_sidebar('footer_four');?>
					</div>
					<div class="col-lg-4 col-md-4">
						<?php dynamic_sidebar('footer_five');?>
					</div>
					<div class="col-lg-3 col-md-4 text-right">
						<h2  class="certficate">Our Certificates</h2><br/>
						<img style="margin-top:7px;border: 5px solid #A0A0A0;" src="<?php echo SAMHARAM_IMAGES; ?>/cambridge.png" alt="Cambride Certificates">
						
					</div>
				</div>
			</div>
		</div>
		<div class="footer_connected_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h3><?php echo esc_html('Connect','samharam');?></h3>
						<ul>
							<?php if (!empty($samharam_opt['samharam_facebook']) && !empty($samharam_opt['samharam_facebook'])) { ?>
								<li><a href="<?php echo esc_url($samharam_opt['samharam_facebook']); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<?php } ?>
							<?php if (!empty($samharam_opt['samharam_linkedin']) && !empty($samharam_opt['samharam_linkedin'])) { ?>
								<li><a href="<?php echo esc_url($samharam_opt['samharam_linkedin']); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<?php } ?>
							<?php if (!empty($samharam_opt['samharam_youtube']) && !empty($samharam_opt['samharam_youtube'])) { ?>
								<li><a href="<?php echo esc_url($samharam_opt['samharam_youtube']); ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
							<?php } ?>
							<?php if (!empty($samharam_opt['samharam_twitter']) && !empty($samharam_opt['samharam_twitter'])) { ?>
								<li><a href="<?php echo esc_url($samharam_opt['samharam_twitter']); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<?php } ?>
							<?php if (!empty($samharam_opt['samharam_instagram']) && !empty($samharam_opt['samharam_instagram'])) { ?>
								<li><a href="<?php echo esc_url($samharam_opt['samharam_instagram']); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p><?php echo wp_kses_post($samharam_opt['samharam_copyright']);?></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
