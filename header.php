<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Alternative
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
					<?php
					if ( function_exists( 'the_custom_logo' ) ) {
					    the_custom_logo();
					}
					?>
			</div>
			<div class="col-md-10">
				<div class="mobile-nav">
				    <div id="nav-icon1">
					  <span></span>
					  <span></span>
					  <span></span>
					</div>
				    <div class="responsive-menu">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						) );
						?>
						<div class="buttons-wrapper">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'buttons',
							) );
							?>
						</div>
				     </div>
				</div>
			</div>
		</div>
	</div>
</header>

<div id="content" class="site-content">
