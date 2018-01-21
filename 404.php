<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package Alternative
 */

get_header();
?>

	<div id="page" class="container page-not-found">
		<div class="row">
			<div class="col-md-12 col-xs-12 text-center">
				<h1>
					<?php
					_e( '404 Not Found', 'alternative' );
					?>
				</h1>
				<span class="separator"></span>
				<div class="content">
					<p>
						<?php
						_e( 'It looks like nothing was found at this location.', 'alternative' );
						?>
					</p>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
