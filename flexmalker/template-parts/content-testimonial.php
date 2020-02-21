        <!-- Testimonials -->
        <section class="testimonial bg-img bg-fixed pos-re pt-5 pb-5 mt-5" id="testimonial" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/slider/3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="testimonials"> <span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/left-quote.png" alt=""></span>
                            <div class="owl-carousel owl-theme text-center">


                              <?php 
                                $count=1;
                                $slider = new WP_Query(array(
                                  'post_type' => 'testimonial',
                                  'posts_per_page'=> -1,
                                  'order' => 'ASC'
                                ));	
                                while($slider -> have_posts()): $slider->the_post();  
                              ?>
                                <div class="item">
                                    <p>"<?php echo wp_trim_words( get_the_content(), 20, '');?> "</p>
                                    <div class="client-area">
                                        <h6><?php the_title();?></h6> 
                                        <span><?php the_field('designation'); ?></span>
                                    </div>
                                    
                                </div>

                                <?php
                                      $count++;
                                      endwhile; // End of the loop.
                                      wp_reset_query();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact -->

