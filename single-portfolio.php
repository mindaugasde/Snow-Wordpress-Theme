<?php get_header(); ?>

<div class="container">
	<div class="nk-portfolio-single">

			<div class="nk-gap-4 mb-14"></div>
			<h1 class="nk-portfolio-title display-4"><?php the_title(); ?></h1>
			<div class="row vertical-gap">
					<div class="col-lg-8">
							<div class="nk-portfolio-info">
									<div class="nk-portfolio-text">
											<?php the_content(); ?>
									</div>
							</div>
					</div>
					<div class="col-lg-4">
							<table class="nk-portfolio-details">
									<tr>
											<?php $client = get_field_object('s_psp_client'); ?>
											<td>
													<strong><?php echo $client['label']; ?>:</strong>
											</td>
											<td><?php echo $client['value']; ?></td>
											
									</tr>
									<tr>
											<?php $date = get_field_object('s_psp_date'); ?>
											<td>
													<strong><?php echo $date['label']; ?>:</strong>
											</td>
											<td><?php echo $date['value']; ?></td>
									</tr>
									<tr>
											<td>
													<strong><?php _e('Share','vcs-starter'); ?>:</strong>
											</td>
											<td>
													<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="<?php _e('Share page on Facebook','vcs-starter'); ?>" data-share="facebook"><?php _e('Facebook','vcs-starter'); ?></a>,
													<a href="https://twitter.com/home?status=Our%20awesome%20link%20<?php the_permalink(); ?>" title="<?php _e('Share page on Twitter','vcs-starter'); ?>" data-share="twitter"><?php _e('Twitter','vcs-starter'); ?></a>,
													<a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php the_field('s_psp_inner_image'); ?>&description=<?php the_title(); ?>" title="<?php _e('Share page on Pinterest','vcs-starter'); ?>" data-share="pinterest"><?php _e('Pinterest','vcs-starter'); ?></a>
											</td>
									</tr>
							</table>
					</div>
			</div>
			<div class="nk-gap-4 mt-14"></div>

	</div>
</div>

<img class="nk-img-fit" src="<?php the_field('s_psp_inner_image'); ?>">

<?php
$prev_post = get_previous_post();
$next_post = get_next_post();
?>

<!-- START: Pagination -->
<div class="nk-pagination nk-pagination-center">
	<div class="container">
			<?php if( $prev_post ): ?>
			<a class="nk-pagination-prev" href="<?php echo get_permalink($prev_post->ID); ?>">
					<span class="pe-7s-angle-left"></span> <?php _e('Previous Work','vcs-starter'); ?></a>
			<?php endif; ?>
			<a class="nk-pagination-center" href="<?php echo get_bloginfo('wpurl') . '/' . $post->post_type . '/'; ?>">
					<span class="nk-icon-squares"></span>
			</a>
			<?php if( $next_post ): ?>
			<a class="nk-pagination-next" href="<?php echo get_permalink($next_post->ID); ?>"><?php _e('Next Work','vcs-starter'); ?> <span class="pe-7s-angle-right"></span> </a>
			<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>