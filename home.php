<?php
get_header();

// The number of all posts for a given query
$posts_found = $GLOBALS['wp_query']->found_posts;
// The number of posts for just the page
$posts_count = $GLOBALS['wp_query']->post_count;

if(have_posts()):

# Generating categories array
$cat_array = array();
while (have_posts()) : the_post();

$cat = get_the_category($post->ID);
$cat_name = $cat[0]->name;

// Check and create final category
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

endwhile;
# End of Generating categories array
?>

<div class="container">
		<div class="row">
				<div class="col-lg-8 offset-lg-2">
						<!-- START: Filter -->
						<div class="nk-pagination nk-pagination-nobg nk-pagination-center">
								<a href="#nk-toggle-filter">
										<span class="nk-icon-squares"></span>
								</a>
						</div>
						<ul class="nk-isotope-filter">
								<li class="active" data-filter="*"><?php _e('All','vcs-starter'); ?></li>
								<?php for($k = 0; $k < sizeof($cat_array); $k++): ?>
								<li data-filter="<?php echo $cat_array[$k]; ?>"><?php echo $cat_array[$k]; ?></li>
								<?php endfor; ?>
						</ul>
						<!-- END: Filter -->

						<!-- START: Posts List -->
						<div class="nk-blog-isotope nk-isotope nk-isotope-gap nk-isotope-1-cols">

								<?php
								while (have_posts()) : the_post();
								$cat = get_the_category($post->ID);
								$current_cat = $cat[0]->name;
								?>
								<!-- START: Post -->
								<div class="nk-isotope-item" data-filter="<?php echo $current_cat; ?>">
										<div class="nk-blog-post">
												<div class="nk-post-thumb">
														<?php if(get_post_thumbnail): ?>
														<a href="<?php the_permalink(); ?>">
																<img src="<?php the_post_thumbnail_url('medium-2'); ?>" alt="" class="nk-img-stretch">
														</a>
														<?php endif; ?>
														<div class="nk-post-category"><a href="#"><?php echo $current_cat; ?></a></div>
												</div>
												<h2 class="nk-post-title h4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

												<div class="nk-post-date">
														<?php echo get_the_date('F d, Y'); ?>
												</div>

												<div class="nk-post-text">
														<?php the_excerpt(); ?>
												</div>
										</div>
								</div>
								<!-- END: Post -->
								<?php endwhile; ?>

						</div>
						<!-- END: Posts List -->
				</div>
		</div>

		<div class="nk-gap-4"></div>

</div>

<?php else: ?>

<p><?php _e('Posts no found','vcs-starter'); ?></p>

<?php endif; get_footer(); ?>