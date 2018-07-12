<?php
/**
 * The banner template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package luxxy
 */

?>

<?php $feat_image = get_the_post_thumbnail_url( $post->ID, 'full' ); ?>

<section id="villas">

	<div class="container">

		<div class="row">

			<h2>Featured Villas</h2>

			<?php
			$args = array(
				'post_type' => 'villas',
				'posts_per_page' => 2,
				'meta_query' => array(
					array(
						'key' => 'feature_villa',
						'value' => '1',
						'compare' => '==' // not really needed, this is the default
					)
				)
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
			--></ul>
			<?php
			wp_reset_postdata();
			} // end if have posts
			?>

		</div>
		
	</div>

</section>