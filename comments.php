<?php
$args = array(
	'status' => 'approve',
	'post_id' => $post->ID
);
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
 
if ( $comments ):
?>

<!-- START: Comments -->
<div id="comments"></div>
<div class="nk-comments">
		<div class="nk-gap-3"></div>
		<div class="container">
				<div class="row">
						<div class="col-lg-8 offset-lg-2">
								<h3 class="nk-title"><?php _e('Comments','vcs-starter'); ?>:</h3>
								<div class="nk-gap-1"></div>
								
								<?php foreach ( $comments as $comment ): ?>
								<!-- START: Comment -->
								<div class="nk-comment">
										<div class="nk-comment-avatar">
												<a href="mailto:<?php echo $comment->comment_author_email; ?>">
														<?php echo get_avatar($comment->user_id); ?>
												</a>
										</div>
										<div class="nk-comment-meta">
												<div class="nk-comment-name"><a href="mailto:<?php echo $comment->comment_author_email; ?>"><?php echo $comment->comment_author; ?></a></div>
												<div class="nk-comment-date"><?php echo date('d F, Y', time($comment->comment_date)); ?></div>
										</div>
										<div class="nk-comment-text">
												<p><?php echo $comment->comment_content; ?></p>
										</div>

										
								</div>
								<!-- END: Comment -->
								<?php endforeach; ?>
						</div>
				</div>
		</div>
		<div class="nk-gap-3"></div>
</div>
<!-- END: Comments -->
<?php endif; ?>