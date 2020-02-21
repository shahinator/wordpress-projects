<?php
/*
  ReduxFramework Sample Config File
  For full documentation, please visit: https://docs.reduxframework.com
*/

if (!class_exists('Xander_Theme_Config')) {

    class Xander_Theme_Config {

        public $args        = array();
        public $sections    = array();
        public $theme;
        public $ReduxFramework;

        public function __construct() {

            if (!class_exists('ReduxFramework')) {
                return;
            }

            // This is needed. Bah WordPress bugs.  ;)
            if (  true == Redux_Helpers::isTheme(__FILE__) ) {
                $this->initSettings();
            } else {
                add_action('plugins_loaded', array($this, 'initSettings'), 10);
            }

        }

        public function initSettings() {

            // Just for demo purposes. Not needed per say.
            $this->theme = wp_get_theme();

            // Set the default arguments
            $this->setArguments();

            // Set a few help tabs so you can see how it's done
            $this->setHelpTabs();

            // Create the sections and fields
            $this->setSections();

            if (!isset($this->args['opt_name'])) { // No errors please
                return;
            }

            $this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
        }

        /*

          This is a test function that will let you see when the compiler hook occurs.
          It only runs if a field	set with compiler=>true is changed.

        */
        function compiler_action($options, $css, $changed_values) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r($changed_values); // Values that have changed since the last save
            echo "</pre>";
        }

        /*

          Custom function for filtering the sections array. Good for child themes to override or add to the sections.
          Simply include this function in the child themes functions.php file.

          NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
          so you must use get_template_directory_uri() if you want to use any of the built in icons

        */
        function dynamic_section($sections) {
            //$sections = array();
            $sections[] = array(
                'title' => esc_html__('Section via hook', 'xander'),
                'desc' => esc_html__('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'xander'),
                'icon' => 'el-icon-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }

        /*

          Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.

        */
        function change_arguments($args) {
            return $args;
        }

        /*

          Filter hook for filtering the default value of any given field. Very useful in development mode.

        */
        function change_defaults($defaults) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
        public function setSections() {

            /*
              Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
            */
            // Background Patterns Reader
            $sample_patterns_path   = ReduxFramework::$_dir . '../sample/patterns/';
            $sample_patterns_url    = ReduxFramework::$_url . '../sample/patterns/';
            $sample_patterns        = array();

            if (is_dir($sample_patterns_path)) :

                if ($sample_patterns_dir = opendir($sample_patterns_path)) :
                    $sample_patterns = array();

                    while (( $sample_patterns_file = readdir($sample_patterns_dir) ) !== false) {

                        if (stristr($sample_patterns_file, '.png') !== false || stristr($sample_patterns_file, '.jpg') !== false) {
                            $name = explode('.', $sample_patterns_file);
                            $name = str_replace('.' . end($name), '', $sample_patterns_file);
                            $sample_patterns[]  = array('alt' => $name, 'img' => $sample_patterns_url . $sample_patterns_file);
                        }
                    }
                endif;
            endif;

            ob_start();

            $ct             = wp_get_theme();
            $this->theme    = $ct;
            $item_name      = $this->theme->get('Name');
            $tags           = $this->theme->Tags;
            $screenshot     = $this->theme->get_screenshot();
            $class          = $screenshot ? 'has-screenshot' : '';

            $customize_title = sprintf(esc_html__('Customize &#8220;%s&#8221;', 'xander'), $this->theme->display('Name'));
            
            ?>
            <div id="current-theme" class="<?php echo esc_attr($class); ?>">
            <?php if ($screenshot) : ?>
                <?php if (current_user_can('edit_theme_options')) : ?>
                        <a href="<?php echo wp_customize_url(); ?>" class="load-customize hide-if-no-customize" title="<?php echo esc_attr($customize_title); ?>">
                            <img src="<?php echo esc_url($screenshot); ?>" alt="<?php esc_attr_e('Current theme preview', 'xander'); ?>" />
                        </a>
                <?php endif; ?>
                    <img class="hide-if-customize" src="<?php echo esc_url($screenshot); ?>" alt="<?php esc_attr_e('Current theme preview', 'xander'); ?>" />
                <?php endif; ?>

                <h4><?php echo esc_attr($this->theme->display('Name')); ?></h4>

                <div>
                    <ul class="theme-info">
                        <li><?php printf(esc_html__('By %s', 'xander'), $this->theme->display('Author')); ?></li>
                        <li><?php printf(esc_html__('Version %s', 'xander'), $this->theme->display('Version')); ?></li>
                        <li><?php echo '<strong>' . esc_html__('Tags', 'xander') . ':</strong> '; ?><?php printf($this->theme->display('Tags')); ?></li>
                    </ul>
                    <p class="theme-description"><?php echo esc_attr($this->theme->display('Description')); ?></p>
                </div>
            </div>

            <?php
            $item_info = ob_get_contents();

            ob_end_clean();
	
		// General
		$this->sections[] = array(
			'title'     => esc_html__('General', 'xander'),
			'desc'      => esc_html__('General theme options', 'xander'),
			'icon'      => 'el-icon-cog',
			'fields'    => array(
				array(
					'id' => 'xander_logo_main',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Basic media uploader with disabled URL input field.', 'xander'),
					'subtitle' => esc_html__('Add/Upload logo using the WordPress native uploader', 'xander'),
					'title' => esc_html__('White Logo', 'xander'),
					'default' => array(
						'url' => XANDER_IMAGES . '/logo.png',
					),
				),
				array(
					'id' => 'xander_logo2_main',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Basic media uploader with disabled URL input field.', 'xander'),
					'subtitle' => esc_html__('Add/Upload logo using the WordPress native uploader', 'xander'),
					'title' => esc_html__('Black Logo', 'xander'),
					'default' => array(
						'url' => XANDER_IMAGES . '/logo-black.png',
					),
				),
				array(
					// footer Social Enable/Disable
					'id' 					=> 'xander_footer_social_enable' ,
					'type' 					=> 'switch' ,
					'title' 				=> esc_html__( 'Footer Social Media Enable/Disable' , 'xander' ) ,
					'default' 				=> false ,
				),
				array(
					'id' =>'xander_footer_facebook',
					'type' => 'text',
					'title' => esc_html__('Facebook URL', 'xander'),
					'default' => '#'
				),
				array(
					'id' =>'xander_footer_twitter',
					'type' => 'text',
					'title' => esc_html__('Twitter URL', 'xander'),
					'default' => '#'
				),
				array(
					'id' =>'xander_footer_google_plus',
					'type' => 'text',
					'title' => esc_html__('Google Plus URL', 'xander'),
					'default' => '#'
				),
				array(
					'id' =>'xander_footer_instagram',
					'type' => 'text',
					'title' => esc_html__('Instagram URL', 'xander'),
					'default' => '#'
				),
			),
		);
	
		// Background
		$this->sections[] = array(
			'title'     => esc_html__('Background', 'xander'),
			'desc'      => esc_html__('Use this section to upload background images, select background color', 'xander'),
			'icon'      => 'el-icon-picture',
			'fields'    => array(
				
				array(
					'id'        => 'background_opt',
					'type'      => 'background',
					'output'    => array('body'),
					'title'     => esc_html__('Body Background', 'xander'),
					'subtitle'  => esc_html__('Body background with image, color.', 'xander'),
					'default'  => array(
						'background-color' => '#FFFFFF',
					)
				),
			),
		);
		
		//Fonts
		$this->sections[] = array(
			'title'     => esc_html__('Fonts', 'xander'),
			'desc'      => esc_html__('Fonts options', 'xander'),
			'icon'      => 'el-icon-font',
			'fields'    => array(
				array(
					'id'            => 'bodyfont',
					'type'          => 'typography',
					'title'         => esc_html__('Body font', 'xander'),
					'compiler'      => true,  // Use if you want to hook in your own CSS compiler
					'google'        => false,    // Disable google fonts. Won't work if you haven't defined your google api key
					'font-backup'   => false,    // Select a backup non-google font in addition to a google font
					'font-style'    => true, // Includes font-style and weight. Can use font-style or font-weight to declare
					'subsets'       => false, // Only appears if google is true and subsets not set to false
					'text-align'   => true,
					'font-size'     => true,
					'line-height'   => true,
					'word-spacing'  => true,  // Defaults to false
					'letter-spacing'=> true,  // Defaults to false
					'color'         => false,
					'preview'       => false, // Disable the previewer
					'all_styles'    => true,    // Enable all Google Font style/weight variations to be added to the page
					'output'        => array('body'), // An array of CSS selectors to apply this font style to dynamically
					'compiler'      => array('h2.site-description-compiler'), // An array of CSS selectors to apply this font style to dynamically
					'units'         => 'px', // Defaults to px
					'subtitle'      => esc_html__('Main body font.', 'xander'),
					'default'       => array(
						'font-family'=> 'Roboto',
						'color'         => '#5d5d5d',
						'google'        => true,
						'font-size'     => '16px',
						'line-height'   => '28px'
					),
				),
				array(
					'id'            => 'headingfont',
					'type'          => 'typography',
					'title'         => esc_html__('Heading font', 'xander'),
					'compiler'      => true,  // Use if you want to hook in your own CSS compiler
					'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
					'font-backup'   => false,    // Select a backup non-google font in addition to a google font
					'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
					'subsets'       => false, // Only appears if google is true and subsets not set to false
					'font-size'     => false,
					'line-height'   => false,
					'text-align'   => false,
					'word-spacing'  => true,  // Defaults to false
					'letter-spacing'=> true,  // Defaults to false
					'color'         => false,
					'preview'       => false, // Disable the previewer
					'all_styles'    => true,    // Enable all Google Font style/weight variations to be added to the page
					'output'        => array('h1, h2, h3, h4, h5, h6'), // An array of CSS selectors to apply this font style to dynamically
					'compiler'      => array('h2.site-description-compiler'), // An array of CSS selectors to apply this font style to dynamically
					'units'         => 'px', // Defaults to px
					'subtitle'      => esc_html__('Heading font.', 'xander'),
					'default'       => array(
						'font-weight'    => '500',
						'font-family'   => 'Ubuntu',
						'google'        => true,
					),
				),
				array(
					'id'            => 'menufont',
					'type'          => 'typography',
					'title'         => esc_html__('Menu font', 'xander'),
					'compiler'      => true,  // Use if you want to hook in your own CSS compiler
					'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
					'font-backup'   => false,    // Select a backup non-google font in addition to a google font
					'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
					'subsets'       => false, // Only appears if google is true and subsets not set to false
					'font-size'     => true,
					'line-height'   => true,
					'transition'   => false,
					'text-align'   => false,
					'word-spacing'  => true,  // Defaults to false
					'letter-spacing'=> true,  // Defaults to false
					'color'         => true,
					'preview'       => true, // Disable the previewer
					'all_styles'    => true,    // Enable all Google Font style/weight variations to be added to the page
					'output'        => array('.header-area .main-menu-area ul#nav li a'), // An array of CSS selectors to apply this font style to dynamically
					'compiler'      => array('h2.site-description-compiler'), // An array of CSS selectors to apply this font style to dynamically
					'units'         => 'px', // Defaults to px
					'subtitle'      => esc_html__('Menu font.', 'xander'),
					'default'       => array(
						'color'    => '#ffffff',
						'font-family'   => 'Roboto',
						'font-size'     => '16px',
						'google'        => true,
					),
				),				
			),
		);
		//Header
		$this->sections[] = array(
			'title'     => esc_html__('Header', 'xander'),
			'desc'      => esc_html__('Header options', 'xander'),
			'icon'      => 'el-icon-tasks',
			'fields'    => array(

				array(
					// header_topbar Phone Number
					'id' 					=> 'xander_header_topbar_phone_number' ,
					'type' 					=> 'text' ,
					'title' 				=> esc_html__( 'Header Topbar Phone Number' , 'xander' ) ,
					'default' 				=>  esc_html__('+880 1737 488 440', 'xander'),
				),
				array(
					// header_topbar Enable/Disable
					'id' 					=> 'xander_header_topbar' ,
					'type' 					=> 'switch' ,
					'title' 				=> esc_html__( 'Header Topbar Enable/Disable' , 'xander' ) ,
					'default' 				=> false ,
				),
				array(
					'id'        => 'background_header',
					'type'      => 'background',
					'output'    => array('body div.sticky'),
					'title'     => esc_html__('Header Background', 'xander'),
					'subtitle'  => esc_html__('Header background with image, color.', 'xander'),
					'default'  => array(
						'color' => '#000000',
					)
				),
				
				//header style setting
				array(
					'id'       => 'xander_header_type',
					'type'     => 'image_select',
					'title'    => esc_html__( 'Site Header', 'xander' ),
					'subtitle' => esc_html__( 'Select which type of header you want to show', 'xander' ),
					'default'     => 'header_1',
					'options' => array(
						'header_1' => array(
							'alt'   => 'Header Style One',
							'img'   => XANDER_IMAGES.'/admin/header_1.png'
						), 
						'header_2' => array(
							'alt'   => 'Header Style Two',
							'img'   => XANDER_IMAGES.'/admin/header_2.png'
						)	
					)
				),
			),
		);		
		//Footer
		$this->sections[] = array(
			'title'     => esc_html__('Footer', 'xander'),
			'desc'      => esc_html__('Footer options', 'xander'),
			'icon'      => 'el-icon-cog',
			'fields'    => array(
				array(
					'id' => 'xanden_footer_background',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Basic media uploader with disabled URL input field.', 'xander'),
					'subtitle' => esc_html__('Add/Upload Footer Background Image using the WordPress native uploader', 'xander'),
					'title' => esc_html__('Footer Background Image', 'xander'),
					'default' => array(
						'url' => XANDER_IMAGES . '/footer.jpg',
					),
				),
				array(
					// ScrolltoTop Enable/Disable
					'id' 					=> 'xander_scrolltotop' ,
					'type' 					=> 'switch' ,
					'title' 				=> esc_html__( 'ScrolltoTop Enable/Disable' , 'xander' ) ,
					'default' 				=> false ,
				),
				array(
					'id'      	=> 'xander_copyright',
					'type'    	=> 'editor',
					'title'   	=> esc_html__('Copyright information', 'xander'),
					'subtitle'	=> esc_html__('HTML tags allowed: a, br, em, strong', 'xander'),
					'default'	=> esc_html__('Copyright &copy; 2019' , 'xander'). " <a href=".esc_url('radontheme.com', 'xander')." target='_blank'>".esc_html__('Radontheme' , 'xander')."</a> ".esc_html__('Designed by Themexone . All Rights Reserved.' , 'xander'),
					'args' 		=> array(
						'teeny'            => true,
						'textarea_rows'    => 5,
						'media_buttons'	=> false,
					)
				),
			),
		);	
		
		// Blog options
		$this->sections[] = array(
			'title'     => esc_html__('Blog', 'xander'),
			'desc'      => esc_html__('Use this section to select options for blog', 'xander'),
			'icon'      => 'el-icon-file',
			'fields'    => array(
				array(
					'id' => 'xander_blog_bg',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Blog Page Header Background.', 'xander'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'xander'),
					'title' => esc_html__('Blog Background', 'xander'),
					'default' => array(
						'url' => XANDER_IMAGES . '/banner.jpg',
					),
				),
				array(
					'id'        => 'xander_blog_header_text',
					'type'      => 'text',
					'title'     => esc_html__('Blog header text', 'xander'),
					'default'   => esc_html__('Blog', 'xander')
				),
				array(
					'id'        => 'xander_blog_header_details',
					'type'      => 'text',
					'title'     => esc_html__('Single Blog header text', 'xander'),
					'default'   => esc_html__('Blog Details', 'xander')
				),
				array(
					// Blog Full Content Enable/Disable
					'id' 					=> 'xander_full_content_enable' ,
					'type' 					=> 'switch' ,
					'title' 				=> esc_html__( 'Blog Full Content Enable/Disable' , 'xander' ) ,
					'default' 				=> false ,
				),

			),
		);


		// Error Page Options
		$this->sections[] = array(
			'title'     => esc_html__('Error Page', 'xander'),
			'desc'      => esc_html__('Use this section to select options for 404', 'xander'),
			'icon'      => 'el el-error',
			'fields'    => array(
				array(
					'id' => 'xander_404_bg',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Blog Page Header Background.', 'xander'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'xander'),
					'title' => esc_html__('Blog Background', 'xander'),
					'default' => array(
						'url' => XANDER_IMAGES . '/error-bg.jpg',
					),
				),
				array(
					'id'        => 'xander_error_header_text',
					'type'      => 'text',
					'title'     => esc_html__('Error header text', 'xander'),
					'default'   => esc_html__('OOPS!', 'xander')
				),
				array(
					'id'        => 'xander_error_subheader',
					'type'      => 'text',
					'title'     => esc_html__('Error Page Sub Header text', 'xander'),
					'default'   => esc_html__('404 - PAGE NOT FOUND', 'xander')
				)

			),
		);
		
		// Custom CSS
        $this->sections[] = array(
			'title'     => esc_html__('Custom CSS', 'xander'),
			'desc'      => esc_html__('Add your Custom CSS code', 'xander'),
			'icon'      => 'el-icon-pencil',
			'fields'    => array(
				array(
					'id'       => 'custom_css',
					'type'     => 'ace_editor',
					'title'    => esc_html__('CSS Code', 'xander'),
					'subtitle' => esc_html__('Paste your CSS code here.', 'xander'),
					'mode'     => 'css',
					'theme'    => 'monokai', //chrome
					'default'  => ""
				),
			),
        );	
		
		// Less Compiler
		$this->sections[] = array(
			'title'     => esc_html__('Less Compiler', 'xander'),
			'desc'      => esc_html__('Turn on this option to apply all theme options. Turn of when you have finished changing theme options and your site is ready.', 'xander'),
			'icon'      => 'el-icon-wrench',
			'fields'    => array(
				array(
					'id'        => 'enable_less',
					'type'      => 'switch',
					'title'     => esc_html__('Enable Less Compiler', 'xander'),
					'default'   => true,
				),
			),
		);
			
            $theme_info  = '<div class="redux-framework-section-desc">';
            $theme_info .= '<p class="redux-framework-theme-data description theme-uri">' . esc_html__('<strong>Theme URL:</strong> ', 'xander') . '<a href="' . $this->theme->get('ThemeURI') . '" target="_blank">' . $this->theme->get('ThemeURI') . '</a></p>';
            $theme_info .= '<p class="redux-framework-theme-data description theme-author">' . esc_html__('<strong>Author:</strong> ', 'xander') . $this->theme->get('Author') . '</p>';
            $theme_info .= '<p class="redux-framework-theme-data description theme-version">' . esc_html__('<strong>Version:</strong> ', 'xander') . $this->theme->get('Version') . '</p>';
            $theme_info .= '<p class="redux-framework-theme-data description theme-description">' . $this->theme->get('Description') . '</p>';
            $tabs = $this->theme->get('Tags');
            if (!empty($tabs)) {
                $theme_info .= '<p class="redux-framework-theme-data description theme-tags">' . esc_html__('<strong>Tags:</strong> ', 'xander') . implode(', ', $tabs) . '</p>';
            }
            $theme_info .= '</div>';

            $this->sections[] = array(
                'title'     => esc_html__('Import / Export', 'xander'),
                'desc'      => esc_html__('Import and Export your Redux Framework settings from file, text or URL.', 'xander'),
                'icon'      => 'el-icon-refresh',
                'fields'    => array(
                    array(
                        'id'            => 'opt-import-export',
                        'type'          => 'import_export',
                        'title'         => 'Import Export',
                        'subtitle'      => 'Save and restore your Redux options',
                        'full_width'    => false,
                    ),
                ),
            );

            $this->sections[] = array(
                'icon'      => 'el-icon-info-sign',
                'title'     => esc_html__('Theme Information', 'xander'),
				'icon'      => 'el-icon-website',
                'fields'    => array(
                    array(
                        'id'        => 'opt-raw-info',
                        'type'      => 'raw',
                        'content'   => $item_info,
                    )
                ),
            );
        }

        public function setHelpTabs() {

            // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
            $this->args['help_tabs'][] = array(
                'id'        => 'redux-help-tab-1',
                'title'     => esc_html__('Theme Information 1', 'xander'),
                'content'   => esc_html__('<p>This is the tab content, HTML is allowed.</p>', 'xander')
            );

            $this->args['help_tabs'][] = array(
                'id'        => 'redux-help-tab-2',
                'title'     => esc_html__('Theme Information 2', 'xander'),
                'content'   => esc_html__('<p>This is the tab content, HTML is allowed.</p>', 'xander')
            );

            // Set the help sidebar
            $this->args['help_sidebar'] = esc_html__('<p>This is the sidebar content, HTML is allowed.</p>', 'xander');
        }

        /*

          All the possible arguments for Redux.
          For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments

        */
        public function setArguments() {

            $theme = wp_get_theme(); // For use with some settings. Not necessary.

            $this->args = array(
                // TYPICAL -> Change these values as you need/desire
                'opt_name'          => 'xander_opt',            // This is where your data is stored in the database and also becomes your global variable name.
                'display_name'      => $theme->get('Name'),     // Name that appears at the top of your panel
                'display_version'   => $theme->get('Version'),  // Version that appears at the top of your panel
                'menu_type'         => 'menu',                  //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                'allow_sub_menu'    => true,                    // Show the sections below the admin menu item or not
                'menu_title'        => esc_html__('Theme Options', 'xander'),
                'page_title'        => esc_html__('Theme Options', 'xander'),
                
                // You will need to generate a Google API key to use this feature.
                // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                'google_api_key' => '', // Must be defined to add google fonts to the typography module
                
                'async_typography'  => true,                    // Use a asynchronous font on the front end or font string
                //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
                'admin_bar'         => true,                    // Show the panel pages on the admin bar
                'global_variable'   => '',                      // Set a different name for your global variable other than the opt_name
                'dev_mode'          => false,                    // Show the time the page took to load, etc
                'customizer'        => true,                    // Enable basic customizer support
                //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
                //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

                // OPTIONAL -> Give you extra features
                'page_priority'     => null,                    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                'page_parent'       => 'themes.php',            // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                'page_permissions'  => 'manage_options',        // Permissions needed to access the options panel.
                'menu_icon'         => '',                      // Specify a custom URL to an icon
                'last_tab'          => '',                      // Force your panel to always open to a specific tab (by id)
                'page_icon'         => 'icon-themes',           // Icon displayed in the admin panel next to your menu_title
                'page_slug'         => '_options',              // Page slug used to denote the panel
                'save_defaults'     => true,                    // On load save the defaults to DB before user clicks save or not
                'default_show'      => false,                   // If true, shows the default value next to each field that is not the default value.
                'default_mark'      => '',                      // What to print by the field's title if the value shown is default. Suggested: *
                'show_import_export' => true,                   // Shows the Import/Export panel when not used as a field.
                
                // CAREFUL -> These options are for advanced use only
                'transient_time'    => 60 * MINUTE_IN_SECONDS,
                'output'            => true,                    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                'output_tag'        => true,                    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.
                
                // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                'database'              => '', // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                'system_info'           => false, // REMOVE

                // HINTS
                'hints' => array(
                    'icon'          => 'icon-question-sign',
                    'icon_position' => 'right',
                    'icon_color'    => 'lightgray',
                    'icon_size'     => 'normal',
                    'tip_style'     => array(
                        'color'         => 'light',
                        'shadow'        => true,
                        'rounded'       => false,
                        'style'         => '',
                    ),
                    'tip_position'  => array(
                        'my' => 'top left',
                        'at' => 'bottom right',
                    ),
                    'tip_effect'    => array(
                        'show'          => array(
                            'effect'        => 'slide',
                            'duration'      => '500',
                            'event'         => 'mouseover',
                        ),
                        'hide'      => array(
                            'effect'    => 'slide',
                            'duration'  => '500',
                            'event'     => 'click mouseleave',
                        ),
                    ),
                )
            );


            // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
            $this->args['share_icons'][] = array(
                'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
                'title' => 'Visit us on GitHub',
                'icon'  => 'el-icon-github'
                //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
            );
            $this->args['share_icons'][] = array(
                'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
                'title' => 'Like us on Facebook',
                'icon'  => 'el-icon-facebook'
            );
            $this->args['share_icons'][] = array(
                'url'   => 'http://twitter.com/reduxframework',
                'title' => 'Follow us on Twitter',
                'icon'  => 'el-icon-twitter'
            );
            $this->args['share_icons'][] = array(
                'url'   => 'http://www.linkedin.com/company/redux-framework',
                'title' => 'Find us on LinkedIn',
                'icon'  => 'el-icon-linkedin'
            );

            // Panel Intro text -> before the form
            if (!isset($this->args['global_variable']) || $this->args['global_variable'] !== false) {
                if (!empty($this->args['global_variable'])) {
                    $v = $this->args['global_variable'];
                } else {
                    $v = str_replace('-', '_', $this->args['opt_name']);
                }
            } else {}
        }
    }
    global $reduxConfig;
    $reduxConfig = new Xander_Theme_Config();
}

/*
  Custom function for the callback referenced above
 */
if (!function_exists('redux_my_custom_field')):
    function redux_my_custom_field($field, $value) {
        print_r($field);
        echo '<br/>';
        print_r($value);
    }
endif;

/*
  Custom function for the callback validation referenced above
*/
if (!function_exists('redux_validate_callback_function')):
    function redux_validate_callback_function($field, $value, $existing_value) {
        $error = false;
        $value = 'just testing';
        $return['value'] = $value;
        if ($error == true) {
            $return['error'] = $field;
        }
        return $return;
    }
endif;
