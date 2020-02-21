<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Xander
 */

?>

<div  id="post-<?php the_ID(); ?>" <?php post_class('post blog-inner-col'); ?>>
	<?php the_post_thumbnail( 'blog-thumb', array( 'class' => 'img-responsive' ) ); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="blog-inner-text">
                <ul class="meta_info2">
                    <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php the_time('F jS, Y') ?></li>
                    <li><i class="fa fa-user" aria-hidden="true"></i> <?php the_author();?></li>
                    <li><i class="fa fa-comments-o" aria-hidden="true"></i> <?php comments_popup_link( 'No comments', '1 comment', '% comments', 'comments-link', 'Comments are off for this post');
	    			?></li>
                    <li><i class="fa fa-tag" aria-hidden="true"></i> <?php the_category( ', ' ); ?></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="blog-inner-text">
                <h4><?php the_title();?></h4>
				<?php the_content();?>       
				<?php echo xander_wp_link_pages();?>
            </div>
        </div>
    </div>
    
    <?php 
        if(function_exists('xander_social_share')){
            xander_social_share();    
        } 
    ?>
</div><!-- #post-<?php the_ID(); ?> -->
