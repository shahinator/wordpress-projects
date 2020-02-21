<?php
if (!defined('ABSPATH')) { die('Direct access forbidden.'); }

/**
 * Helper functions used all over the theme
 */

// Creates SEO friendly section ID from page ID. Returns page ID directly if $return = true
// since 2.0
//To Peak Text to Slug

function xander_make_slug($str) {
    $patterns = array(
        "/[:#+*+&+!+@+!+\.+?+%+$+\"+'+^+\[+<+{+\(+\)}+>+\]+,+`+;+,+=+\\\\]/", // match unwanted special characters
        "@<(script|style)[^>]*?>.*?</\\1>@si", // match <script>, <style> tags
        "/[~\r\n\t \/_|+ -]+/" // match newline, tab and more unwanted characters
    );
    $replacements = array(
        "", 
        "", 
        "-" 
    );

    $str = preg_replace($patterns, $replacements, strip_tags($str));
    return strtolower(trim($str, '-'));
}

function xander_sectionID($id, $prefix = '') {
    $str = get_the_title($id);
    return $prefix . xander_make_slug($str);
}

// Gets unyson option data in safe mode
// since 1.0

function xander_get_option($k, $v = '', $m = 'theme-settings'){
    if(defined( 'FW' )){
        switch ($m) {
            case 'theme-settings':
                $v = fw_get_db_settings_option($k);
                break;
            
            default:
                $v = '';
                break;
        }
    }
return $v;
}



// Gets darken or lighten color from hex
// since 2.0
function xander_colorFlex($hex, $flex) {

    // Check if shorthand hex value given (eg. #FFF instead of #FFFFFF)
    if (strlen($hex) == 3) {
        $hex = str_repeat(substr($hex, 0, 1), 2) . str_repeat(substr($hex, 1, 1), 2) . str_repeat(substr($hex, 2, 1), 2);
    }
    // Work out if hash given
    $hash = '';
    if (stristr($hex, '#')) {
        $hex = str_replace('#', '', $hex);
        $hash = '#';
    }
    /// HEX TO RGB
    $rgb = array(hexdec(substr($hex, 0, 2)), hexdec(substr($hex, 2, 2)), hexdec(substr($hex, 4, 2)));
    //// CALCULATE 
    for ($i = 0; $i < 3; $i++) {
        // See if brighter or darker
        if ($flex > 0) {
            // Lighter
            $rgb[$i] = round($rgb[$i] * $flex) + round(255 * (1 - $flex));
        } else {
            // Darker
            $positiveFlex = $flex - ($flex * 2);
            $rgb[$i] = round($rgb[$i] * $positiveFlex) + round(0 * (1 - $positiveFlex));
        }
        // In case rounding up causes us to go to 256
        if ($rgb[$i] > 255) {
            $rgb[$i] = 255;
        }
    }
    //// RBG to Hex
    $hex = '';
    for ($i = 0; $i < 3; $i++) {
        // Convert the decimal digit to hex
        $hexDigit = dechex($rgb[$i]);
        // Add a leading zero if necessary
        if (strlen($hexDigit) == 1) {
            $hexDigit = "0" . $hexDigit;
        }
        // Append to the hex string
        $hex .= $hexDigit;
    }
    return $hash . $hex;
}

function xander_hex2rgba($color, $opacity = false) {
 
    $default = 'rgb(0,0,0)';
 
    //Return default if no color provided
    if(empty($color)){
          return $default; 
    }
 
    //Sanitize $color if "#" is provided 
    if ($color[0] == '#' ) {
        $color = substr( $color, 1 );
    }

    //Check if color has 6 or 3 characters and get values
    if (strlen($color) == 6) {
            $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
    } elseif ( strlen( $color ) == 3 ) {
            $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
    } else {
            return $default;
    }

    //Convert hexadec to rgb
    $rgb =  array_map('hexdec', $hex);

    //Check if opacity is set(rgba or rgb)
    if($opacity){
        if(abs($opacity) > 1){
            $opacity = 1.0;
        }
        $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
    } else {
        $output = 'rgb('.implode(",",$rgb).')';
    }

    //Return rgb(a) color string
    return $output;
}


// Gets original page ID/ Slug
// since 1.0
function xander_original($id, $name = true) {
    if (function_exists('icl_object_id')) {
        $id = icl_object_id($id, 'page', true, 'en');
    }

    if ($name === true) {
        $post = get_post($id);
        return $post->post_name;
    } else {
        return $id;
    }
}

// wpml compatitible 
// since 1.0

function xander_theme_translate($content) {
    $content = html_entity_decode($content, ENT_QUOTES, 'UTF-8');

    if (function_exists('icl_object_id') && strpos($content, 'wpml_translate') == true) {
        $content = do_shortcode($content);
    } elseif (function_exists('qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage')) {
        $content = qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage($content);
    }

    return $content;
}


// simply echos the variable

function xander_return($s) {
    return $s;
}



/*
 * Section Edit option
 * 
 * This function for show section edit option in every section in one page 
 * 
 * Since 1.0
 *  */

function xander_edit_section() {
    if (is_user_logged_in()) :
    ?>
    <div class="section-edit">
        <div class="section-edit-container">
            <?php edit_post_link(esc_html__('Edit', 'xander'), '', ''); ?>
            <span class="section-edit-title"><?php echo esc_html(get_the_title()); ?></span>
        </div>
    </div> 
    <?php
    endif;
}


// Gets unyson image url from option data in a much simple way
// ----------------------------------------------------------------------------------------
function xander_get_image($k, $v = '', $d = false){

    if ($d == true) {
       $attachment = $k;
    }else{
        $attachment = xander_get_option($k);
    }

    if (isset($attachment['url']) && !empty($attachment)) {
        $v = $attachment['url'];
    }

    return $v;
}

// Display site logo

function xander_logo_url( $default){
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	if ( has_custom_logo() ) {
	        $default = $logo[0];
	}
	
	return $default; 
}


// Display header
function xander_header_url( $default){
	$custom_header_id = get_theme_mod( 'custom-header' );
	$header_image = wp_get_attachment_image_src( $custom_header_id , 'full' );
	if ( get_header_image() ) {
	        $default = $header_image[0];
	}
	
	return $default; 
}


// xander blog title
function xander_blog_title(){
	global $xander_opt;
	if(isset($xander_opt)) { 
		echo esc_html($xander_opt['xander_blog_header_text']); 
	} 
	else { 
		esc_html_e('Blog', 'xander');
	}
}

// xander Single blog details
function xander_blog_header_details(){
	global $xander_opt;
	if(isset($xander_opt)) { 
		echo esc_html($xander_opt['xander_blog_header_details']); 
	} 
	else { 
		esc_html_e('Blog Details', 'xander');
	}
}
//comment form move top to buttom
if (!function_exists('xander_move_comment_field_to_bottom')) :

	function xander_move_comment_field_to_bottom( $fields ) {
		$comment_field = $fields['comment'];
		unset( $fields['comment'] );
		$fields['comment'] = $comment_field;
		return $fields;
	}
 
endif;
add_filter( 'comment_form_fields', 'xander_move_comment_field_to_bottom' );
//user image take
function xander_get_svg($args = array()) {
    // Make sure $args are an array.
    if (empty($args)) {
        return __('Please define default parameters in the form of an array.', 'xander');
    }

    // Define an icon.
    if (false === array_key_exists('icon', $args)) {
        return __('Please define an SVG icon filename.', 'xander');
    }

    // Set defaults.
    $defaults = array(
        'icon' => '',
        'title' => '',
        'desc' => '',
        'fallback' => false,
    );

    // Parse args.
    $args = wp_parse_args($args, $defaults);

    // Set aria hidden.
    $aria_hidden = ' aria-hidden="true"';

    // Set ARIA.
    $aria_labelledby = '';

    if ($args['title']) {
        $aria_hidden = '';
        $unique_id = uniqid();
        $aria_labelledby = ' aria-labelledby="title-' . $unique_id . '"';

        if ($args['desc']) {
            $aria_labelledby = ' aria-labelledby="title-' . $unique_id . ' desc-' . $unique_id . '"';
        }
    }

    // Begin SVG markup.
    $svg = '<svg class="icon icon-' . esc_attr($args['icon']) . '"' . $aria_hidden . $aria_labelledby . ' role="img">';

    // Display the title.
    if ($args['title']) {
        $svg .= '<title id="title-' . $unique_id . '">' . esc_html($args['title']) . '</title>';

        // Display the desc only if the title is already set.
        if ($args['desc']) {
            $svg .= '<desc id="desc-' . $unique_id . '">' . esc_html($args['desc']) . '</desc>';
        }
    }

    $svg .= ' <use href="#icon-' . esc_html($args['icon']) . '" xlink:href="#icon-' . esc_html($args['icon']) . '"></use> ';
    if ($args['fallback']) {
        $svg .= '<span class="svg-fallback icon-' . esc_attr($args['icon']) . '"></span>';
    }

    $svg .= '</svg>';

    return $svg;
}
