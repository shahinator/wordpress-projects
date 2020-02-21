<?php

add_action('widgets_init', 'xander_about_load_widgets');
function xander_about_load_widgets(){
	register_widget('xander_about_Widget');
}


class xander_about_Widget extends WP_Widget {

	public function __construct() {
		$widget_ops = array('classname' => 'footer-about', 'description' => esc_html__('Xander: About Xander','xander'));
		$control_ops = array('id_base' => 'xander_about-widget');
		parent::__construct('xander_about-widget', esc_html__('Xander: About Xander','xander'), $widget_ops, $control_ops);
	}

	function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		echo $before_widget;

		if($title) {
			echo $before_title.$title.$after_title;
		}
		?>

		<!-- start coding  --> 
			<p><?php if(isset($instance['description'])) echo $instance['description']; ?></p>			
			<ul>
				<?php 
					if(isset($instance['phone'])){
						?><li><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $instance['phone']; ?></li><?php
					} if(isset($instance['location'])){
						?><li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $instance['location']; ?></li><?php
					} if(isset($instance['email'])){
						?><li><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $instance['email']; ?></li><?php
					}  
				?>
			</ul>
		<!-- start code here -->

		<?php
		echo $after_widget;
	}

	function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['description'] = $new_instance['description'];
		$instance['phone'] = $new_instance['phone'];
		$instance['location'] = $new_instance['location']; 
		$instance['email'] = $new_instance['email'];
		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => 'About Xander','description' => '','phone' => '','location' => '', 'email' => '' );
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title','xander'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description','xander'); ?>:</label>
			<textarea class="widefat" rows="3" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>"><?php echo $instance['description']; ?></textarea>
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone','xander'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" value="<?php echo esc_attr($instance['phone']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('location')); ?>"><?php esc_html_e('Location','xander'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('location')); ?>" name="<?php echo esc_attr($this->get_field_name('location')); ?>" value="<?php echo esc_attr($instance['location']); ?>" />
		</p> 
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email','xander'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" value="<?php echo esc_attr($instance['email']); ?>" />
		</p>
	<?php
	}
}


