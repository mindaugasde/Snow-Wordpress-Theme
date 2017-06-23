<?php 

// The number of all posts for a given query
$posts_found = $GLOBALS['wp_query']->found_posts;
// The number of posts for just the page
$posts_count = $GLOBALS['wp_query']->post_count;

if(have_posts()): ?>

	<?php while (have_posts()) : the_post(); ?>

	<div class="nk-header-title nk-header-title-full">
			<div class="bg-image">
					<?php if(get_the_post_thumbnail()): ?>
					<div style="background-image: url('<?php the_post_thumbnail_url("full"); ?>');"></div>
					<?php endif; ?>
					<div class="bg-image-overlay" style="background-color: rgba(12, 12, 12, 0.6);"></div>
			</div>
			<div class="nk-header-table">
					<div class="nk-header-table-cell">
							<div class="container">
							
									<?php
										$title_1 = get_field('s_fpp_subtitle');
										$title_2 = get_field('s_fpp_subtitle_2');
										$title_3 = get_field('s_fpp_subtitle_3');
								
										if( $title_1 || $title_2 || $title_3 ):
									?>
									
									<?php if( $title_1 ): ?>
									<h2 class="nk-subtitle text-white"><?php echo $title_1; ?></h2>
									<?php
										endif;
										if( $title_2 && $title_3 ):
									?>
									<h1 class="nk-title display-3 text-white"><?php echo $title_2; ?>
											<br>
											<em class="fw-400"><?php echo $title_3; ?></em>
									</h1>
									
									<?php endif; endif; ?>

									<div class="nk-gap"></div>
									<div class="nk-header-text text-white">
											<div class="nk-gap-4"></div>
									</div>


							</div>
					</div>
			</div>

			<div>
					<a class="nk-header-title-scroll-down text-white" href="#nk-header-title-scroll-down">
							<span class="pe-7s-angle-down"></span>
					</a>
			</div>

	</div>

	<div id="nk-header-title-scroll-down"></div>

	<?php endwhile; ?>	

<?php endif; ?>