<?php
/**
 * The template for displaying all pages
 * Template Name: About Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Oman_Cosmetics_Factory
 */

get_header();
global $oman_cosmetics_factory_opt;
?>
<div class="breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-right">
				<ul>
					<li> <a href="<?php echo esc_url(home_url('/')); ?>"> <?php echo esc_html('Home','oman-cosmetics-factory');?> </a> </li>
					<li><?php the_title();?></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="our-company-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 mx-auto"> 
                <div class="row">
                    <div class="col-lg-6 text-center mx-auto">
                        <div class="section-title">
                            <h2> <?php echo esc_html($oman_cosmetics_factory_opt['company_text']);?></h2>
                            <span><?php echo esc_html($oman_cosmetics_factory_opt['company_subtext']);?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="image">                
                            <?php $url = $oman_cosmetics_factory_opt['company_image']['url'] ?>
                            <img src="<?php echo esc_attr($url ); ?>" alt="<?php bloginfo('name') ?>">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="content">
                            <h3> <?php echo esc_html($oman_cosmetics_factory_opt['company_title']);?></h3>
                            <p><?php echo wp_kses_post($oman_cosmetics_factory_opt['company_content']);?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="why-choose-us-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 mx-auto"> 
                <div class="row">
                    <div class="col-lg-6 text-center mx-auto">
                        <div class="section-title">
                            <h2> <?php echo esc_html($oman_cosmetics_factory_opt['choose_text']);?></h2>
                            <span><?php echo esc_html($oman_cosmetics_factory_opt['choose_subtext']);?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php 
                    $args = array(
                        'post_type' => 'oman_choose',
                        'posts_per_page' =>2,
                        'order' => 'ASC'
                    );
                    // Custom query.
                    $blog_post = new WP_Query( $args );                    
                    // Check that we have query results.
                    if ( $blog_post->have_posts() ) {                    
                        // Start looping over the query results.
                        while ( $blog_post->have_posts() ) {                    
                            $blog_post->the_post();                    
                            $image = wp_get_attachment_url( get_post_thumbnail_id() );?>
                            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                                <div class="single-choose">
                                    <div class="content">
                                        <h3><?php the_title();?></h3>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>

                    <?php 
                    
                        }
                    
                    }
                    
                    // Restore original post data.
                    wp_reset_postdata();
                    
                    ?>     
                </div>
            </div>
        </div>
    </div>
</div>
<div class="team-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"> 
                <div class="row">
                    <div class="col-lg-6 text-center mx-auto">
                        <div class="section-title">
                            <h2> <?php echo esc_html($oman_cosmetics_factory_opt['team_text']);?></h2>
                            <span><?php echo esc_html($oman_cosmetics_factory_opt['team_subtext']);?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php 
                    $args = array(
                        'post_type' => 'oman_team',
                        'posts_per_page' =>2,
                        'order' => 'ASC'
                    );
                    
                    // Custom query.
                    $blog_post = new WP_Query( $args );
                    
                    // Check that we have query results.
                    if ( $blog_post->have_posts() ) {
                    
                        // Start looping over the query results.
                        while ( $blog_post->have_posts() ) {                    
                            $blog_post->the_post();                    
                            $image = wp_get_attachment_url( get_post_thumbnail_id() );?>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-team">
                                    <div class="image">
                                        <img src="<?php echo esc_url($image); ?>" alt="<?php the_title();?>">
                                    </div>
                                    <div class="content">
                                        <h2 style="text-align:center;"><?php the_title();?></h2>
                                        <?php the_content();?>
                                       
                                    </div>
                                </div>
                            </div>

                    <?php 
                    
                        }
                    
                    }
                    
                    // Restore original post data.
                    wp_reset_postdata();
                    
                    ?>     
                </div>
            </div>
        </div>
    </div>
</div>
<?php $background_url_bg = $oman_cosmetics_factory_opt['testimonial_bg_image']['url'] ?>
<div class="testimonial-area background-image" data-src="<?php echo $background_url_bg;?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 text-center mx-auto">
                <div class="section-title">
                    <h2> <?php echo esc_html($oman_cosmetics_factory_opt['testimonial_title']);?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-area-slider owl-carousel">
                <?php 
                    $args = array(
                        'post_type' => 'testimonial',
                        'posts_per_page' =>-1,
                        'order' => 'ASC'
                    );                
                    // Custom query.
                    $blog_post = new WP_Query( $args );
                    
                    // Check that we have query results.
                    if ( $blog_post->have_posts() ) {            
                    // Start looping over the query results.
                    while ( $blog_post->have_posts() ) {                    
                        $blog_post->the_post();                    
                        $image = wp_get_attachment_url( get_post_thumbnail_id() );
                ?>
                    <div class="single-testimonial-area">
                        <div class="row">
                            <div class="col-lg-6 mx-auto">
                                <div class="testimonial-content">
                                <i class="fa fa-quote-left" aria-hidden="true"></i><?php the_content(); ?><i class="fa fa-quote-right" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testimonial-info">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4><?php the_title(); ?></h4>
                                            <?php if( get_field('country') ): ?>
                                                <h5><?php the_field('country'); ?></h5>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                    
                    }
                
                }
                
                // Restore original post data.
                wp_reset_postdata();
                
                ?>     

            </div>

            </div>
        </div>
    </div>
</div>

<div class="our-strategic-approach-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mx-auto">
                <div class="section-title">
                    <h2> <?php echo esc_html($oman_cosmetics_factory_opt['strategic_approach_title']);?></h2>
                    <span><?php echo esc_html($oman_cosmetics_factory_opt['strategic_approach_subtitle']);?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
                $args = array(
                    'post_type' => 'approach',
                    'posts_per_page' =>4,
                    'order' => 'ASC'
                );                
                // Custom query.
                $blog_post = new WP_Query( $args );
                
                // Check that we have query results.
                if ( $blog_post->have_posts() ) {            
                // Start looping over the query results.
                while ( $blog_post->have_posts() ) {                    
                    $blog_post->the_post();                    
                    $image = wp_get_attachment_url( get_post_thumbnail_id() );
            ?>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="single-approach-area">
                    <div class="icon">
                        <img src="<?php echo esc_attr($image ); ?>" alt="<?php bloginfo('name') ?>">
                    </div>
                    <div class="content">
                        <h3><?php the_title();?></h3>
                        <p><?php echo wp_trim_words( get_the_content(), 25, '');?></p>
                    </div>
                </div>
            </div>
            <?php 
                
                }
            
            }
            
            // Restore original post data.
            wp_reset_postdata();
            
            ?>
        </div>
    </div>
</div>


<div class="production-capability-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center mx-auto">
                <div class="section-title">
                    <h2> <?php echo esc_html($oman_cosmetics_factory_opt['capability_title']);?></h2>
                    <span><?php echo esc_html($oman_cosmetics_factory_opt['capability_subtitle']);?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $background_url_bg = $oman_cosmetics_factory_opt['capability_image']['url'] ?>
<div class="production-capability-content-area background-image" data-src="<?php echo $background_url_bg;?>">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 ml-auto">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h2>Manufacturing Faclities</h2>                        
                        <p><strong>"Oman Cosmetics Factory “</strong> studies your project with you.
                        From fragrance creation to package design, packaging and shipping, WE accompany you for the <strong>entire achievement of Your dreams ...</strong></p>
                        <p>
                        Our home perfumer uses <strong>the finest oils</strong> to create your <strong>high quality perfumes</strong> . Furthermore, we only use the packaging from the <strong>best glassmanufacturers, caps and box producers, mainly from France</strong> . All the steps of the production are made in <strong>our own factory</strong> , for a production <strong>100 % Made in Oman</strong> .</p>
                        <p>
                        Do not hesitate to share with us your ideas, we will <strong>create and develop the perfume that will enhance your brand,</strong> for a very <strong>reasonable price.</strong> </p>
                    </div>
                    <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                        <h2>MANUFACTURING FACILITIES</h2>
                        <p>Our state-of-the-art manufacturing facilities are optimized for performance, agility and excellence. We provide speedy and superior service within the framework your timeline, budget and quality expectations.</p>
                        <h4>PERFUMERY TEAM</h4>
                        <p>Perfumers have their hands in both the artistry and the technical aspects of scent creation. They need to understand how each fragrance material interacts while also understanding how to create a fragrance that enhances a product’s image.</p>
                        <p>The key attributes of our perfumery team include:</p>
                        <ul>
                            <li>•	The analytical expertise and unsurpassed creativity to develop winning fragrances across a wide variety of product categories, difficult base chemistries and extreme conditions.</li>
                            <li>•	Knowledge of international regulatory requirements based on years of experience.</li>
                        </ul>

                    </div>
                    <div class="tab-pane fade" id="perfume" role="tabpanel" aria-labelledby="perfume-tab">
                        <h2>Frangance Evaluators</h2>
                        <p>Our fragrance evaluators are meticulously trained to make sure that the fragrances our perfumers create are perfectly aligned with the client’s needs. Much like perfumers, they are trained to understand raw material palettes so they can talk about not only the emotions the scent invokes, but also the science behind it.</p>
                        <p>Our fragrance evaluators are a critical part of our client teams. This helps ensure that our clients have their own specialist overseeing the development of their unique fragrances.</p>
                        <p>Their unique skills and tools include:</p>
                        <ul>
                            <li>• Knowledge of fragrance preferences in a broad range of distribution channels and demographics.</li>
                            <li>• An in-depth understanding of each client’s brand identity and olfactive profile.</li>
                            <li>• Insight into key current and future fragrance trends powered by a comprehensive digital library for sources of cutting-edge inspiration.</li>
                            <li>•	Our philosophy is to know the client, grow together and offer impeccable service and quality at  the best price ..</li>
                        </ul>
                    </div>
                </div>                                
                <ul class="nav nav-tabs" id="myTab" role="tablist"> 	
                    <li class="nav-item">
                        <a class="nav-link  show active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                            <div class="image-wrapper">
                                <div class="images">
                                   <img src="http://kisalou.com/wp/wp-content/uploads/2019/12/one.jpg" alt="">
                                    <div class="overlay">
                                        <h2>Manufacturing Faclities</h2>
                                    </div>                                    
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">
                            <div class="image-wrapper">
                                <div class="images">
                                   <img src="http://kisalou.com/wp/wp-content/uploads/2019/12/three.jpg" alt="">
                                    <div class="overlay">
                                        <h2>Perfumery Team</h2>
                                    </div>                                    
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="perfume-tab" data-toggle="tab" href="#perfume" role="tab" aria-controls="perfume" aria-selected="true">
                            <div class="image-wrapper">
                                <div class="images">
                                   <img src="http://kisalou.com/wp/wp-content/uploads/2019/12/two.jpg" alt="">
                                    <div class="overlay">
                                        <h2>Fragrance Evaluators</h2>
                                    </div>                                    
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();