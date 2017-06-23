<?php
$section = get_field('s_fps_section-1');
$post_data = get_post($section[0]);
global $post;
$post = $post_data;
setup_postdata($post);

$bg = get_field('s_fpsb_image');
$color = get_field('s_fpsb_color');
?>

<div id="about"<?php include(locate_template('elements/fp-section-bg.php')); ?>>

	<div class="container">
			<div class="row">
					<div class="col-lg-8 offset-lg-2 text-xs-center">
							<div class="nk-gap-4 mt-9"></div>

							<h2 class="display-4"><?php the_title(); ?></h2>
							<div class="nk-gap mnt-5"></div>

							<?php the_content(); ?>
							
							<?php the_post_thumbnail('full', array('class' => 'nk-img-fit')); ?>

							<div class="nk-gap-4 mt-25"></div>
					</div>
			</div>
	</div>
</div>

<?php wp_reset_postdata(); ?>