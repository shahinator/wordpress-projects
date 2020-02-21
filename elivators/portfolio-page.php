<?php
/**
 * The template for displaying all pages
 * Template Name: Portfolio Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Application
 */
$url = wp_get_attachment_url( get_post_thumbnail_id() );  
get_header();
global $application_opt;
?>
    <!-- Page Heading Start -->

    <section class="page-heading-area background-image  white-color" data-src="<?php echo esc_attr($url ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page-heading-box">
                        <?php if( get_field('page_heading') ): ?>
                            <h3><?php the_field('page_heading'); ?></h3>
                            <?php endif; ?>
                                <?php if( get_field('page_header_text') ): ?>
                                    <?php the_field('page_header_text'); ?>
                                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="portfolio-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="title">Deals Snapshot</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 mx-auto text-center">

                    <ul wfd-id="69">

                        <li wfd-id="86">
                            <div class="single-portfolio" wfd-id="87">
                                <div class="round-shape" wfd-id="88">
                                    <div class="shape" wfd-id="89">
                                        <p>212+</p>
                                    </div>
                                </div>
                                Unit Installed </div>
                        </li>

                        <li wfd-id="74">
                            <div class="single-portfolio" wfd-id="75">
                                <div class="round-shape" wfd-id="76">
                                    <div class="shape" wfd-id="77">
                                        <p>200+</p>
                                    </div>
                                </div>
                                Units Under Maintenance </div>
                        </li>

                        <li wfd-id="78">
                            <div class="single-portfolio" wfd-id="79">
                                <div class="round-shape" wfd-id="80">
                                    <div class="shape" wfd-id="81">
                                        <p>76+</p>
                                    </div>
                                </div>
                                Projects Completed </div>
                        </li>

						<br>

                        <li wfd-id="82">
                            <div class="single-portfolio" wfd-id="83">
                                <div class="round-shape" wfd-id="84">
                                    <div class="shape" wfd-id="85">
                                        <p>161</p>
                                    </div>
                                </div>
                                Elevators </div>
                        </li>

                        <li wfd-id="90">
                            <div class="single-portfolio" wfd-id="91">
                                <div class="round-shape" wfd-id="92">
                                    <div class="shape" wfd-id="93">
                                        <p>23</p>
                                    </div>
                                </div>
                                Escalators / Moving Walks </div>
                        </li>

                        <li wfd-id="94">
                            <div class="single-portfolio" wfd-id="95">
                                <div class="round-shape" wfd-id="96">
                                    <div class="shape" wfd-id="97">
                                        <p>22</p>
                                    </div>
                                </div>
                                Platforms lifts </div>
                        </li>

                        <li wfd-id="94">
                            <div class="single-portfolio" wfd-id="95">
                                <div class="round-shape" wfd-id="96">
                                    <div class="shape" wfd-id="97">
                                        <p>6</p>
                                    </div>
                                </div>
                                Dumbwaiters </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php
get_footer();