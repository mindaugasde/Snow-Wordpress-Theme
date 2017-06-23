<?php
$blog = get_field('s_bs_posts');
$title = get_field('s_bs_title');
$content = get_field('s_bs_content');
?>
<div class="nk-box bg-gray-1" id="blog">
	<div class="nk-gap-4 mt-5"></div>

	<h2 class="text-xs-center display-4"><?php echo $title; ?></h2>

	<div class="nk-gap mnt-6"></div>
	<div class="container">
			<div class="row">
					<div class="col-lg-8 offset-lg-2">
						<div class="text-xs-center">
							<?php echo $content; ?>
						</div>
					</div>
			</div>
	</div>

	<div class="nk-gap-2 mt-12"></div>
	<div class="container">
			<!-- START: Carousel -->
			<div class="nk-carousel-2 nk-carousel-x2 nk-carousel-no-margin nk-carousel-all-visible nk-blog-isotope" data-dots="true">
					<div class="nk-carousel-inner">

							<?php
							for($i=0; $i < sizeof($blog); $i++):
							
							$post_data = get_post($blog[$i]);
							global $post;
							$post = $post_data;
							setup_postdata($post);
						
							$cat = get_the_category($post->ID);
							$current_cat = $cat[0]->name;
							?>
							<div>
									<div>
											<div class="pl-15 pr-15">
													<div class="nk-blog-post">
															<div class="nk-post-thumb">
																	<a href="<?php the_permalink(); ?>">
																			<img src="<?php the_post_thumbnail_url('medium-2'); ?>" alt="" class="nk-img-stretch">
																	</a>
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
											<div class="nk-gap-1"></div>
									</div>
							</div>
							<?php wp_reset_postdata(); endfor; ?>

					</div>
			</div>
			<!-- END: Carousel -->
	</div>
	<div class="nk-gap-5 mt-20"></div>
</div>