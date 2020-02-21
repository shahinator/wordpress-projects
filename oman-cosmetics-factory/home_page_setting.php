<?php
/**
 * The template for displaying all pages
 * Template Name: Home Page
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

<section class="slider-area">


    <div class="hero-slider owl-carousel">

            <?php 
                $count=1;
                $slider = new WP_Query(array(
                'post_type' => 'slider',
                'posts_per_page'=> -1,
                'order' => 'ASC'
                ));	
                while($slider -> have_posts()): $slider->the_post();
                $url = wp_get_attachment_url( get_post_thumbnail_id() );
                $image = oman_cosmetics_factory_Resize( $url, 1920, 700, true, true, true );
            ?>

        <div class="hero-single-slider" style="background-image: url(<?php echo $image;?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="hero-content text-center">
                            <h2 class="hero-sub-title"><?php the_field('slider_subtitle'); ?></h2>
                            <h3 class="hero-title"><?php the_title();?></h3>
                            <?php the_content(); ?>
                            <!--div class="donate-now">
                                <a href="<?php the_field('slider_button_url'); ?>" class="slider-btn"><?php the_field('slider_button'); ?></a>
                            </div-->
                        </div><!-- .hero-content END -->
                    </div>
                </div><!-- .row END -->
            </div><!-- .container END -->
            <div class="overlay black-bg"></div>
        </div><!-- .hero-single-slider END -->


        <?php
                $count++;
                endwhile; // End of the loop.
                wp_reset_query();
            ?>

    </div><!-- .hero-slider END -->
</section>






<div class="home-about-setting">
    <div class="container">
        <div class="row">
            <?php
            while ( have_posts() ) :
            the_post();
            ?> 
                <div class="col-lg-4">
                   <div class="image">
                    <?php the_post_thumbnail();?>
                   </div>
                </div>
                <div class="col-lg-8">
                    <div class="content">
                        <?php the_content();?>
                    </div>
                </div>
            <?php 
            endwhile; // End of the loop.
            ?>          
        </div>
    </div>
</div>
<div class="category-area">
    <div class="container-fluid acurate">
        <div class="row">
            <div class="col-lg-6 acurate">
                <a href="<?php echo wp_kses_post($oman_cosmetics_factory_opt['oman_cosmetics_factory_cat_url']);?>">
                    <?php $url1 = $oman_cosmetics_factory_opt['oman_cosmetics_factory_cat_image']['url'] ?>
					<img src="<?php echo esc_attr($url1 ); ?>" alt="<?php bloginfo('name') ?>">
                </a>
            </div>
            <div class="col-lg-6 acurate">
                <a href="<?php echo wp_kses_post($oman_cosmetics_factory_opt['oman_cosmetics_factory_cat_url2']);?>">
                    <?php $url2 = $oman_cosmetics_factory_opt['oman_cosmetics_factory_cat_image2']['url'] ?>
					<img src="<?php echo esc_attr($url2 ); ?>" alt="<?php bloginfo('name') ?>">
                </a>
            </div>
            <div class="col-lg-3 acurate" style="margin-top:15px;">
                <a href="<?php echo wp_kses_post($oman_cosmetics_factory_opt['oman_cosmetics_factory_cat_url3']);?>">
                    <?php $url2 = $oman_cosmetics_factory_opt['oman_cosmetics_factory_cat_image3']['url'] ?>
					<img src="<?php echo esc_attr($url2 ); ?>" alt="<?php bloginfo('name') ?>">
                </a>
            </div>
            <div class="col-lg-6 acurate" style="margin-top:15px;">
                <a href="<?php echo wp_kses_post($oman_cosmetics_factory_opt['oman_cosmetics_factory_cat_url4']);?>">
                    <?php $url2 = $oman_cosmetics_factory_opt['oman_cosmetics_factory_cat_image4']['url'] ?>
					<img src="<?php echo esc_attr($url2 ); ?>" alt="<?php bloginfo('name') ?>">
                </a>
            </div> 
            <div class="col-lg-3 acurate" style="margin-top:15px;">
                <a href="<?php echo wp_kses_post($oman_cosmetics_factory_opt['oman_cosmetics_factory_cat_url5']);?>">
                    <?php $url2 = $oman_cosmetics_factory_opt['oman_cosmetics_factory_cat_image5']['url'] ?>
					<img src="<?php echo esc_attr($url2 ); ?>" alt="<?php bloginfo('name') ?>">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- New Code -->
<div class="production-capability-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center mx-auto">
                <div class="section-title">
                    <h2 style='font-family: "Raleway", sans-serif;'> <?php echo "YOUR BRANDING PARTNER";?>					</h2>                    
                </div>
            </div>
        </div>
    </div>
</div>


<div class="home-about-setting" wfd-id="130">
    <div class="container" wfd-id="131">
        <div class="row" wfd-id="132">
             
                <!--div class="col-lg-4" wfd-id="135">
                   <div class="image" wfd-id="136">
                    <img width="1178" height="556" src="http://kisalou.com/wp/wp-content/uploads/2019/12/perfume.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="http://kisalou.com/wp/wp-content/uploads/2019/12/perfume.png 1178w, http://kisalou.com/wp/wp-content/uploads/2019/12/perfume-300x142.png 300w, http://kisalou.com/wp/wp-content/uploads/2019/12/perfume-1024x483.png 1024w, http://kisalou.com/wp/wp-content/uploads/2019/12/perfume-768x362.png 768w" sizes="(max-width: 1178px) 100vw, 1178px">                   </div>
                </div -->
                <div class="col-lg-12" wfd-id="135">
                    <div class="content" wfd-id="136">
                        
<p>Based in Muscat Oman Cosmetics Factory opened its doors in 1990 to fill a void in the fragrance and beauty industry, answering the need for all sized companies wanting to create their own In-House fragrance line. A team of creative and passionate individuals is committed to offer a complete turnkey solution, from perfume creation, packaging design, prototyping, through the manufacturing process of the finished product, ready to sell. Oman cosmetics Factory acts as your fragrance production department, a full-service contract manufacturer.</p>
                    </div>
                </div>
                      
        </div>
    </div>
</div>
<!-- End New Code -->

<div class="production-capability-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center mx-auto">
                <div class="section-title">
                    <h2 style='font-family: "Raleway", sans-serif;'> <?php echo esc_html($oman_cosmetics_factory_opt['capability_title']);?></h2>
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
                        <h2>PERFUMERY TEAM</h2>
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
                        <h2>Fragrance Evaluators</h2>
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