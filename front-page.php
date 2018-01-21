<?php
/**
 * Front page
 *
 * @package Alternative
 */

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
		<div class="container-fluid slogan">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-xs-12">
						<?php
						if ( get_field( 'banner_title' ) ) :
						?>
							<h1>
								<?php
								the_field( 'banner_title' );
								?>
							</h1>
						<?php
						endif;
						?>
						<?php
						if ( get_field( 'banner_subtitle' ) ) :
						?>
							<h4>
								<?php
								the_field( 'banner_subtitle' );
								?>
							</h4>
						<?php
						endif;
						?>
						<?php
						if ( get_field( 'banner_link' ) ) :
						?>
							<a class="button" href="
							<?php
							the_field( 'banner_url' );
							?>
							" target="_blank">
							<?php
							the_field( 'banner_link' );
							?>
							</a>
						<?php
						endif;
						?>
					</div>
					<div class="col-md-7 col-xs-12">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/laptop-main.png' ); ?>" alt="Yearful Laptop">
					</div>
				</div>
			</div>
		</div>
		<div id="why" class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<?php
						if ( get_field( 'why_title' ) ) :
						?>
							<h3>
								<?php
								the_field( 'why_title' );
								?>
							</h3>
						<?php
						endif;
						?>
						<span class="separator"></span>
						<?php
						if ( get_field( 'why_description' ) ) :
							the_field( 'why_description' );
						endif;
						?>
					</div>
					<div class="col-md-6 col-xs-12 text-center">
						<img class="image-round" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/why.png' ); ?>" alt="Why a whole year">
					</div>
				</div>
			</div>
		</div>
		<div id="how" class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<img class="image-round" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/how.png' ); ?>" alt="How it works">
				</div>
				<div class="col-md-6 col-xs-12">
					<?php
					if ( get_field( 'how_title' ) ) :
					?>
						<h3>
							<?php
							the_field( 'how_title' );
							?>
						</h3>
					<?php
					endif;
					?>
					<span class="separator"></span>
					<?php
					if ( get_field( 'how_description' ) ) :
						the_field( 'how_description' );
					endif;
					?>
					<?php
					if ( get_field( 'how_link' ) ) :
					?>
						<a class="button" href="
						<?php
						the_field( 'how_url' );
						?>
						" target="_blank">
						<?php
						the_field( 'how_link' );
						?>
						</a>
					<?php
					endif;
					?>
				</div>
			</div>
		</div>
		<div id="pricing" class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<?php
						if ( get_field( 'pricing_title' ) ) :
						?>
							<h3>
								<?php
								the_field( 'pricing_title' );
								?>
							</h3>
						<?php
						endif;
						?>
						<span class="separator"></span>
						<?php
						if ( get_field( 'pricing_description' ) ) :
							the_field( 'pricing_description' );
						endif;
						?>
						<?php
						if ( get_field( 'pricing_link' ) ) :
						?>
							<a class="button" href="
							<?php
							the_field( 'pricing_url' );
							?>
							" target="_blank">
							<?php
							the_field( 'pricing_link' );
							?>
							</a>
						<?php
						endif;
						?>
					</div>
					<div class="col-md-6 col-xs-12 text-center">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/phone.png' ); ?>" alt="earful app in iPhone">
					</div>
				</div>
			</div>
		</div>
		<div id="features" class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12 text-center">
					<?php
					if ( get_field( 'features_title' ) ) :
					?>
						<h3>
							<?php
							the_field( 'features_title' );
							?>
						</h3>
					<?php
					endif;
					?>
					<?php
					if ( get_field( 'features_description' ) ) :
					?>
						<div class="features-description">
							<?php
							the_field( 'features_description' );
							?>
						</div>
					<?php
					endif;
					?>
					<span class="separator"></span>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 tab text-center">
					<h4 class="tab-heading">
						<?php
						the_field( 'feature_1_title' );
						?>
					</h4>
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/icon-categories.png' ); ?>" alt="Multiple categories">
					<div class="tab-description">
						<p>
							<?php
							the_field( 'feature_1_description' );
							?>
						</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 tab text-center">
					<h4 class="tab-heading">
						<?php
						the_field( 'feature_2_title' );
						?>
					</h4>
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/icon-sharing.png' ); ?>" alt="Sharing">
					<div class="tab-description">
						<p>
							<?php
							the_field( 'feature_2_description' );
							?>
						</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 tab text-center">
					<h4 class="tab-heading">
						<?php
						the_field( 'feature_3_title' );
						?>
					</h4>
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/icon-calendar.png' ); ?>" alt="Calendar tabs">
					<div class="tab-description">
						<p>
							<?php
							the_field( 'feature_3_description' );
							?>
						</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 tab text-center">
					<h4 class="tab-heading">
						<?php
						the_field( 'feature_4_title' );
						?>
					</h4>
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/icon-holidays.png' ); ?>" alt="National holidays">
					<div class="tab-description">
						<p>
							<?php
							the_field( 'feature_4_description' );
							?>
						</p>
					</div>
				</div>

				<div class="clearfix"></div>
				<div class="row text-center features-cta">
					<div class="col-md-12 col-xs-12">
						<?php
						if ( get_field( 'features_link' ) ) :
						?>
							<a class="button" href="
							<?php
							the_field( 'features_url' );
							?>
							" target="_blank">
							<?php
							the_field( 'features_link' );
							?>
							</a>
						<?php
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
		<div id="testimonials" class="container-fluid">
			<div class="container">
				<div class="owl-carousel">
					<?php
					    query_posts(array(
					        'post_type' => 'testimonials',
					        'post_status' => 'publish',
					        'order' => 'ASC',
					    ) );
						while ( have_posts() ) : the_post();
					?>
					<div>
						<div class="row">
							<div class="col-md-7 col-xs-12 text-center testimonial-description">
								<h4>
									<?php
									the_title();
									?>
								</h4>
									<?php
									the_content();
									?>
							</div>
							<div class="col-md-5 col-xs12 text-center testimonial-image">
								<?php
								if ( has_post_thumbnail() ) :
									the_post_thumbnail();
								endif;
								?>
							</div>
						</div>
					</div>
					<?php
					endwhile;
						wp_reset_query();
					?>
				</div>
			</div>
		</div>
		<?php
	}
}

get_footer();
