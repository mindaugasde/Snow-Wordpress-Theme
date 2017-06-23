<?php
$section = get_field('s_fps_section-4');
$post_data = get_post($section[0]);
global $post;
$post = $post_data;
setup_postdata($post);

$bg = get_field('s_fpsb_image');
$color = get_field('s_fpsb_color');
?>
<div class="nk-box bg-dark-1">
	<div class="bg-image bg-image-parallax"<?php include(locate_template('elements/fp-section-bg.php')); ?>></div>
	<div class="nk-gap-5 mnt-6"></div>
	<div class="nk-gap-3"></div>
	<div class="container-fluid">
			<?php
			$anime_speed = get_field('s_pp_animation_speed');
			wp_reset_postdata();
		
			$page = (get_query_var('paged')) ? get_query_var('paged') : 1;

			$my_query = new WP_Query(array(
				'post_type' => 'Testimonials',
				'posts_per_page' => -1,
				'orderby' => 'date',
				'order' => 'DESC',
				'paged' => $page,
			));

			if ( $my_query->have_posts() ) :
			?>
			<!-- START: Carousel -->
			<div class="nk-carousel nk-carousel-all-visible text-white" data-autoplay="<?php echo $anime_speed ? $anime_speed : '18000'; ?>" data-dots="true">
					<div class="nk-carousel-inner">
							<?php $i = 1; while ($my_query->have_posts()) : $my_query->the_post(); ?>
							<div>
									<div>
											<blockquote class="nk-blockquote-style-1 text-white">
													<?php the_content(); ?>
													<cite><?php the_title(); ?></cite>
											</blockquote>
											<div class="nk-gap-3 mt-10"></div>
									</div>
							</div>
							<?php $i++; endwhile; ?>
					</div>
			</div>
			<?php wp_reset_postdata(); unset($my_query); endif; ?>
			<!-- END: Carousel -->
	</div>
	<div class="nk-gap-4 mt-3"></div>
</div>