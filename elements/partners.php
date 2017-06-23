<?php if( have_rows('s_p_partner','option') ): ?>
<div class="bg-white">
	<div class="container">
			<div class="nk-carousel-2 nk-carousel-x4 nk-carousel-no-margin nk-carousel-all-visible">
					<div class="nk-carousel-inner">
							<?php while ( have_rows('s_p_partner','option') ) : the_row();
							$image = get_sub_field('s_p_p_logo','option');
							?>
							<div>
									<div>
											<div class="nk-box-1">
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="nk-img-fit">
											</div>
									</div>
							</div>
							<?php endwhile; ?>
					</div>
			</div>
	</div>
</div>
<?php endif; ?>