<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$about_background_image = $atts['about_background_image']; 
$about_desk_image = $atts['about_desk_image']; 
if ( empty( $atts['about_background_image'] ) ) {
    return;
}
$url =  esc_url( $about_background_image['url'] );
$image = xander_resize( $url,1920, 630, true, true, true );
$url2 =  esc_url( $about_desk_image['url'] );
$image2 = xander_resize( $url2,560, 400, true, true, true );
?>
<!-- About Start -->
<section class="about-area default-section background-image" data-src="<?php echo esc_url($image);?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-col">
                    <img src="<?php echo esc_url($image2);?>" alt="<?php bloginfo('name');?>">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-col">
                    <div class="title-col">
                        <h2><?php echo esc_html($atts['about_title']); ?></h2>
                        <h6><?php echo esc_html($atts['about_subtitle']); ?></h6>
                        <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/line.png'; ?>" alt="<?php bloginfo('name');?>">
                    </div>
                    <?php echo wp_kses_post($atts['about_content']); ?>
                    <?php	foreach ($atts['button_list'] as $buttonlist):?>
                        <a class="btn btn-primary theme-btn" href="<?php echo esc_html($buttonlist['button_url']); ?>"><?php echo esc_html($buttonlist['button_name']); ?></a>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>