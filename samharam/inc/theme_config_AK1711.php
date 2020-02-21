<?php
/*
  ReduxFramework Sample Config File
  For full documentation, please visit: https://docs.reduxframework.com
*/

if (!class_exists('Samharam_Theme_Config')) {

    class Samharam_Theme_Config {

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
                'title' => esc_html__('Section via hook', 'samharam'),
                'desc' => esc_html__('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'samharam'),
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

            $customize_title = sprintf(esc_html__('Customize &#8220;%s&#8221;', 'samharam'), $this->theme->display('Name'));

            ?>
            <div id="current-theme" class="<?php echo esc_attr($class); ?>">
            <?php if ($screenshot) : ?>
                <?php if (current_user_can('edit_theme_options')) : ?>
                        <a href="<?php echo wp_customize_url(); ?>" class="load-customize hide-if-no-customize" title="<?php echo esc_attr($customize_title); ?>">
                            <img src="<?php echo esc_url($screenshot); ?>" alt="<?php esc_attr_e('Current theme preview', 'samharam'); ?>" />
                        </a>
                <?php endif; ?>
                    <img class="hide-if-customize" src="<?php echo esc_url($screenshot); ?>" alt="<?php esc_attr_e('Current theme preview', 'samharam'); ?>" />
                <?php endif; ?>

                <h4><?php echo esc_attr($this->theme->display('Name')); ?></h4>

                <div>
                    <ul class="theme-info">
                        <li><?php printf(esc_html__('By %s', 'samharam'), $this->theme->display('Author')); ?></li>
                        <li><?php printf(esc_html__('Version %s', 'samharam'), $this->theme->display('Version')); ?></li>
                        <li><?php echo '<strong>' . esc_html__('Tags', 'samharam') . ':</strong> '; ?><?php printf($this->theme->display('Tags')); ?></li>
                    </ul>
                    <p class="theme-description"><?php echo esc_attr($this->theme->display('Description')); ?></p>
                </div>
            </div>

            <?php
            $item_info = ob_get_contents();

            ob_end_clean();

		// General
		$this->sections[] = array(
			'title'     => esc_html__('General', 'samharam'),
			'desc'      => esc_html__('General theme options', 'samharam'),
			'icon'      => 'el-icon-cog',
			'fields'    => array(
				array(
					'id' => 'samharam_logo_main',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Basic media uploader with disabled URL input field.', 'samharam'),
					'subtitle' => esc_html__('Add/Upload logo using the WordPress native uploader', 'samharam'),
					'title' => esc_html__('Site Logo', 'samharam'),
					'default' => array(
						'url' => SAMHARAM_IMAGES . '/logo.png',
					),
				),
				array(
					'id' =>'samharam_facebook',
					'type' => 'text',
					'title' => esc_html__('Facebook URL', 'samharam'),
					'default' => '#'
				),
				array(
					'id' =>'samharam_linkedin',
					'type' => 'text',
					'title' => esc_html__('Linkedin URL', 'samharam'),
					'default' => '#'
				),
				array(
					'id' =>'samharam_youtube',
					'type' => 'text',
					'title' => esc_html__('Youtube URL', 'samharam'),
					'default' => '#'
				),
				array(
					'id' =>'samharam_twitter',
					'type' => 'text',
					'title' => esc_html__('Twitter URL', 'samharam'),
					'default' => '#'
				),
				array(
					'id' =>'samharam_instagram',
					'type' => 'text',
					'title' => esc_html__('Instagram URL', 'samharam'),
					'default' => '#'
				),
			),
		);
		//Footer
		$this->sections[] = array(
			'title'     => esc_html__('Footer', 'samharam'),
			'desc'      => esc_html__('Footer options', 'samharam'),
			'icon'      => 'el-icon-cog',
			'fields'    => array(
				array(
					'id'      	=> 'samharam_copyright',
					'type'    	=> 'editor',
					'title'   	=> esc_html__('Copyright information', 'samharam'),
					'subtitle'	=> esc_html__('HTML tags allowed: a, br, em, strong', 'samharam'),
					'default'	=> esc_html__('Copyright &copy; 2019' , 'samharam'). " <a href=".esc_url('Samharam.com', 'samharam')." target='_blank'>".esc_html__('Samharam' , 'samharam')."</a> ".esc_html__('Designed by Estring Media . All Rights Reserved.' , 'samharam'),
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
			'title'     => esc_html__('Blog', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for blog', 'samharam'),
			'icon'      => 'el-icon-file',
			'fields'    => array(
				array(
					'id' => 'samharam_blog_bg',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Blog Page Header Background.', 'samharam'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
					'title' => esc_html__('Blog Background', 'samharam'),
					'default' => array(
						'url' => SAMHARAM_IMAGES . '/banner.jpg',
					),
				),
				array(
					'id'        => 'samharam_blog_header_text',
					'type'      => 'text',
					'title'     => esc_html__('Blog header text', 'samharam'),
					'default'   => esc_html__('SAMHRAM BILINGUAL SCHOOL', 'samharam')
				),
				array(
					'id'        => 'samharam_blog_subheader_text',
					'type'      => 'text',
					'title'     => esc_html__('Blog subheader text', 'samharam'),
					'default'   => esc_html__('NEWS & UPDATES', 'samharam')
				),
				array(
					'id'        => 'samharam_blog_header_details',
					'type'      => 'text',
					'title'     => esc_html__('Single Blog header text', 'samharam'),
					'default'   => esc_html__('Blog Details', 'samharam')
				),
				array(
					// Blog Full Content Enable/Disable
					'id' 					=> 'samharam_full_content_enable' ,
					'type' 					=> 'switch' ,
					'title' 				=> esc_html__( 'Blog Full Content Enable/Disable' , 'samharam' ) ,
					'default' 				=> false ,
				),

			),
		);

        // banner Page Options
		$this->sections[] = array(
			'title'     => esc_html__('Banner Setting', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
			'icon'      => 'el el-align-justify',
			'fields'    => array(

				array(
					// Footer Top Area Enable/Disable
					'id' 					=> 'samaram_banner_setting_options' ,
					'type' 					=> 'switch' ,
					'title' 				=> esc_html__( 'Banner Setting Option Enable/Disable' , 'samharam' ) ,
					'default' 				=> false ,
				),
				array(
					'id' => 'samharam_banner_video',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Basic media uploader with disabled URL input field.', 'samharam'),
					'subtitle' => esc_html__('Add/Upload logo using the WordPress native uploader', 'samharam'),
					'title' => esc_html__('Banner Video', 'samharam'),
					'default' => array(
						'url' => SAMHARAM_IMAGES . '/video.mp4',
					),
				),
				array(
					'id'        => 'samharam_banner_video2',
					'type'      => 'text',
					'title'     => esc_html__('Banner Second Video', 'samharam'),
				),
				array(
					'id' =>'first_slide_text',
					'type'    	=> 'editor',
					'title' => esc_html__('First Slide Text', 'samharam'),
				),

				array(
					'id' =>'second_slide_text',
					'type'    	=> 'editor',
					'title' => esc_html__('Second Slide Text', 'samharam'),
				),
				array(
					'id' =>'third_slide_text',
					'type'    	=> 'editor',
					'title' => esc_html__('Third Slide Text', 'samharam'),
				),
				array(
					'id' =>'four_slide_text',
					'type'    	=> 'editor',
					'title' => esc_html__('Four Slide Text', 'samharam'),
				),
				array(
					'id' =>'five_slide_text',
					'type'    	=> 'editor',
					'title' => esc_html__('Five Slide Text', 'samharam'),
				),
				array(
					'id' =>'six_slide_text',
					'type'    	=> 'editor',
					'title' => esc_html__('Six Slide Text', 'samharam'),
				),
				array(
					'id' =>'seven_slide_text',
					'type'    	=> 'editor',
					'title' => esc_html__('Seven Slide Text', 'samharam'),
				),
				array(

									'id' =>'eight_slide_text',

									'type'    	=> 'editor',

									'title' => esc_html__('Eighth Slide Text', 'samharam'),

				),

			),
        );
        // action Page Options
		$this->sections[] = array(
			'title'     => esc_html__('Call to Action Setting', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
			'icon'      => 'el el-stackoverflow',
			'fields'    => array(
				array(
					'id'        => 'samharam_action_text',
					'type'      => 'text',
					'title'     => esc_html__('Call to action Title text', 'samharam'),
					'default'   => esc_html__('Online Admission 2019 Started    ', 'samharam')
				),
				array(
					'id'        => 'samharam_action_content',
					'type'      => 'text',
					'title'     => esc_html__('action Setting Sub Header text', 'samharam'),
					'default'   => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard
                    dummy text ever since the 1500s ', 'samharam')
                ),
				array(
					'id'        => 'samharam_action_button',
					'type'      => 'text',
					'title'     => esc_html__('Call to Acction Button Name', 'samharam'),
					'default'   => esc_html__('Online Admission', 'samharam')
                ),
				array(
					'id'        => 'samharam_action_button_url',
					'type'      => 'text',
					'title'     => esc_html__('Call to Acction Button URL', 'samharam'),
					'default'   => esc_html__('#', 'samharam')
				)

			),
        );
        // mission section Options
		$this->sections[] = array(
			'title'     => esc_html__('Mission Vission Setting', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
			'icon'      => 'el el-braille',
			'fields'    => array(

                array(
					'id' => 'mission_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Mission Icon images', 'samharam'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
					'title' => esc_html__('Mission', 'samharam'),
				),

				array(
					'id'        => 'mission_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('Mission', 'samharam')
				),
				array(
					'id'        => 'mission_content',
					'type'    	=> 'editor',
                    'title'     => esc_html__('Content text', 'samharam'),

                ),

                array(
					'id' => 'vission_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('vission Icon images', 'samharam'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
					'title' => esc_html__('vision', 'samharam'),
				),

				array(
					'id'        => 'vission_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('vission', 'samharam')
				),
				array(
					'id'        => 'vission_content',
					'type'    	=> 'editor',
                    'title'     => esc_html__('Content text', 'samharam'),

                ),




			),
        );
		// video section Options
		$this->sections[] = array(
			'title'     => esc_html__('Video Setting', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
			'icon'      => 'el el-video',
			'fields'    => array(

                array(
					'id' => 'video_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('video Icon images', 'samharam'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
					'title' => esc_html__('video', 'samharam'),
				),
				array(
					'id'        => 'video_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('SAMAHRAM BILINGUAL PRIVATE SCHOOL', 'samharam')
				),
				array(
					'id'        => 'video_content',
					'type'    	=> 'editor',
                    'title'     => esc_html__('Content text', 'samharam'),

                ),
                array(
					'id'        => 'video_button',
					'type'      => 'text',
					'title'     => esc_html__('Button Name', 'samharam'),
					'default'   => esc_html__('Read More', 'samharam')
                ),
				array(
					'id'        => 'video_button_url',
					'type'      => 'text',
					'title'     => esc_html__('Button URL', 'samharam'),
					'default'   => esc_html__('#', 'samharam')
                ),
				array(
					'id'        => 'video_url',
					'type'      => 'text',
					'title'     => esc_html__('Video URL', 'samharam'),
					'default'   => esc_html__('#', 'samharam')
				)




			),
        );
        // chairman message section Options
		$this->sections[] = array(
			'title'     => esc_html__('Chairman Message Setting', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
			'icon'      => 'el el-comment-alt',
			'fields'    => array(

                array(
					'id' => 'chairman_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Chariman images', 'samharam'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
					'title' => esc_html__('message', 'samharam'),
				),
				array(
					'id'        => 'message_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('Chairmans Message', 'samharam')
				),
				array(
					'id'        => 'message_content',
					'type'    	=> 'editor',
                    'title'     => esc_html__('Content text', 'samharam'),

                ),
                array(
					'id'        => 'chairman_name',
					'type'      => 'text',
					'title'     => esc_html__('Name', 'samharam'),
					'default'   => esc_html__('Dr. Ahmed Ali Al-Mashani', 'samharam')
                ),
				array(
					'id'        => 'designation',
					'type'      => 'text',
					'title'     => esc_html__('Designation', 'samharam'),
					'default'   => esc_html__('Chairman', 'samharam')
                ),

                array(
					'id' => 'signature_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('images', 'samharam'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
				),

			),
        );
        // facilities section Options
		$this->sections[] = array(
			'title'     => esc_html__('facilities Setting', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
			'icon'      => 'el el-barcode',
			'fields'    => array(

                array(
					'id' => 'facilities_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('images', 'samharam'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
				),
				array(
					'id'        => 'facilities_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('Our Facilities', 'samharam')
				),
			),
        );
        // TESTIMONIALS section Options
		$this->sections[] = array(
			'title'     => esc_html__('Testimonial Setting', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
			'icon'      => 'el el-barcode',
			'fields'    => array(
				array(
					'id'        => 'testimonial_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('Testimonials', 'samharam')
				),
			),
        );
        // ourtopper_title section Options
		$this->sections[] = array(
			'title'     => esc_html__('Our Topper Setting', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
			'icon'      => 'el el-barcode',
			'fields'    => array(
				array(
					'id'        => 'ourtopper_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('OUR TOPPERS', 'samharam')
				),
			),
        );
        // trustees_title section Options
		$this->sections[] = array(
			'title'     => esc_html__('Our Trustees Setting', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
			'icon'      => 'el el-barcode',
			'fields'    => array(
				array(
					'id'        => 'trustees_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('BOARD OF TRUSTEES', 'samharam')
				),
				array(
					'id'        => 'trustees_subtitle',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('Faculties at Samahram Bilingual Private School', 'samharam')
				),
			),
        );
        // about features section Options
		$this->sections[] = array(
			'title'     => esc_html__('About Page Setting', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
			'icon'      => 'el el-barcode',
			'fields'    => array(
				array(
					'id' => 'gallery_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('images', 'samharam'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
					'title' => esc_html__('message', 'samharam'),
				),
				array(
					'id'        => 'image_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('View Our Gallery', 'samharam')
				),
				array(
					'id'        => 'image_title_link',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('#', 'samharam')
				),
			),
        );
        // schools time section Options
		$this->sections[] = array(
			'title'     => esc_html__('School Time Setting', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
			'icon'      => 'el el-barcode',
			'fields'    => array(
				array(
					'id'        => 'school_time',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('SCHOOL TIMINGS', 'samharam')
				)
			),
        );
        // schools uniform section Options
		$this->sections[] = array(
			'title'     => esc_html__('School Uniform Setting', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
			'icon'      => 'el el-barcode',
			'fields'    => array(
				array(
					'id'        => 'school_uniform_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('SCHOOL UNIFORMS ', 'samharam')
				),
				array(
					'id'        => 'school_subuniform_subtitle',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('Throughout its history, Samharam Bilingual Private School has maintained a commitment to providing  ', 'samharam')
				)
			),
        );
        // gallery and video page section Options
		$this->sections[] = array(
			'title'     => esc_html__('Gallery and Video Title Setting', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
			'icon'      => 'el el-barcode',
			'fields'    => array(
				array(
					'id'        => 'gallery_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('Photos ', 'samharam')
				),
				array(
					'id'        => 'video_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('Videos  ', 'samharam')
				)
			),
        );
        // teacher and stuff page section Options
		$this->sections[] = array(
			'title'     => esc_html__('Teachers and Stuff Page Setting', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
			'icon'      => 'el el-barcode',
			'fields'    => array(
				array(
					'id'        => 'teacher_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('DATA  FOR TEACHERS ', 'samharam')
				),
				array(
					'id'        => 'staff_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('DATA  FOR STAFF  ', 'samharam')
				)
			),
        );
        // facilities page section Options
		$this->sections[] = array(
			'title'     => esc_html__('Facilities Page Setting', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
			'icon'      => 'el el-barcode',
			'fields'    => array(
				array(
					'id' => 'transportation_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('images', 'samharam'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
					'title' => esc_html__('Transportation Image', 'samharam'),
				),
				array(
					'id'        => 'transportation_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('Transportation ', 'samharam')
				),
				array(
					'id'        => 'transportation_content',
					'type'    	=> 'editor',
                    'title'     => esc_html__('Transportation Content', 'samharam'),
				),
				array(
					'id' => 'library_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('images', 'samharam'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
					'title' => esc_html__('Library Image', 'samharam'),
				),
				array(
					'id'        => 'library_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('Library', 'samharam')
				),
				array(
					'id'        => 'library_content',
					'type'    	=> 'editor',
                    'title'     => esc_html__('Library Content', 'samharam'),
				),
				array(
					'id' => 'sports_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('images', 'samharam'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
					'title' => esc_html__('sports Image', 'samharam'),
				),
				array(
					'id'        => 'sports_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('Sports', 'samharam')
				),
				array(
					'id'        => 'sports_content',
					'type'    	=> 'editor',
                    'title'     => esc_html__('sports Content', 'samharam'),
				),
				array(
					'id' => 'prayer_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('images', 'samharam'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
					'title' => esc_html__('prayer Image', 'samharam'),
				),
				array(
					'id'        => 'prayer_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('Prayer Rooms', 'samharam')
				),
				array(
					'id'        => 'prayer_content',
					'type'    	=> 'editor',
                    'title'     => esc_html__('prayer Content', 'samharam'),
				),
				array(
					'id' => 'computer_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('images', 'samharam'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
					'title' => esc_html__('computer Image', 'samharam'),
				),
				array(
					'id'        => 'computer_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('computer Lab', 'samharam')
				),
				array(
					'id'        => 'computer_content',
					'type'    	=> 'editor',
                    'title'     => esc_html__('computer Content', 'samharam'),
				),


				array(
					'id' => 'classes_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('images', 'samharam'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
					'title' => esc_html__('classes Image', 'samharam'),
				),
				array(
					'id'        => 'classes_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('smart classes', 'samharam')
				),
				array(
					'id'        => 'classes_content',
					'type'    	=> 'editor',
                    'title'     => esc_html__('computer Content', 'samharam'),
				),
				//extra cariculum section

				array(
					'id' => 'extra_cariculumn_image',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('images', 'samharam'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
					'title' => esc_html__('classes Image', 'samharam'),
				),
				array(
					'id'        => 'extra_cariculumn_title',
					'type'      => 'text',
					'title'     => esc_html__('Title text', 'samharam'),
					'default'   => esc_html__('Extra Curricular Activities', 'samharam')
				),
				array(
					'id'        => 'extra_cariculumn_content',
					'type'    	=> 'editor',
                    'title'     => esc_html__('Content', 'samharam'),
				),




			),
		);
		// contact page section Options
		$this->sections[] = array(
			'title'     => esc_html__('Contact Page Setting', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
			'icon'      => 'el el-barcode',
			'fields'    => array(
				array(
					'id'        => 'google_map',
					'type'    	=> 'editor',
                    'title'     => esc_html__('Address Setup', 'samharam'),

                ),
				array(
					'id'        => 'google_map_location',
					'type'    	=> 'editor',
                    'title'     => esc_html__('Google Map', 'samharam'),

                ),
			),
		);


		        // curriculum page section Options
				$this->sections[] = array(
					'title'     => esc_html__('Curriculum Page Setting', 'samharam'),
					'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
					'icon'      => 'el el-barcode',
					'fields'    => array(
						array(
							'id' => 'first_image',
							'type' => 'media',
							'url' => true,
							'compiler' => 'true',
							'desc' => esc_html__('images', 'samharam'),
							'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
							'title' => esc_html__('First Section Image', 'samharam'),
						),
						array(
							'id'        => 'first_section_title',
							'type'      => 'text',
							'title'     => esc_html__('Title text', 'samharam'),
							'default'   => esc_html__('First Section Title ', 'samharam')
						),
						array(
							'id'        => 'first_section_content',
							'type'    	=> 'editor',
							'title'     => esc_html__('First Section Content', 'samharam'),
						),
						array(
							'id' => 'second_image_bg',
							'type' => 'media',
							'url' => true,
							'compiler' => 'true',
							'desc' => esc_html__('images', 'samharam'),
							'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
							'title' => esc_html__('Second Section Image', 'samharam'),
						),
						array(
							'id' => 'second_feature_bg',
							'type' => 'media',
							'url' => true,
							'compiler' => 'true',
							'desc' => esc_html__('images', 'samharam'),
							'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
							'title' => esc_html__('Second Section Feature Image', 'samharam'),
						),
						array(
							'id'        => 'second_title',
							'type'      => 'text',
							'title'     => esc_html__('Title text', 'samharam'),
							'default'   => esc_html__('Second Title', 'samharam')
						),
						array(
							'id'        => 'Second_content',
							'type'    	=> 'editor',
							'title'     => esc_html__('Second Second Content', 'samharam'),
						),

						array(
							'id'        => 'third_title',
							'type'      => 'text',
							'title'     => esc_html__('Title text', 'samharam'),
							'default'   => esc_html__('third', 'samharam')
						),
						array(
							'id'        => 'third_subtitle',
							'type'      => 'text',
							'title'     => esc_html__('Sub Title text', 'samharam'),
							'default'   => esc_html__('Sub Title', 'samharam')
						),
						array(
							'id'        => 'third_content',
							'type'    	=> 'editor',
							'title'     => esc_html__('third Content', 'samharam'),
						),





					),
				);







		// Error Page Options
		$this->sections[] = array(
			'title'     => esc_html__('Error Page', 'samharam'),
			'desc'      => esc_html__('Use this section to select options for 404', 'samharam'),
			'icon'      => 'el el-error',
			'fields'    => array(
				array(
					'id' => 'samharam_404_bg',
					'type' => 'media',
					'url' => true,
					'compiler' => 'true',
					'desc' => esc_html__('Blog Page Header Background.', 'samharam'),
					'subtitle' => esc_html__('Add/Upload Blog Page Header Background', 'samharam'),
					'title' => esc_html__('Blog Background', 'samharam'),
					'default' => array(
						'url' => SAMHARAM_IMAGES . '/error_bg.jpg',
					),
				),
				array(
					'id'        => 'samharam_error_header_text',
					'type'      => 'text',
					'title'     => esc_html__('Error header text', 'samharam'),
					'default'   => esc_html__('OOPS!', 'samharam')
				),
				array(
					'id'        => 'samharam_error_subheader',
					'type'      => 'text',
					'title'     => esc_html__('Error Page Sub Header text', 'samharam'),
					'default'   => esc_html__('404 - PAGE NOT FOUND', 'samharam')
				)

			),
		);

            $theme_info  = '<div class="redux-framework-section-desc">';
            $theme_info .= '<p class="redux-framework-theme-data description theme-uri">' . esc_html__('<strong>Theme URL:</strong> ', 'samharam') . '<a href="' . $this->theme->get('ThemeURI') . '" target="_blank">' . $this->theme->get('ThemeURI') . '</a></p>';
            $theme_info .= '<p class="redux-framework-theme-data description theme-author">' . esc_html__('<strong>Author:</strong> ', 'samharam') . $this->theme->get('Author') . '</p>';
            $theme_info .= '<p class="redux-framework-theme-data description theme-version">' . esc_html__('<strong>Version:</strong> ', 'samharam') . $this->theme->get('Version') . '</p>';
            $theme_info .= '<p class="redux-framework-theme-data description theme-description">' . $this->theme->get('Description') . '</p>';
            $tabs = $this->theme->get('Tags');
            if (!empty($tabs)) {
                $theme_info .= '<p class="redux-framework-theme-data description theme-tags">' . esc_html__('<strong>Tags:</strong> ', 'samharam') . implode(', ', $tabs) . '</p>';
            }
            $theme_info .= '</div>';

            $this->sections[] = array(
                'title'     => esc_html__('Import / Export', 'samharam'),
                'desc'      => esc_html__('Import and Export your Redux Framework settings from file, text or URL.', 'samharam'),
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
                'title'     => esc_html__('Theme Information', 'samharam'),
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
                'title'     => esc_html__('Theme Information 1', 'samharam'),
                'content'   => esc_html__('<p>This is the tab content, HTML is allowed.</p>', 'samharam')
            );

            $this->args['help_tabs'][] = array(
                'id'        => 'redux-help-tab-2',
                'title'     => esc_html__('Theme Information 2', 'samharam'),
                'content'   => esc_html__('<p>This is the tab content, HTML is allowed.</p>', 'samharam')
            );

            // Set the help sidebar
            $this->args['help_sidebar'] = esc_html__('<p>This is the sidebar content, HTML is allowed.</p>', 'samharam');
        }

        /*

          All the possible arguments for Redux.
          For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments

        */
        public function setArguments() {

            $theme = wp_get_theme(); // For use with some settings. Not necessary.

            $this->args = array(
                // TYPICAL -> Change these values as you need/desire
                'opt_name'          => 'samharam_opt',            // This is where your data is stored in the database and also becomes your global variable name.
                'display_name'      => $theme->get('Name'),     // Name that appears at the top of your panel
                'display_version'   => $theme->get('Version'),  // Version that appears at the top of your panel
                'menu_type'         => 'menu',                  //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                'allow_sub_menu'    => true,                    // Show the sections below the admin menu item or not
                'menu_title'        => esc_html__('Theme Options', 'samharam'),
                'page_title'        => esc_html__('Theme Options', 'samharam'),

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
    $reduxConfig = new Samharam_Theme_Config();
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
