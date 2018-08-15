<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<nav class="uk-navbar-container" uk-navbar>
			<?php
			wp_nav_menu(
				array(
					'menu'            => 'main',
					'menu_class'      => 'uk-navbar-nav',
					'container_class' => 'uk-navbar-left',
				)
			);
			?>
		</nav>
