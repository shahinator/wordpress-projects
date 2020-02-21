<?php

add_action('widgets_init', 'xander_recent_photo_widgets');
function xander_recent_photo_widgets(){
	register_widget('xander_recent_photot');}


class xander_recent_photot extends WP_Widget {
	public function __construct() {
		$widget_ops = array('classname' => 'xander_recent', 'description' => esc_html__('Xander: Recent Photos Widget','xander') );
		$control_ops = array('id_base' => 'xander_recent-photo-widget');
		parent::__construct('xander_recent-photo-widget', esc_html__('Xander: Recent Photos','xander'), $widget_ops, $control_ops);
	}

	function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$number = $instance['number'];
		echo $before_widget;

		if($title) {
			echo $before_title.$title.$after_title;
		}
		?>

		<!-- start coding  -->

		<div class="recent-photos">
			<ul>
				<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => $number,
					'has_password' => false,
					'order' => 'DESC'
				);
				$post = new WP_Query($args);
					if($post->have_posts()):
				?>
				<?php while($post->have_posts()): $post->the_post(); ?>
				<?php
					$permalink = get_permalink();
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'xander-rcnt-post-wdgt' );
				?>		
					<li>
						<a href="<?php the_permalink();?>" target="_blank" title="<?php the_title();?>">
						<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							}
							else {}
						?>
						</a>
					</li>
				<?php  endwhile; endif; 
				wp_reset_postdata();
				?>			
			</ul>
		</div>
		<!-- start code here -->

		<?php
		echo $after_widget;
	}
	function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['number'] = $new_instance['number'];
		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => 'Recent Photos', 'number' => 12);
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title','xander'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('Number of Posts to show','xander'); ?>:</label>
			<input class="widefat" type="number" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" value="<?php echo esc_attr($instance['number']); ?>" />
		</p>
	<?php
	}
}
