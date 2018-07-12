<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package luxxy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>

	<?php $content_image = get_field( 'content_image' ); ?>

	<div class="entry-content columns <?php if ( $content_image ) : ?>seven<?php else: ?>twelve<?php endif; ?>">
		<?php
			the_content();
		?>
	</div>

	<?php if ( $content_image ) : ?>
	<div class="entry-image columns five">
		<img src="<?php echo $content_image['url'] ?>" alt="">
	</div>
	<?php endif; ?>

</article>
