<!-- Header
		    ================================================== -->
		<header>

			<div class="logo-box">
				<a class="logo" href="<?php echo esc_url(home_url('/')); ?>">Konstantinos Stamatis</a>
			</div>

			<a class="elemadded responsive-link" href="#">Menu</a>
			<div class="menu-box">
			<?php

			$defaults = array(
				'menu'            => 'Main Menu',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'walker'        => new stamatisan_walker_nav_menu
			);

			wp_nav_menu( $defaults );

			?>
				<div class="header-foot">
					<div class="copyright-box">
						<p>stamatisan.com 2014. All rights reserved</p>
					</div>
				</div>
			</div>

		</header>
		<!-- End Header -->