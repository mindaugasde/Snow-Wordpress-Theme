<?php get_header(); ?>

<?php if(get_post_thumbnail): ?>
<!-- START: Header Title -->
<div class="nk-header-title nk-header-title-lg">
		<div class="bg-image">
				<div style="background-image: url('<?php the_post_thumbnail_url('large-2'); ?>');"></div>

		</div>
		<div class="nk-header-table">
				<div class="nk-header-table-cell">
						<div class="container">




						</div>
				</div>
		</div>

</div>
<!-- END: Header Title -->
<?php
endif;

$cat = get_the_category($post->ID);
$current_cat = $cat[0]->name;
?>

<div class="container">
		<div class="row">
				<div class="col-lg-8 offset-lg-2">
						<div class="nk-gap-4"></div>

						<!-- START: Post -->
						<div class="nk-blog-post nk-blog-post-single">
								<h1 class="display-4"><?php the_title(); ?></h1>

								<div class="nk-post-meta">
										<div class="nk-post-date"><?php echo get_the_date('F d, Y'); ?></div>
										<div class="nk-post-category"><a href="#"><?php echo $current_cat; ?></a></div>
										<div class="nk-post-comments-count"><?php echo $post->comment_count . ' ' . __('Comments','vcs-starter'); ?></div>
								</div>

								<!-- START: Post Text -->
								<div class="nk-post-text">
									<?php the_content(); ?>
								</div>
								<!-- END: Post Text -->

								<!-- START: Post Share -->
								<div class="nk-post-share">
										<strong><?php _e('Share','vcs-starter'); ?>:</strong>
										<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="<?php _e('Share page on Facebook','vcs-starter'); ?>" data-share="facebook"><?php _e('Facebook','vcs-starter'); ?></a>,
										<a href="https://twitter.com/home?status=Our%20awesome%20link%20<?php the_permalink(); ?>" title="<?php _e('Share page on Twitter','vcs-starter'); ?>" data-share="twitter"><?php _e('Twitter','vcs-starter'); ?></a>,
										<a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php the_post_thumbnail_url('large-2'); ?>&description=<?php the_title(); ?>" title="<?php _e('Share page on Pinterest','vcs-starter'); ?>" data-share="pinterest"><?php _e('Pinterest','vcs-starter'); ?></a>
								</div>
								<!-- END: Post Share -->
						</div>
						<!-- END: Post -->

						<div class="nk-gap-3"></div>
				</div>
		</div>
</div>

<?php comments_template(); ?>

<?php include(locate_template('comments-form.php')); ?>

<?php get_footer(); ?>