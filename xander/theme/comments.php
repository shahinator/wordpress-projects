<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
if (have_comments()) {
    ?>
    <div class="comments-block">
        <h2><?php echo esc_html__('Comments', 'xander'); ?></h2>
        <?php
        wp_list_comments(array(
            'style' => 'ul',
            'short_ping' => true,
            'avatar_size' => '64',
            'walker' => new Xander_Comment_Walker(),
        ));
        ?>
        
        <?php
        the_comments_pagination(array(
            'prev_text' => xander_get_svg(array('icon' => 'arrow-left')) . '<span class="screen-reader-text">' . esc_html__('Previous', 'xander') . '</span>',
            'next_text' => '<span class="screen-reader-text">' . esc_html__('Next', 'xander') . '</span>' . xander_get_svg(array('icon' => 'arrow-right')),
        ));
        ?>
    </div>
    <?php
}


$user = wp_get_current_user();
$user_identity = $user->display_name;
$req = get_option('require_name_email');
$aria_req = $req ? " aria-required='true'" : '';

$formargs = array(
    'id_form' => 'commentform',
    'id_submit' => 'submit',
    'title_reply' => esc_html__('Leave a Comment', 'xander'),
    'title_reply_to' => esc_html__('Leave a Comment to %s', 'xander'),
    'cancel_reply_link' => esc_html__('Cancel Reply', 'xander'),
    'id_submit'         => 'submit',
     'class_submit'      => 'submit btn btn-primary',
     'name_submit'       => 'submit',
    'label_submit' => esc_html__('Leave a Reply', 'xander'),
    'must_log_in' => '<div>' .
    sprintf(
            wp_kses(__('You must be <a href="%s">logged in</a> to post a comment.', 'xander'), array('a' => array('href' => array()))), wp_login_url(apply_filters('the_permalink', get_permalink()))
    ) . '</div>',
    'logged_in_as' => '<div>' .
    sprintf(
            wp_kses(__('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'xander'), array('a' => array('href' => array()))), admin_url('profile.php'), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink()))
    ) . '</div>',
    'comment_notes_before' => '<p>' .
    esc_html__('Your email address will not be published.', 'xander') . ( $req ? '<span class="required">*</span>' : '' ) .
    '</p>',
    'comment_notes_after' => '',
    'fields' => apply_filters('comment_form_default_fields', array(
        'author' =>
        '<div class="mt-0 row"><div class="col-md-10">' .
        '<input id="author"  class="form-control"  placeholder="'.esc_attr__("Your name*", 'xander').'" name="author" type="text" value="' . esc_attr($commenter['comment_author']) .
        '" size="30"' . $aria_req . ' /></div></div>',
        'email' =>
        '<div class="mt-15 row"><div class="col-md-10">' .
        '<input id="email" name="email" placeholder="'.esc_attr__("Your email*", 'xander').'"  class="form-control" type="text" value="' . esc_attr($commenter['comment_author_email']) .
        '" size="30"' . $aria_req . ' /></div></div>',
            )
    ),

    'comment_field' => '<div class="mt-15 row"><div class="col-md-10"><textarea placeholder="'.esc_attr__("Comment", 'xander').'"   class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
    '</textarea></div></div>',
);

comment_form($formargs);
?>