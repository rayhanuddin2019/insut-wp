<?php

use Insut\Core\WalkerNav;
wp_nav_menu([
	'menu'            => 'primary',
	'theme_location'  => 'primary',
	'container'       => false,
	'menu_id'         => '',
	'menu_class'      => 'navbar-nav',
	'depth'           => 3,
	'walker'          => new WalkerNav(),
	'fallback_cb'     => '\Insut\Core\WalkerNav::fallback',
]);

