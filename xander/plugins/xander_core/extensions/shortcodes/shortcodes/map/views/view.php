<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var $map_data_attr
 * @var $atts
 * @var $content
 * @var $tag
 */
?>
<div class="google-map-area">
    <div class="fw-map" <?php echo fw_attr_to_html($map_data_attr); ?>>
        <div class="fw-map-canvas"></div>
    </div>
    <div class="contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-box">
                        <?php echo do_shortcode('[contact-form-7 id="141" title="Contact Form"]');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
