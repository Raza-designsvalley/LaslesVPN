<?php
/**
 * The header for our theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">


<?php wp_head(); ?>
</head>
<body>
<header class="container">
	<div class="row desktop-show">
		<div class="col-sm-2 logo">
			<div class="header-logo">
				<?php
					echo get_custom_logo();
				?>
			</div>
		</div>
		<div class="col-sm-7">
			<div Class="header-menu">
				<?php
				  wp_nav_menu(
					  array(
						'theme_location' => 'header-menu',
						'menu_id' => 'header-menu'
							)
				  );
				?>
			</div>
		</div>
		<div class="col-sm-3 registr-btn">
			<div class="header-register-button">
				<?php dynamic_sidebar('header-user-button'); ?>
			</div>
		</div>
	</div>
	
	
<div class="for-mbl-tog">
	<div class="row">
		<div class="col-sm-4 mbl-logo">
			<div class="logo">
				<div class="header-logo">
					<?php
						echo get_custom_logo();
					?>
				</div>
			</div>
		</div>
		
		<div class="col-sm-4 mbl-mnu">
			<div class="dropdown">
				<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-hidden="true">
				MENU
				</button>
				<div class="dropdown-menu">
				
				<?php
				  wp_nav_menu(
					  array(
						'theme_location' => 'header-menu',
						'menu_id' => 'header-menu'
							)
				  );
				?>
				
				</div>
			</div>
		</div>
		
		<div class="col-sm-4 mbl-log">
			<div class="log-info">
				<?php dynamic_sidebar('header-user-button'); ?>
			</div>
		</div>
	</div>
</div>


</header>