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

<section id="villaowner">

	<div class="container">

		<div class="row">

			<h2>Are you a Villa Owner?</h2>

			<?php the_field( 'vo_intro', 'options' ); ?>

			<a href="<?php home_url( '/submit-your-villa' ); ?>" title="">Submit Your Villa</a>

		</div>
		
	</div>

</section>