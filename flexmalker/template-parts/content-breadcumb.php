<?php 
$url = wp_get_attachment_url( get_post_thumbnail_id() );  
?>
    <!--Page Title-->
    <section class="page-title background-image" data-src="<?php echo esc_attr($url ); ?>">
    	<div class="auto-container">
        	<div class="clearfix">
            	<div class="pull-left">
                	<h1><?php the_title();?></h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Home','application')?></a></li>
                        <li><?php the_title();?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->   