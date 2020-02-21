<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Application
 */

?>

<div class="services-more-content">
    <div class="row align-items-center">
        <div class="col-lg-4 col-md-4">
            <div class="item-img">
                <?php the_post_thumbnail();?>
            </div>
        </div>

        <div class="col-lg-8 col-md-8">
            <div class="item-content">
                <h3>Erfahrene Leute können Ihnen mehr helfen</h3>
                <?php the_content();?>
            </div>
        </div>
    </div>
</div>
