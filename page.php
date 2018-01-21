<?php
/**
 * Default page
 *
 * @package Alternative
 */

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'partials/featured-image' );
		?>
		<div id="page" class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12 text-center">
					<h3>
						<?php
						the_title();
						?>
					</h3>
					<span class="separator"></span>
					<div class="content">
						<?php
						the_content();
						?>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}

get_footer();
