<?php
$section = get_field('s_fps_section-2');
$post_data = get_post($section[0]);
global $post;
$post = $post_data;
setup_postdata($post);

$bg = get_field('s_fpsb_image');
$color = get_field('s_fpsb_color');

if( have_rows('s_f_feature') ):
?>
<div class="nk-box bg-dark-1 text-white">
	<div class="bg-image bg-image-parallax"<?php include(locate_template('elements/fp-section-bg.php')); ?>></div>
	<div class="nk-gap-5 mnt-6"></div>
	<div class="container">
			<div class="row vertical-gap">
					<?php while ( have_rows('s_f_feature') ) : the_row(); ?>
					<div class="col-md-6 col-lg-3">
							<div class="nk-ibox-1">
									<div class="nk-ibox-icon">
											<span class="pe-7s-<?php the_sub_field('s_f_f_icon'); ?>"></span>
									</div>
									<div class="nk-ibox-cont">
											<div class="nk-ibox-title"><?php the_sub_field('s_f_f_counter'); ?></div>
											<div class="nk-ibox-text"><?php the_sub_field('s_f_f_title'); ?></div>
									</div>
							</div>
					</div>
					<?php endwhile; ?>
			</div>
	</div>
	<div class="nk-gap-5 mnt-6"></div>
</div>
<?php endif; wp_reset_postdata(); ?>