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

<section id="banner" class="parallax-window" data-bleed="50" data-parallax="scroll" data-image-src="<?php echo $feat_image; ?>">

	<div class="table">
		<div class="cell middle">
			<h1><?php the_field( 'banner_text' ); ?></h1>
			<?php if (get_field( 'banner_link' )): ?>
				<a href="<?php the_field( 'banner_link' ); ?>" title="Read More"><?php the_field( 'banner_link_text' ); ?></a>
			<?php endif; ?>
		</div>
	</div>

</section>