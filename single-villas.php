<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package luxxy
 */

get_header(); ?>

	<section id="banner" class="parallax-window" data-bleed="50" data-parallax="scroll" data-image-src="<?php the_field( 'banner_image' );; ?>"></section>

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
								<?php echo do_shortcode( '[sbc title="no"]' ); ?>
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
						<?php if ($location_types): ?>
						<dl>
							<dt>Location Type:</dt><!--
							--><dd>
								<?php foreach( $location_types as $location_type ): ?>
									<span><?php echo $location_type; ?></span>
								<?php endforeach; ?>
							   </dd>
						</dl>
						<?php endif; ?>

						<?php $general_incs = get_field( 'general'); ?>
						<?php if ($general_incs): ?>
						<dl>
							<dt>General:</dt><!--
							--><dd>
								<?php foreach( $general_incs as $general ): ?>
									<span><?php echo $general; ?></span>
								<?php endforeach; ?>
							   </dd>
						</dl>
						<?php endif; ?>

						<?php $kitchen_incs = get_field( 'kitchen'); ?>
						<?php if ($kitchen_incs): ?>
						<dl>
							<dt>Kitchen:</dt><!--
							--><dd>
								<?php foreach( $kitchen_incs as $kitchen ): ?>
									<span><?php echo $kitchen; ?></span>
								<?php endforeach; ?>
							   </dd>
						</dl>
						<?php endif; ?>

						<?php $dining_incs = get_field( 'dining'); ?>
						<?php if ($dining_incs): ?>
						<dl>
							<dt>Dining:</dt><!--
							--><dd>
								<?php foreach( $dining_incs as $dining ): ?>
									<span><?php echo $dining; ?></span>
								<?php endforeach; ?>
							   </dd>
						</dl>
						<?php endif; ?>

					</div>
				</div>
				<div class="row">
					<div class="columns seven">
						// Reviews
					</div>
				</div>
			</div>
		</div>

	</section>

	<?php get_template_part( 'template-parts/page', 'how-it-works' ); ?>

	<?php get_template_part( 'template-parts/page', 'villa-owner' ); ?>

<?php
get_footer();
