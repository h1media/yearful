<?php
/**
 * Footer
 *
 * @package Alternative
 */

?>
</div>
<footer>
	
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-xs-12">
					<nav>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'footer',
						) );
						?>
					</nav>
				</div>
				<div class="col-md-4 col-xs-12 social">
					<p>
						<?php
						if ( get_field( 'twitter_account', 'option' ) ) :
						?>
							<a href="
									<?php
									the_field( 'twitter_account', 'option' );
									?>
									" target="_blank">
								<span class="fa fa-twitter fa-2x" aria-hidden="true"></span>
							</a>
						<?php
						endif;
						?>
					</p>
				</div>
				<div class="col-md-4 col-xs-12 copyright">
					<p>
						<?php
						the_field( 'copyright_text', 'option' );
						?>
					</p>
				</div>
			</div>
		</div>
	</div>

</footer>

<?php
wp_footer();
