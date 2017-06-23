<?php
$section = get_field('s_fps_section-3');
$post_data = get_post($section[0]);
global $post;
$post = $post_data;
setup_postdata($post);

$bg = get_field('s_fpsb_image');
$color = get_field('s_fpsb_color');
?>
<div class="nk-box" id="projects"<?php include(locate_template('elements/fp-section-bg.php')); ?>>
	<div class="nk-gap-4 mt-5"></div>
	<?php if( $subtitle = get_field('s_pp_subtitle') ): ?>
	<h2 class="text-xs-center display-4"><?php echo $subtitle; ?></h2>
	<?php endif; ?>

	<div class="nk-gap mnt-6"></div>
	<div class="container">
			<div class="row">
					<div class="col-lg-8 offset-lg-2">
							<div class="text-xs-center">
								<?php the_content(); ?>
							</div>
					</div>
			</div>
	</div>
	<?php
	wp_reset_postdata();
	
	$page = (get_query_var('paged')) ? get_query_var('paged') : 1;

	$my_query = new WP_Query(array(
		'post_type' => 'Portfolio',
		'cat' => array(12),
		'posts_per_page' => -1,
		'orderby' => 'menu_order',
		'order' => 'DESC',
		'paged' => $page
	));

	if ( $my_query->have_posts() ) :
	?>

	<div class="nk-gap-2 mt-12"></div>
	<div class="container">
	<div class="nk-portfolio-list nk-isotope nk-isotope-3-cols">

			<?php
				$i = 1; while ($my_query->have_posts()) : $my_query->the_post();
				$cat = get_the_category($post->ID);

				$cat_arg1 = $cat[0]->name;
				$cat_arg2 = '';
				if($cat[1]) { $cat_arg2 = $cat[1]->name; }

				// Check and create final category
				if( $cat_arg1 == 'Featured' ){
					$cat_name = $cat_arg2;
				} else {
					$cat_name = $cat_arg1;
				}
			?>
			<div class="nk-isotope-item" data-filter="<?php echo $cat_name; ?>">
					<div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
							<a href="<?php the_permalink(); ?>" class="nk-portfolio-item-link"></a>
							<div class="nk-portfolio-item-image">
									<div style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');"></div>
							</div>
							<div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
									<div>
											<h2 class="portfolio-item-title h3"><?php the_title(); ?></h2>
											<div class="portfolio-item-category"><?php echo $cat_name; ?></div>
									</div>
							</div>
					</div>
			</div>
			<?php $i++; endwhile; ?>

	</div>
	</div>
	<div class="nk-gap-4 mt-15"></div>
</div>
<?php wp_reset_postdata(); unset($my_query); endif; ?>