<?php
/**
 * Template Name: Contact page
 *
 * @package Alternative
 */

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'partials/featured-image' );
		?>
		
		<?php
	}
}

get_footer();
