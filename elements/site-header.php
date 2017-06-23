<header class="nk-header<?php if(!is_front_page()): ?> nk-header-opaque<?php endif; ?>">
		<!--
		START: Navbar
-->
		<nav class="nk-navbar nk-navbar-top<?php if(is_front_page()): ?> nk-navbar-sticky nk-navbar-transparent nk-navbar-white-text-on-top<?php endif; ?>">
				<div class="container">
						<div class="nk-nav-table">
								<a href="<?php bloginfo('wpurl'); ?>" class="nk-nav-logo">
									
										<?php
											$logo = get_field('s_ms_logo','option');
											$logo_alt = get_field('s_ms_logo_alternative','option');
										?>
									
										<img src="<?php echo $logo; ?>" alt="" width="85" class="nk-nav-logo-onscroll">
										<img src="<?php echo $logo_alt; ?>" alt="" width="85">
								</a>
								
								<?php pro_menus('nk-nav nk-nav-right hidden-md-down','primary-navigation'); ?>

								<ul class="nk-nav nk-nav-right nk-nav-icons">
										<li class="single-icon hidden-lg-up">
												<a href="#" class="nk-navbar-full-toggle">
														<span class="nk-icon-burger">
																<span class="nk-t-1"></span>
																<span class="nk-t-2"></span>
																<span class="nk-t-3"></span>
														</span>
												</a>
										</li>
								</ul>
						</div>
				</div>
		</nav>
		<!-- END: Navbar -->

</header>

<?php include(locate_template('elements/mobile-menu.php')); ?>