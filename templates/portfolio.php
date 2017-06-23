<?php

/* Template Name: Portfolio */

get_header();

$page = (get_query_var('paged')) ? get_query_var('paged') : 1;

$my_query = new WP_Query(array(
	'post_type' => 'Portfolio',
	'posts_per_page' => -1,
	'orderby' => 'menu_order',
	'order' => 'DESC',
	'paged' => $page
));

if ( $my_query->have_posts() ) :

# Generating categories array
$cat_array = array();

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

if( sizeof($cat_array) > 0 ){
	$new = false;
	for( $j = 0; $j < sizeof($cat_array); $j++ ){
		if( $cat_name == $cat_array[$j] ){
			$new = true;
		}
	}
	if( $new == false ){
		array_push($cat_array, $cat_name);
	}
} else {
	array_push($cat_array, $cat_name);
}

$i++; endwhile;
# End of Generating categories array
?>

<div class="container">
	<!-- START: Filter -->
	<div class="nk-pagination nk-pagination-nobg nk-pagination-center">
			<a href="#nk-toggle-filter">
					<span class="nk-icon-squares"></span>
			</a>
	</div>
	<ul class="nk-isotope-filter">
			<li class="active" data-filter="*"><?php _e('All','vcs-starter'); ?></li>
			<?php for( $k = 0; $k < sizeof($cat_array); $k++ ): ?>
			<li data-filter="<?php echo $cat_array[$k]; ?>"><?php echo $cat_array[$k]; ?></li>
			<?php endfor; ?>
	</ul>
	<!-- END: Filter -->

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

	<div class="nk-gap-4"></div>
</div>
<?php wp_reset_postdata(); unset($my_query); endif; get_footer(); ?>