<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments"><? _e('This post is password protected. To view it please enter your password below:'); ?></p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<div class="content_bar">
		<h3 id="comments"><?php comments_number( __('0 Comments'), 
												__('One Response'), 
												__('% Responses') );?> <? _e( " to &#8220;".the_title('','',false)."&#8221;"); ?></h3>
	</div>

	<ol class="commentlist">

	<?php foreach ($comments as $comment) : ?>

		<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
			<div class="comment_content">
				<?php echo get_avatar( $comment, 32 ); ?>
            
            	<?php edit_comment_link(__('(Edit)'),'<div class="edit_link">','</div>'); ?>
                <cite><?php comment_author_link() ?></cite>
                <div class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date(__('F jS, Y') ); ?><? _e(" at "); ?><?php comment_time() ?></a></div>
                
				<?php if ($comment->comment_approved == '0') : ?>
                <em><?php _e("Your comment is awaiting moderation."); ?></em>
                <?php endif; ?>
    
                <?php comment_text() ?>
                
			</div>
			
		</li>

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link(); ?></div>
		<div class="alignright"><?php next_comments_link(); ?></div>
        <div style="clear: both"></div>
	</div>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if (comments_open()) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e("Sorry, comments are closed for this item."); ?></p>

	<?php endif; ?>
<?php endif; ?>


<?php if (comments_open()) : ?>

<div class="content_bar">
	<h3 id="respond"><? _e('Leave a comment'); ?></h3>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	<input type="hidden" name="redirect_to" value="<? echo __('&#00;').$_SERVER['REQUEST_URI']; ?>" />
<?php if ( $user_ID ) : ?>

<p><? echo sprintf( __('Logged in as %s.'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>' ); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<? _e('Log out of this account'); ?>"><? _e('Log out &raquo;'); ?></a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author"><small><? _e('Name'); ?> <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email"><small><? _e("Mail (will not be published)"); ?> <?php if ($req) echo _e('(required)'); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small><? _e("Website"); ?></small></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="<? _e('Submit Comment'); ?>" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
