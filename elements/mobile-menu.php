<nav class="nk-navbar nk-navbar-full nk-navbar-align-center" id="nk-nav-mobile">
		<?php if( $bg_mobile = get_field('s_ms_menu_background','option') ): ?>
		<div class="nk-navbar-bg">
				<div class="bg-image" style="background-image: url('<?php echo $bg_mobile; ?>')"></div>
		</div>
		<?php endif; ?>
		<div class="nk-nav-table">
				<div class="nk-nav-row">
						<div class="container">
								<div class="nk-nav-header">

										<div class="nk-nav-logo">
												<a href="<?php bloginfo('wpurl'); ?>" class="nk-nav-logo">
														<img src="<?php echo $logo; ?>" alt="" width="85">
												</a>
										</div>

										<div class="nk-nav-close nk-navbar-full-toggle">
												<span class="nk-icon-close"></span>
										</div>
								</div>
						</div>
				</div>
				<div class="nk-nav-row-full nk-nav-row">
						<div class="nano">
								<div class="nano-content">
										<div class="nk-nav-table">
												<div class="nk-nav-row nk-nav-row-full nk-nav-row-center nk-navbar-mobile-content">
														<ul class="nk-nav">
																<!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
														</ul>
												</div>
										</div>
								</div>
						</div>
				</div>
				
				
				<div class="nk-nav-row">
						<div class="container">
								<div class="nk-nav-social">
										<?php get_template_part('elements/social-section'); ?>
								</div>
						</div>
				</div>
		</div>
</nav>