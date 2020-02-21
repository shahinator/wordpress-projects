<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$subscribe_background = $atts['subscribe_background']; 
if ( empty( $atts['subscribe_background'] ) ) {
    return;
}
$url =  esc_url( $subscribe_background['url'] );
$image = xander_resize( $url,1920, 630, true, true, true );
?>
    <!-- Newsletter Start -->
    <section class="newsletter-area default-section background-image" data-src="<?php echo esc_url($image);?>">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="newsletter-col">
                        <h2><?php echo esc_html($atts['subscribe_title']); ?></h2>
                        <h5><?php echo esc_html($atts['subscribe_subtitle']); ?></h5>
                       <p> <?php echo wp_kses_post($atts['subscribe_content']); ?></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="newsletter-col">
                        <?php echo do_shortcode( '[contact-form-7 id="206" title="Subscribe"]' );?>                    
                    </div>
                </div>
            </div>
        </div>
    </section>
