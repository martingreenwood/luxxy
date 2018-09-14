<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package luxxy
 */

get_header(); ?>

	<section id="banner" class="parallax-window" data-bleed="50" data-parallax="scroll" data-image-src="<?php the_field( 'banner_image' ); ?>"></section>

	<section id="site_wrap">

		<div id="primary" class="content-area">
			<main id="main" class="site-main">

				<div class="container">
					<div class="row">
						<div class="columns eight">
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'villa' );

							endwhile; // End of the loop.
							?>
						</div>
						<div class="calendar sidebar__innner">
							<div class="wrapper">
								<h4>Check Availability</h4>
								<?php echo do_shortcode( '[wpsbc id="1" title="no" legend="yes" dropdown="yes" start="1" display="1" language="auto" month="0" year="0" jump="no" history="1" tooltip="3" theme="classic" weeknumbers="no" highlighttoday="no"]' ); ?>
								<!-- <div class="key">
									<div class="avail"><span></span>Available</div>
									<div class="booked"><span></span>Booked</div>
								</div> -->
								<a href="<?php echo home_url( '/booking-enquiry' ); ?>" title="">Send booking enquiry</a>
								<a href="<?php echo home_url( '/ask-a-question' ); ?>" title="">Ask the owner a question</a>
							</div>
						</div>
					</div>
				</div>

			</main>
		</div>

		<div id="features">
			<div class="container">
				<div class="row">
					<div class="columns seven">
						<h2>Features of <?php the_title( ); ?></h2>
						
						<?php if (get_field( 'type' )): ?>
						<dl>
							<dt>Property Type</dt><!--
							--><dd><?php the_field( 'type' ); ?></dd>
						</dl>
						<?php endif; ?>

						<?php if (get_field( 'meals' )): ?>
						<dl>
							<dt>Meals</dt><!--
							--><dd><?php the_field( 'meals' ); ?></dd>
						</dl>
						<?php endif; ?>

						<?php if (get_field( 'house_rules' )): ?>
						<dl>
							<dt>House Rules:</dt><!--
							--><dd><?php the_field( 'house_rules' ); ?></dd>
						</dl>
						<?php endif; ?>

						<?php $location_types = get_field('location_type'); ?>
						<?php
						if ($location_types): ?>
						<dl>
							<dt>Location Type:</dt><!--
							--><dd>
								<?php foreach( $location_types as $location_type ): ?>
									<span><?php echo $location_type->name ?></span>
								<?php endforeach; ?>
							   </dd>
						</dl>
						<?php endif; ?>

						<?php if ( have_rows( 'rooms' ) ) : ?>
							<?php while ( have_rows( 'rooms' ) ) : the_row(); ?>
								
								<?php if ( have_rows( 'room_type' ) ) : ?>
									<ul>
										<?php while ( have_rows( 'room_type' ) ) : the_row(); ?>
											<dl>
												<?php $roomname = get_sub_field( 'name' ); ?>
												<dt><?php the_sub_field( 'name' ); ?></dt><!--
												--><dd>
													<?php if ( have_rows( 'room' ) ) : ?>
														<?php while ( have_rows( 'room' ) ) : the_row(); ?>
															<p>
																<?php if ($roomname !== get_sub_field( 'type' )): ?>
																	<strong><?php the_sub_field( 'type' ); ?></strong><br>
																<?php endif ?>
																<?php the_sub_field( 'features' ); ?>
															</p>
														<?php endwhile; ?>
													<?php endif; ?>
												   </dd>
											</dl>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>

							<?php endwhile; ?>
						<?php endif; ?>

						<?php $notes = get_field('notes'); ?>
						<?php
						if ($notes): ?>
						<dl>
							<dt>Notes:</dt><!--
							--><dd>
									<?php echo $notes ?>
							   </dd>
						</dl>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>

		<div id="reviews">
			<div class="container">
				<div class="row">
					<div class="columns seven">
						<h2>Reviews</h2>
						<div class="post_rvws">
							<?php echo do_shortcode( '[site_reviews_form assign_to="post_id" id="jl3w0ar7" hide="title"]' ); ?>
						</div>
						<div class="rvws">
							<?php echo do_shortcode( '[site_reviews assigned_to="post_id" schema="false" id="jl3w20ra" hide="avatar"]' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<div id="mapps">
		<div class="row">
			<div class="columns">
				<?php $location = get_field('location'); if( !empty($location) ): ?>
				<div class="map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="container">
			<div class="row nearby">
				<div class="columns eight">
					<?php the_field( 'location_text' ); ?>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part( 'template-parts/page', 'how-it-works' ); ?>

	<?php get_template_part( 'template-parts/page', 'villa-owner' ); ?>

<?php
get_footer();
