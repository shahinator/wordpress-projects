<?php
/**
 * Template Name: Onepage Home Template
 *
 * Description: Onepage Home Template
 *
 * @package WordPress
 * @subpackage xander
 * @since xander
 */

get_header();

$xander_self_id = xander_original(get_the_ID(), false);
?>
<div class="main-container full-width">
    <div class="clearfix"></div>
        <?php while ( have_posts() ) : the_post(); ?>			
            <?php the_content();?>		
        <?php endwhile; // end of the loop. ?>
    <?php
    $menu_locations = get_nav_menu_locations();
    if (isset($menu_locations['primary'])) :
        $menu = wp_get_nav_menu_object($menu_locations['primary']);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        $menu_items_include = array();
        foreach ($menu_items as $item) {
            $menu_items_include[] = $item->object_id;
        }
        $query = new WP_Query(array('post_type' => 'xander_section', 'post__in' => $menu_items_include, 'posts_per_page' => -1, 'orderby' => 'post__in'));
        if ($query->have_posts()):
            while ($query->have_posts()): $query->the_post(); ?>
                <div id="<?php echo esc_attr(xander_sectionID(xander_original($post->ID, false), 'section-')); ?>" class="section-wraper">
                    <?php the_content(); ?>
                    <!-- Footer edit section -->
                    <?php echo xander_edit_section(); ?>
                </div>
                <?php //Section loop ends    ?>
                <?php
            endwhile;
        endif;
        wp_reset_postdata();
    endif;
    ?>
</div>
<?php get_footer(); ?>