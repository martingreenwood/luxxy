<?php
/**
 * Template Name: Properties
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package luxxy
 */

get_header(); ?>

	<?php get_template_part( 'template-parts/page', 'banner' ) ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php if (have_posts()): ?>
			<div class="container maincopy">
				<div class="row">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>
				</div>

				<div class="row">
					<div class="villas columns twelve">
					<?php
					$args = array(
						'post_type' => 'villas',
						'posts_per_page' => -1,
					);
					$the_query = new WP_Query($args);
					if ($the_query->have_posts()) {
					?>
					<ul><!--
						<?php 
						while ($the_query->have_posts()) {
							$the_query->the_post();
							?>
						 --><li>
						 		<?php the_post_thumbnail( 'full' ); ?>
						 		<header>
							 		<h3><span><?php the_title( ); ?></span><span><?php the_field( 'villa_location' ); ?></span></h3>
						 		</header>
								<a href="<?php the_permalink(); ?>">Find Out More</a><!--
								--><a class="enquire" href="<?php the_permalink(); ?>">Enquire</a>
							</li><!--
							<?php 
						} // end while have posts
						?>
						--><li>
							<div class="submit">
								<div class="submitone">
									<h3>Submit your Villa</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
									<a href="#" title="Submit your villa">Submit</a>
								</div>
							</div>
						</li><!--
					--></ul>
					<?php
					wp_reset_postdata();
					} // end if have posts
					?>
					</div>
				</div>
			</div>
			<?php endif ?>

		</main>
	</div>

<?php
get_footer();
