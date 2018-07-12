 <?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package luxxy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div>

	<div class="popularfeats">
		<h3>Popular Features</h3><!--
	 --><ul><!--
			--><li>Berbecue</li><!--
			--><li>Washing Machine</li><!--
			--><li>Private Pool</li><!--
			--><li>Air Conditioning</li><!--
			--><li>Internet</li><!--
			--><li>Parking</li><!--
		--></ul>
	</div>

	<div class="gallery">
		<div class="slider">
			<?php 
			$images = get_field('gallery');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if( $images ): foreach( $images as $image ): ?>
			<div><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></div>
			<?php endforeach;
			endif; ?>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
