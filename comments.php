<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bosun
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
?>

	<div class="comments-area">
		<h4> <?php printf( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'bosun' ), number_format_i18n( get_comments_number() ) );?></h4>

		<?php wp_list_comments('type=comment&callback=mytheme_comment' ); ?>

	</div>
	<div class="comment-form">
		
		<?php 

			//Declare Vars
			$comment_send = 'Send';
			$comment_reply = 'Leave a Reply';
			$comment_reply_to = 'Reply';

			$comment_author = 'Name';
			$comment_email = 'EMail';
			$comment_body = 'Write Comment';
			$comment_url = 'Website';
			$comment_cookies_1 = ' By commenting you accept the';
			$comment_cookies_2 = ' Privacy Policy';

			$comment_before = 'Registration isn\'t required.';

			$comment_cancel = 'Cancel Reply';


			//Array
			$comments_args = array(
			//Define Fields
			'fields'               => array(
			//Author field
			'author'  => '<input id="author" class="form-control" name="author" aria-required="true" placeholder="' . $comment_author . '"></input>',
			//Email Field
			'email'   => '<input id="email" class="form-control" name="email" placeholder="' . $comment_email . '"></input>',
			//URL Field
			'url'     => '<input id="url" class="form-control" name="url" placeholder="' . $comment_url . '"></input>',
			//Cookies
			'cookies' => '<input type="checkbox" required>' . $comment_cookies_1 . '<a href="' . get_privacy_policy_url() . '">' . $comment_cookies_2 . '</a>',		
			),
			// Change the title of send button
			'label_submit'         => __( $comment_send ),
			// Change the title of the reply section
			'title_reply'          => __( $comment_reply ),
			// Change the title of the reply section
			'title_reply_to'       => __( $comment_reply_to ),
			//Cancel Reply Text
			'cancel_reply_link'    => __( $comment_cancel ),
			// Redefine your own textarea (the comment body).
			'comment_field'        => '<p class="comment-form-comment"><br /><textarea id="comment" class="form-control w-100" name="comment" cols="30" rows="9" aria-required="true" placeholder="' . $comment_body . '"></textarea></p>',
			//Message Before Comment
			'comment_notes_before' => __( $comment_before ),
			// Remove "Text or HTML to be displayed after the set of comment fields".
			'comment_notes_after'  => '',
			//Submit Button ID
			'id_submit'            => __( 'comment-submit' ),
			//Submit Butto Class
			'class_submit'         => __( 'button button-contactForm btn_1 boxed-btn' ),
			);
			comment_form( $comments_args );


		?>
		
	</div>