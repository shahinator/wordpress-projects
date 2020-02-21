<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Xander
 */

if ( ! function_exists( 'xander_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function xander_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'xander' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'xander_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function xander_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'xander' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'xander_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function xander_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'xander' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'xander' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'xander' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'xander' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'xander' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'xander' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'xander_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function xander_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>

		<?php
		endif; // End is_singular().
	}
endif;


// Main Menu
function xander_main_menu(){
	wp_nav_menu( array(
		'menu' => 'primary',
		'theme_location' => 'primary',
		'container' => 'div',
		'container_class' => 'container-custom-class',
		'container_id' => 'xander_main_menu',
		'menu_class' => ' navbar-nav',
		'menu_id' => 'menu',
		'items_wrap' 	=> '<ul class="navbar-nav">%3$s</ul>',
		'fallback_cb'  => 'Xander_Navwalker::fallback',
		'walker'     => new Xander_Navwalker() 
	));
}

//Wrap Post count in a span
add_filter('wp_list_categories', 'xander_cat_count_span');
function xander_cat_count_span($links) {
 $links = str_replace('</a> (', '</a> <span>', $links);
 $links = str_replace(')', '</span>', $links);
 return $links;
}



//xander author image 

if (!function_exists('xander_get_svg')) :
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
	endif;

	function xander_social_share(){?>
		<div class="row theme_social_share">
			<div class="col-lg-6">
				<div class="post-tag">
					<div class="tag">
						<i class="icon_tags_alt"></i>
						<div class="tag-list">
							<?php 
							$tag=get_the_tags( get_the_ID() );
							if(!empty($tag)){
								echo get_the_tag_list('',' , ');
							}?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="social-media">
					<div class="share">
						<a href="#"><i class="social_share"></i></a>
					</div>
					<ul>
						<li> <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="//www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_permalink()) ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>  </li>
						<li> <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="//twitter.com/home?status=<?php echo esc_html( get_the_title() ) ?> - <?php echo esc_url( get_permalink()) ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>  </li>
						<li>  <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="//plus.google.com/share?url=<?php echo esc_url( get_permalink()) ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>  </li>
					</ul>
				</div>
			</div>
		</div>
	
	<?php
	}

	/* WP Link Pages */
if ( ! function_exists( 'xander_wp_link_pages' ) ) {
	function xander_wp_link_pages() {
	  $defaults = array(
		'before'           => '<div class="wp-link-pages">' . esc_html__( 'Pages:', 'xander' ),
		'after'            => '</div>',
		'link_before'      => '<span>',
		'link_after'       => '</span>',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'pagelink'         => '%',
		'echo'             => 1
	  );
	  wp_link_pages( $defaults );
	}
  }