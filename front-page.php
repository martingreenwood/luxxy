<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package luxxy
 */

get_header(); ?>

	<?php get_template_part( 'template-parts/page', 'banner' ); ?>
	
	<?php get_template_part( 'template-parts/page', 'feature-villas' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

		</main>
	</div>

	<?php get_template_part( 'template-parts/page', 'how-it-works' ); ?>

	<?php get_template_part( 'template-parts/page', 'villa-owner' ); ?>

<?php
get_footer();
