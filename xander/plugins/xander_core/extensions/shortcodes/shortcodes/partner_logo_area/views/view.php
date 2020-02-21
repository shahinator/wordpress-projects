<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

    <!-- Partner Start -->
    <section class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partner-col">
                        <div class="partner-slider">
                            <?php	foreach ($atts['logo_list'] as $logolist):?>
                                <div class="item">
                                    <a href="<?php echo esc_html($logolist['logo_url']); ?>"><img src="<?php echo esc_url($logolist['logo_image']['url']);?>" alt="<?php bloginfo('name');?>"></a>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>