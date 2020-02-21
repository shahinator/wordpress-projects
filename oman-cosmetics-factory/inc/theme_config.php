<?php
/*
  ReduxFramework Sample Config File
  For full documentation, please visit: https://docs.reduxframework.com
*/

if (!class_exists('oman_cosmetics_factory_Theme_Config')) {

    class oman_cosmetics_factory_Theme_Config {

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
                'title' => esc_html__('Section via hook', 'oman-cosmetics-factory'),
                'desc' => esc_html__('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'oman-cosmetics-factory'),
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

            $customize_title = sprintf(esc_html__('Customize &#8220;%s&#8221;', 'oman-cosmetics-factory'), $this->theme->display('Name'));
            
            ?>
            <div id="current-theme" class="<?php echo esc_attr($class); ?>">
            <?php if ($screenshot) : ?>
                <?php if (current_user_can('edit_theme_options')) : ?>
                        <a href="<?php echo wp_customize_url(); ?>" class="load-customize hide-if-no-customize" title="<?php echo esc_attr($customize_title); ?>">
                            <img src="<?php echo esc_url($screenshot); ?>" alt="<?php esc_attr_e('Current theme preview', 'oman-cosmetics-factory'); ?>" />
                        </a>
                <?php endif; ?>
                    <img class="hide-if-customize" src="<?php echo esc_url($screenshot); ?>" alt="<?php esc_attr_e('Current theme preview', 'oman-cosmetics-factory'); ?>" />
                <?php endif; ?>

                <h4><?php echo esc_attr($this->theme->display('Name')); ?></h4>

                <div>
                    <ul class="theme-info">
                        <li><?php printf(esc_html__('By %s', 'oman-cosmetics-factory'), $this->theme->display('Author')); ?></li>
                        <li><?php printf(esc_html__('Version %s', 'oman-cosmetics-factory'), $this->theme->display('Version')); ?></li>
                        <li><?php echo '<strong>' . esc_html__('Tags', 'oman-cosmetics-factory') . ':</strong> '; ?><?php printf($this->theme->display('Tags')); ?></li>
                    </ul>
                    <p class="theme-description"><?php echo esc_attr($this->theme->display('Description')); ?></p>
                </div>
            </div>

            <?php
            $item_info = ob_get_contents();

            ob_end_clean();
	
		// General
		$this->sections[] = array(
			'title'     => esc_html__('General', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('General theme options', 'oman-cosmetics-factory'),
			'icon'      => 'el-icon-cog',
			'fields'    => array(
				array(
					'id' => 'oman_cosmetics_factory_logo_main',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Basic media uploader with disabled URL input field.', 'oman-cosmetics-factory'),
					'subtitle' => esc_html__('Add/Upload logo using the WordPress native uploader', 'oman-cosmetics-factory'),
					'title' => esc_html__('Site Logo', 'oman-cosmetics-factory'),
					'default' => array(
						'url' => OMAN_COSMETICS_FACTORY_IMAGES . '/logo.png',
					),
				),

			),
		);
		//Footer
		$this->sections[] = array(
			'title'     => esc_html__('Footer', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('Footer options', 'oman-cosmetics-factory'),
			'icon'      => 'el-icon-cog',
			'fields'    => array(
				array(
					'id'      	=> 'oman_cosmetics_factory_copyright',
					'type'    	=> 'editor',
					'title'   	=> esc_html__('Copyright information', 'oman-cosmetics-factory'),
					'subtitle'	=> esc_html__('HTML tags allowed: a, br, em, strong', 'oman-cosmetics-factory'),
					'default'	=> esc_html__('Copyright &copy; 2019' , 'oman-cosmetics-factory'). " <a href=".esc_url('Samharam.com', 'oman-cosmetics-factory')." target='_blank'>".esc_html__('oman-cosmetics-factory' , 'oman-cosmetics-factory')."</a> ".esc_html__('Designed by Estring Media . All Rights Reserved.' , 'oman-cosmetics-factory'),
					'args' 		=> array(
						'teeny'            => true,
						'textarea_rows'    => 5,
						'media_buttons'	=> false,
					)
				),
			),
		);	
		
		// banner options
		$this->sections[] = array(
			'title'     => esc_html__('Home Banner Setting', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('Use this section to select options for blog', 'oman-cosmetics-factory'),
			'icon'      => 'el-icon-file',
			'fields'    => array(
				array(
					'id' => 'banner_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Basic media uploader with disabled URL input field.', 'oman-cosmetics-factory'),
					'subtitle' => esc_html__('Add/Upload banner using the WordPress native uploader', 'oman-cosmetics-factory'),
					'title' => esc_html__('Banner Background image', 'oman-cosmetics-factory'),
					'default' => array(
						'url' => OMAN_COSMETICS_FACTORY_IMAGES . '/banner.jpg',
					),
				),
				array(
					'id'        => 'banner_subtitle',
					'type'      => 'text',
					'title'     => esc_html__('banner sub title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Oman Cosmetics', 'oman-cosmetics-factory')
				),
				array(
					'id'        => 'banner_title',
					'type'      => 'text',
					'title'     => esc_html__('banner title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Manufacturer', 'oman-cosmetics-factory')
				),
				array(
					'id'      	=> 'banner_text',
					'type'    	=> 'editor',
					'title'   	=> esc_html__('banner text information', 'oman-cosmetics-factory'),
					'subtitle'	=> esc_html__('HTML tags allowed: a, br, em, strong', 'oman-cosmetics-factory'),
					'default'	=> esc_html__('Since its Inception in 2009 at Oman, Our Factory has been started the company with pure essences which would feel your experience all ingredients as pure brand and exquisite perfumes.' , 'oman-cosmetics-factory'),
					'args' 		=> array(
						'teeny'            => true,
						'textarea_rows'    => 5,
						'media_buttons'	=> false,
					)
				),
				array(
					'id'        => 'banner_button_text',
					'type'      => 'text',
					'title'     => esc_html__('Banner button text', 'oman-cosmetics-factory'),
					'default'   => esc_html__('View More', 'oman-cosmetics-factory')
				),
				array(
					'id'        => 'banner_button_url',
					'type'      => 'text',
					'title'     => esc_html__('banner button url', 'oman-cosmetics-factory'),
					'default'   => esc_html__('#', 'oman-cosmetics-factory')
				),

			),
		);
		// capability options
		$this->sections[] = array(
			'title'     => esc_html__('Home Capability Setting', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('Use this section to select options for blog', 'oman-cosmetics-factory'),
			'icon'      => 'el-icon-file',
			'fields'    => array(
				array(
					'id'        => 'capability_title',
					'type'      => 'text',
					'title'     => esc_html__('capability title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('OUR PRODUCTION CAPABILITY', 'oman-cosmetics-factory')
				),
				array(
					'id'        => 'capability_subtitle',
					'type'      => 'text',
					'title'     => esc_html__('capability sub title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Manufacturing', 'oman-cosmetics-factory')
				),
				array(
					'id' => 'capability_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Basic media uploader with disabled URL input field.', 'oman-cosmetics-factory'),
					'subtitle' => esc_html__('Add/Upload Capability using the WordPress native uploader', 'oman-cosmetics-factory'),
					'title' => esc_html__('Banner Background image', 'oman-cosmetics-factory'),
					'default' => array(
						'url' => OMAN_COSMETICS_FACTORY_IMAGES . '/capabilities-bg.jpg',
					),
				),
				array(
					'id'        => 'capability_content_title',
					'type'      => 'text',
					'title'     => esc_html__('capability Content title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('PRODUCTION CONTENT', 'oman-cosmetics-factory')
				),
				array(
					'id'      	=> 'capability_content',
					'type'    	=> 'editor',
					'title'   	=> esc_html__('capability text information', 'oman-cosmetics-factory'),
					'subtitle'	=> esc_html__('HTML tags allowed: a, br, em, strong', 'oman-cosmetics-factory'),
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
			'title'     => esc_html__('Blog', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('Use this section to select options for blog', 'oman-cosmetics-factory'),
			'icon'      => 'el-icon-file',
			'fields'    => array(
				array(
					'id'        => 'oman_cosmetics_factory_blog_header_text',
					'type'      => 'text',
					'title'     => esc_html__('Blog header text', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Latest', 'oman-cosmetics-factory')
				),
				array(
					'id'        => 'oman_cosmetics_factory_blog_subheader_text',
					'type'      => 'text',
					'title'     => esc_html__('Blog subheader text', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Blog', 'oman-cosmetics-factory')
				),

			),
		);


        // action Page Options
		$this->sections[] = array(
			'title'     => esc_html__('Banner Botton Setting', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('Use this section to select options', 'oman-cosmetics-factory'),
			'icon'      => 'el el-stackoverflow',
			'fields'    => array(
				array(
					'id' => 'oman_cosmetics_factory_cat_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Basic media uploader with disabled URL input field.', 'oman-cosmetics-factory'),
					'subtitle' => esc_html__('Add/Upload logo using the WordPress native uploader', 'oman-cosmetics-factory'),
					'title' => esc_html__('Slider Bottom Image', 'oman-cosmetics-factory'),
				),
				array(
					'id'        => 'oman_cosmetics_factory_cat_url',
					'type'      => 'text',
					'title'     => esc_html__('Banner Botton Category URL', 'oman-cosmetics-factory'),
					'default'   => esc_html__('#', 'oman-cosmetics-factory')
				),
				array(
					'id' => 'oman_cosmetics_factory_cat_image2',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Basic media uploader with disabled URL input field.', 'oman-cosmetics-factory'),
					'subtitle' => esc_html__('Add/Upload logo using the WordPress native uploader', 'oman-cosmetics-factory'),
					'title' => esc_html__('Slider Bottom Image', 'oman-cosmetics-factory'),
				),
				array(
					'id'        => 'oman_cosmetics_factory_cat_url2',
					'type'      => 'text',
					'title'     => esc_html__('Banner Botton Category URL', 'oman-cosmetics-factory'),
					'default'   => esc_html__('#', 'oman-cosmetics-factory')
				),
				array(
					'id' => 'oman_cosmetics_factory_cat_image3',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Basic media uploader with disabled URL input field.', 'oman-cosmetics-factory'),
					'subtitle' => esc_html__('Add/Upload logo using the WordPress native uploader', 'oman-cosmetics-factory'),
					'title' => esc_html__('Slider Bottom Image', 'oman-cosmetics-factory'),
				),
				array(
					'id'        => 'oman_cosmetics_factory_cat_url4',
					'type'      => 'text',
					'title'     => esc_html__('Banner Botton Category URL', 'oman-cosmetics-factory'),
					'default'   => esc_html__('#', 'oman-cosmetics-factory')
				),
				array(
					'id' => 'oman_cosmetics_factory_cat_image4',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Basic media uploader with disabled URL input field.', 'oman-cosmetics-factory'),
					'subtitle' => esc_html__('Add/Upload logo using the WordPress native uploader', 'oman-cosmetics-factory'),
					'title' => esc_html__('Slider Bottom Image', 'oman-cosmetics-factory'),
				),
				array(
					'id'        => 'oman_cosmetics_factory_cat_url3',
					'type'      => 'text',
					'title'     => esc_html__('Banner Botton Category URL', 'oman-cosmetics-factory'),
					'default'   => esc_html__('#', 'oman-cosmetics-factory')
				),
				array(
					'id' => 'oman_cosmetics_factory_cat_image5',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Basic media uploader with disabled URL input field.', 'oman-cosmetics-factory'),
					'subtitle' => esc_html__('Add/Upload logo using the WordPress native uploader', 'oman-cosmetics-factory'),
					'title' => esc_html__('Slider Bottom Image', 'oman-cosmetics-factory'),
				),
				array(
					'id'        => 'oman_cosmetics_factory_cat_url5',
					'type'      => 'text',
					'title'     => esc_html__('Banner Botton Category URL', 'oman-cosmetics-factory'),
					'default'   => esc_html__('#', 'oman-cosmetics-factory')
				)

			),
        );

		// feaured product Options
		$this->sections[] = array(
			'title'     => esc_html__('Featured Product Setting', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('Use this section to select options for 404', 'oman-cosmetics-factory'),
			'icon'      => 'el el-video',
			'fields'    => array(              
                
				array(
					'id' => 'featured_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Chariman images', 'oman-cosmetics-factory'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'oman-cosmetics-factory'),
					'title' => esc_html__('Featured Background Image', 'oman-cosmetics-factory'),
				),
				array(
					'id'        => 'featured_product_title',
					'type'      => 'text',
					'title'     => esc_html__('Featured Product Title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Featured', 'oman-cosmetics-factory')
				),
				array(
					'id'        => 'featured_product_subtitle',
					'type'      => 'text',
					'title'     => esc_html__('Featured Product Sub Title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Products', 'oman-cosmetics-factory')
				),

			),
        );


        // new section Options
		$this->sections[] = array(
			'title'     => esc_html__('New Product Setting', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('Use this section to select options for 404', 'oman-cosmetics-factory'),
			'icon'      => 'el el-barcode',
			'fields'    => array(
                array(
					'id' => 'new_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('images', 'oman-cosmetics-factory'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'oman-cosmetics-factory'),
				),
				array(
					'id'        => 'new_product_title',
					'type'      => 'text',
					'title'     => esc_html__('New Product Title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Our New', 'oman-cosmetics-factory')
				),
				array(
					'id'        => 'new_product_subtitle',
					'type'      => 'text',
					'title'     => esc_html__('New Product Sub Title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Products', 'oman-cosmetics-factory')
				),

			),
		);
		


		// Capabilities options
		$this->sections[] = array(
			'title'     => esc_html__('Capabilities Setting', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('Use this section to select options for blog', 'oman-cosmetics-factory'),
			'icon'      => 'el-icon-file',
			'fields'    => array(
				array(
					'id'        => 'capabilities_text',
					'type'      => 'text',
					'title'     => esc_html__('Capabilities text', 'oman-cosmetics-factory'),
					'default'   => esc_html__('A Full Range of Capabilities', 'oman-cosmetics-factory')
				),
				array(
					'id'        => 'capabilities_subtext',
					'type'      => 'text',
					'title'     => esc_html__('capabilities sub text', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Supporting you from beginning to end', 'oman-cosmetics-factory')
				),

			),
		);
		// company options
		$this->sections[] = array(
			'title'     => esc_html__('Our Company Setting', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('Use this section to select options for blog', 'oman-cosmetics-factory'),
			'icon'      => 'el-icon-file',
			'fields'    => array(
				array(
					'id'        => 'company_text',
					'type'      => 'text',
					'title'     => esc_html__('company text', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Our', 'oman-cosmetics-factory')
				),
				array(
					'id'        => 'company_subtext',
					'type'      => 'text',
					'title'     => esc_html__('company sub text', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Company', 'oman-cosmetics-factory')
				),
				array(
					'id' => 'company_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('images', 'oman-cosmetics-factory'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'oman-cosmetics-factory'),
				),
				array(
					'id'        => 'company_title',
					'type'      => 'text',
					'title'     => esc_html__('company title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Oman Cosmetics Factory', 'oman-cosmetics-factory')
				),
				array(
					'id'        => 'company_content',
					'type'    	=> 'editor',
					'title'     => esc_html__('company content', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Compnay content', 'oman-cosmetics-factory')
				),

			),
		);


		// choose options
		$this->sections[] = array(
			'title'     => esc_html__('Our Mission and Vission Setting', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('Use this section to select options for blog', 'oman-cosmetics-factory'),
			'icon'      => 'el-icon-file',
			'fields'    => array(
				array(
					'id'        => 'choose_text',
					'type'      => 'text',
					'title'     => esc_html__('Mission and vision Title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Our', 'oman-cosmetics-factory')
				),
				array(
					'id'        => 'choose_subtext',
					'type'      => 'text',
					'title'     => esc_html__('Mission and vision Sub Text', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Mission and vision', 'oman-cosmetics-factory')
				),

			),
		);
		// team options
		$this->sections[] = array(
			'title'     => esc_html__('Message Setting', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('Use this section to select options for blog', 'oman-cosmetics-factory'),
			'icon'      => 'el-icon-file',
			'fields'    => array(
				array(
					'id'        => 'team_text',
					'type'      => 'text',
					'title'     => esc_html__('Message Title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Message', 'oman-cosmetics-factory')
				),
				array(
					'id'        => 'team_subtext',
					'type'      => 'text',
					'title'     => esc_html__('Message Sub Text', 'oman-cosmetics-factory'),
					'default'   => esc_html__('CEO and General Manager', 'oman-cosmetics-factory')
				),

			),
		);
		// testimonial options
		$this->sections[] = array(
			'title'     => esc_html__('Testimonial Setting', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('Use this section to select options for blog', 'oman-cosmetics-factory'),
			'icon'      => 'el-icon-file',
			'fields'    => array(
				array(
					'id' => 'testimonial_bg_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('images', 'oman-cosmetics-factory'),
					'subtitle' => esc_html__('Add/Upload Background', 'oman-cosmetics-factory'),
					'default' => array(
						'url' => OMAN_COSMETICS_FACTORY_IMAGES . '/testimonial_bg.jpg',
					),
				),
				array(
					'id'        => 'testimonial_title',
					'type'      => 'text',
					'title'     => esc_html__('Testimonial Title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('what people say', 'oman-cosmetics-factory')
				),
			),
		);

		// Strategic Aapproach options
		$this->sections[] = array(
			'title'     => esc_html__('Strategic Aapproach Setting', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('Use this section to select options for blog', 'oman-cosmetics-factory'),
			'icon'      => 'el-icon-file',
			'fields'    => array(
				array(
					'id'        => 'strategic_approach_title',
					'type'      => 'text',
					'title'     => esc_html__('Strategic Aapproach Title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Our strategic approach', 'oman-cosmetics-factory')
				),
				array(
					'id'        => 'strategic_approach_subtitle',
					'type'      => 'text',
					'title'     => esc_html__('Strategic Aapproach Sub Title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('to your marketing', 'oman-cosmetics-factory')
				),
			),
		);
		// contact options
		$this->sections[] = array(
			'title'     => esc_html__('contact Setting', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('Use this section to select options for blog', 'oman-cosmetics-factory'),
			'icon'      => 'el-icon-file',
			'fields'    => array(
				array(
					'id'        => 'contact_text',
					'type'      => 'text',
					'title'     => esc_html__('contact Us Title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Meet Our', 'oman-cosmetics-factory')
				),
				array(
					'id'        => 'contact_subtext',
					'type'      => 'text',
					'title'     => esc_html__('contact Sub Text', 'oman-cosmetics-factory'),
					'default'   => esc_html__('contact', 'oman-cosmetics-factory')
				),

			),
		);
		// Contract Manufacturing options
		$this->sections[] = array(
			'title'     => esc_html__('Contract Manufacturing Setting', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('Use this section to select options for blog', 'oman-cosmetics-factory'),
			'icon'      => 'el-icon-file',
			'fields'    => array(
			

				array(
					'id'        => 'our_services_text',
					'type'      => 'text',
					'title'     => esc_html__('our Services text', 'oman-cosmetics-factory'),
					'default'   => esc_html__('our Services', 'oman-cosmetics-factory')
				),
				array(
					'id'        => 'our_services_subtext',
					'type'      => 'text',
					'title'     => esc_html__('our Services sub text', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Entail', 'oman-cosmetics-factory')
				),
				array(
					'id'      	=> 'services_list',
					'type'    	=> 'editor',
					'title'   	=> esc_html__('Services List', 'oman-cosmetics-factory'),
					'subtitle'	=> esc_html__('HTML tags allowed: a, br, em, strong', 'oman-cosmetics-factory'),
					'args' 		=> array(
						'teeny'            => true,
						'textarea_rows'    => 5,
						'media_buttons'	=> false,
					)
				),



			),
		);
		// single options
		$this->sections[] = array(
			'title'     => esc_html__('Product Details', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('Use this section to select options for blog', 'oman-cosmetics-factory'),
			'icon'      => 'el-icon-file',
			'fields'    => array(
				array(
					'id'        => 'product_details_title',
					'type'      => 'text',
					'title'     => esc_html__('Product Details Title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Recently', 'oman-cosmetics-factory')
				),
				array(
					'id'        => 'product_details_subtitle',
					'type'      => 'text',
					'title'     => esc_html__('Product Details Sub Title', 'oman-cosmetics-factory'),
					'default'   => esc_html__('Viewed', 'oman-cosmetics-factory')
				),
			),
		);
        

		// Error Page Options
		$this->sections[] = array(
			'title'     => esc_html__('Error Page', 'oman-cosmetics-factory'),
			'desc'      => esc_html__('Use this section to select options for 404', 'oman-cosmetics-factory'),
			'icon'      => 'el el-error',
			'fields'    => array(
				array(
					'id' => 'oman_cosmetics_factory_404_bg',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Blog Page Header Background.', 'oman-cosmetics-factory'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'oman-cosmetics-factory'),
					'title' => esc_html__('Blog Background', 'oman-cosmetics-factory'),
					'default' => array(
						'url' => OMAN_COSMETICS_FACTORY_IMAGES . '/error_bg.jpg',
					),
				),
				array(
					'id'        => 'oman_cosmetics_factory_error_header_text',
					'type'      => 'text',
					'title'     => esc_html__('Error header text', 'oman-cosmetics-factory'),
					'default'   => esc_html__('OOPS!', 'oman-cosmetics-factory')
				),
				array(
					'id'        => 'oman_cosmetics_factory_error_subheader',
					'type'      => 'text',
					'title'     => esc_html__('Error Page Sub Header text', 'oman-cosmetics-factory'),
					'default'   => esc_html__('404 - PAGE NOT FOUND', 'oman-cosmetics-factory')
				)

			),
		);
			
            $theme_info  = '<div class="redux-framework-section-desc">';
            $theme_info .= '<p class="redux-framework-theme-data description theme-uri">' . esc_html__('<strong>Theme URL:</strong> ', 'oman-cosmetics-factory') . '<a href="' . $this->theme->get('ThemeURI') . '" target="_blank">' . $this->theme->get('ThemeURI') . '</a></p>';
            $theme_info .= '<p class="redux-framework-theme-data description theme-author">' . esc_html__('<strong>Author:</strong> ', 'oman-cosmetics-factory') . $this->theme->get('Author') . '</p>';
            $theme_info .= '<p class="redux-framework-theme-data description theme-version">' . esc_html__('<strong>Version:</strong> ', 'oman-cosmetics-factory') . $this->theme->get('Version') . '</p>';
            $theme_info .= '<p class="redux-framework-theme-data description theme-description">' . $this->theme->get('Description') . '</p>';
            $tabs = $this->theme->get('Tags');
            if (!empty($tabs)) {
                $theme_info .= '<p class="redux-framework-theme-data description theme-tags">' . esc_html__('<strong>Tags:</strong> ', 'oman-cosmetics-factory') . implode(', ', $tabs) . '</p>';
            }
            $theme_info .= '</div>';

            $this->sections[] = array(
                'title'     => esc_html__('Import / Export', 'oman-cosmetics-factory'),
                'desc'      => esc_html__('Import and Export your Redux Framework settings from file, text or URL.', 'oman-cosmetics-factory'),
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
                'title'     => esc_html__('Theme Information', 'oman-cosmetics-factory'),
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
                'title'     => esc_html__('Theme Information 1', 'oman-cosmetics-factory'),
                'content'   => esc_html__('<p>This is the tab content, HTML is allowed.</p>', 'oman-cosmetics-factory')
            );

            $this->args['help_tabs'][] = array(
                'id'        => 'redux-help-tab-2',
                'title'     => esc_html__('Theme Information 2', 'oman-cosmetics-factory'),
                'content'   => esc_html__('<p>This is the tab content, HTML is allowed.</p>', 'oman-cosmetics-factory')
            );

            // Set the help sidebar
            $this->args['help_sidebar'] = esc_html__('<p>This is the sidebar content, HTML is allowed.</p>', 'oman-cosmetics-factory');
        }

        /*

          All the possible arguments for Redux.
          For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments

        */
        public function setArguments() {

            $theme = wp_get_theme(); // For use with some settings. Not necessary.

            $this->args = array(
                // TYPICAL -> Change these values as you need/desire
                'opt_name'          => 'oman_cosmetics_factory_opt',            // This is where your data is stored in the database and also becomes your global variable name.
                'display_name'      => $theme->get('Name'),     // Name that appears at the top of your panel
                'display_version'   => $theme->get('Version'),  // Version that appears at the top of your panel
                'menu_type'         => 'menu',                  //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                'allow_sub_menu'    => true,                    // Show the sections below the admin menu item or not
                'menu_title'        => esc_html__('Theme Options', 'oman-cosmetics-factory'),
                'page_title'        => esc_html__('Theme Options', 'oman-cosmetics-factory'),
                
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
    $reduxConfig = new oman_cosmetics_factory_Theme_Config();
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
