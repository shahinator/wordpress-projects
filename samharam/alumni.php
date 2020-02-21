<?php
/**
 * The template for displaying all pages
 * Template Name: Alumni Page
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

<!-- Blog one area start Here -->
<div class="Blogone-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="row">

<?php 

$alumni = new WP_Query(array(
  'post_type' => 'saharam_alumni',
  'posts_per_page'=> -1,
  'order' => 'ASC'
));
?>
<?php while($alumni -> have_posts()): $alumni->the_post();
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full-thumbnail' );

?>	

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="single-blog">
            <div class="blog-img blogimg1 background-image" data-src="<?php echo $image[0] ;?>">
                <div class="date">
                    <h4><?php samharam_posted_on(); ?></h4>
                </div>
            </div>
            <div class="blog-content">
                <h4><a href="#"><?php the_title();?></a></h4> 
                <?php the_content(); ?>

            </div>
        </div>
    </div>


<?php   
    endwhile; 
  wp_reset_query();?>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                <!-- blog One side bar area start Here-->

                <aside>
                    <div class="sidebar-widgect">
                        <div class="singleside-widgect">
                            <div class="widgect-title">
                                <h3>Search</h3>
                            </div>
                            <div class="serch-widgect">
                                <input id="serch" name="serch" type="text" placeholder="Enter Keyword......." />
                                <input class="submit" name="submit" type="submit" value="Search" />
                            </div>
                        </div>
                        <div class="singleside-widgect">
                            <div class="widgect-title">
                                <h3>Recent News</h3>
                            </div>
                            <div class="recentnews-widgect">
                                <div class="recentnews-list">
                                    <div class="single-recentnews">
                                        <div class="recentnews-img">
                                            <a href="#"><img src="http://samharam.estringoman.com/wp-content/uploads/2019/05/1.jpg" alt="imags" /></a>
                                        </div>
                                        <div class="recentnews-contetn">
                                            <div class="recentnews-title">
                                                <h4><a href="#">JEducation is the backbone of a nation....</a></h4> 20 Oct, 2017

                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-recentnews">
                                        <div class="recentnews-img">
                                            <a href="#"><img src="http://samharam.estringoman.com/wp-content/uploads/2019/05/2.jpg" alt="imags" /></a>
                                        </div>
                                        <div class="recentnews-contetn">
                                            <div class="recentnews-title">
                                                <h4><a href="#">JEducation is the backbone of a nation....</a></h4> 15 Aug, 2017

                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-recentnews">
                                        <div class="recentnews-img">
                                            <a href="#"><img src="http://samharam.estringoman.com/wp-content/uploads/2019/05/3.jpg" alt="imags" /></a>
                                        </div>
                                        <div class="recentnews-contetn">
                                            <div class="recentnews-title">
                                                <h4><a href="#">JEducation is the backbone of a nation....</a></h4> 30 Nov, 2017

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="singleside-widgect">
                            <div class="widgect-title">
                                <h3>Tag</h3>
                            </div>
                            <div class="tag-widgect">
                                <ul>
                                    <li class="active"><a href="#">Educare</a></li>
                                    <li><a href="#">class</a></li>
                                    <li><a href="#">science</a></li>
                                    <li><a href="#">team</a></li>
                                    <li><a href="#">biology</a></li>
                                    <li><a href="#">learning</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="singleside-widgect">
                            <div class="widgect-title">
                                <h3>Instagram</h3>
                            </div>
                            <div class="inastagram-widgect">
                                <ul>
                                    <li>
                                        <a href="#"><img src="http://samharam.estringoman.com/wp-content/uploads/2019/05/1.jpg" alt="inastagram" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="http://samharam.estringoman.com/wp-content/uploads/2019/05/2.jpg" alt="inastagram" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="http://samharam.estringoman.com/wp-content/uploads/2019/05/3.jpg" alt="inastagram" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="http://samharam.estringoman.com/wp-content/uploads/2019/05/4.jpg" alt="inastagram" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="http://samharam.estringoman.com/wp-content/uploads/2019/05/5.jpg" alt="inastagram" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="http://samharam.estringoman.com/wp-content/uploads/2019/05/6.jpg" alt="inastagram" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- blog One side bar area end Here-->

            </div>
        </div>
    </div>
</div>
<!-- Blog one area end Here -->


<?php get_footer();
