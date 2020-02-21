<?php
/**
 * The template for displaying all pages
 * Template Name: Contact Us
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package samharam
 */
global $samharam_opt;
get_header();
?>


<div class="contact_page_area">
	<div class="container-fluid">
		<div class="row">			
			<?php
				while(have_posts()): the_post();				
			?>
			<?php the_content();?>
			<?php
				endwhile; // End of the loop.
				wp_reset_query();
			?>
		</div>
	</div>
</div>



<div class="google_map_area">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-10 mx-auto">
            <div class="row">
               <div class="col-lg-5">
			   		<?php echo wp_kses_post($samharam_opt['google_map']);?>	
               </div>
            </div>
         </div>
      </div>
   </div>
   <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3813.761142619629!2d54.153597814872015!3d17.084332388260858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3dd3e126cb7b9631%3A0x9b1528bc53f568ed!2sSamharam+Private+School!5e0!3m2!1sen!2sbd!4v1556795979700!5m2!1sen!2sbd" width="100%" height="400" frameborder="0" allowfullscreen=""></iframe>
</div>



<?php get_footer();
