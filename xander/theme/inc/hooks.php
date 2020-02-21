<?php 
 
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
//custom widget development for about company 

function xander_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'xander' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'xander' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'xander' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add footer widgets here.', 'xander' ),
		'before_widget' => '<div class="col-lg-3 col-md-6"><div class="widget %2$s footer-col">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="footer-title">',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'xander_widgets_init' );



// Initializing online demo contents
function _filter_xander_fw_ext_backups_demos($demos) {
	$demo_content_installer = XANDER_REMOTE_CONTENT . 'demo_data';
    $demos_array = array(	
        'demo_setup' => array(
            'title' => __('Xander Home One Demo Setup', 'xander'),
            'screenshot' => $demo_content_installer . '/defaultdemo/screenshot.png',
            'preview_link' => 'https://themeforest.net/user/irstheme',
        ),
        'demo_setup1' => array(
            'title' => __('Xander Home Two Demo Setup', 'xander'),
            'screenshot' => $demo_content_installer . '/defaultdemo/screenshot1.png',
            'preview_link' => 'https://themeforest.net/user/irstheme',
        )
    );
    $download_url = $demo_content_installer . '/index.php';
    foreach ($demos_array as $id => $data) {
        $demo = new FW_Ext_Backups_Demo($id, 'piecemeal', array(
            'url' => $download_url,
            'file_id' => $id,
        ));
        $demo->set_title($data['title']);
        $demo->set_screenshot($data['screenshot']);
        $demo->set_preview_link($data['preview_link']);
        $demos[ $demo->get_id() ] = $demo;
        unset($demo);
    }
    return $demos;
}
add_filter('fw:ext:backups-demo:demos', '_filter_xander_fw_ext_backups_demos'); 

