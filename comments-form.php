<?php if ( comments_open() ) : ?>
<!-- START: Reply -->
<div class="nk-reply">
		<div class="nk-gap-3"></div>
		<div class="container">
				<div class="row">
						<div class="col-lg-8 offset-lg-2">
								<h3 class="nk-title"><?php _e('Leave a Comment','vcs-starter'); ?>:</h3>
								<div class="nk-gap-1"></div>
								<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="nk-form">
										<div class="row vertical-gap">
												<div class="col-md-6">
														<input type="text" class="form-control required" name="author" placeholder="Your Name">
												</div>
												<div class="col-md-6">
														<input type="email" class="form-control required" name="email" placeholder="Your Email">
												</div>
										</div>
										<div class="nk-gap-1"></div>
											<textarea class="form-control required" name="comment" rows="8" placeholder="Your Comment" aria-required="true"></textarea>
										<div class="nk-gap-1"></div>
										<div class="nk-form-response-success"></div>
										<div class="nk-form-response-error"></div>
										<button name="submit" type="submit" class="nk-btn"><?php _e('Post a Comment','vcs-starter'); ?></button>
										<?php comment_id_fields(); ?>
								</form>
						</div>
				</div>
		</div>
		<div class="nk-gap-3"></div>
</div>
<!-- END: Reply -->
<?php endif; ?>