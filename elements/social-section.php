<?php if( have_rows('s_ms_social_media','option') ): ?>
<ul>
		<?php while ( have_rows('s_ms_social_media','option') ) : the_row(); ?>
			<li><a href="<?php the_sub_field('s_ms_sm_link','option'); ?>"><i class="fa <?php the_sub_field('s_ms_sm_icon','option'); ?>"></i></a></li>
		<?php endwhile; ?>
</ul>
<?php endif; ?>