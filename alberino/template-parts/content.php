<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Application
 */

?>

<div class="blog-deatils">
	<div class="row">
		<div class="col-lg-12">
			<div class="image">
				<?php the_post_thumbnail('full');?>
			</div>
			<div class="content">
				<h4><?php the_title(); ?></h4>				
				<span>veröffentlicht von <a href="#"><?php the_author();?></a> in <a href=""><?php the_category( ', ' ); ?></a></span>				
				<?php the_content();?>
			</div>
		</div>
	</div>
</div>
