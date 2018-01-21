<?php
/**
 * Template Name: About page
 *
 * @package Alternative
 */

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'partials/featured-image' );
		?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php
					the_title( '<h1 class="b-bottom">', '</h1>' );
					the_content();
					?>

				</div>
			</div>
		</div>
		<?php
	}
}

get_footer();
