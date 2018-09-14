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

	<div class="entry-content" id="overview">
		<h1><?php the_field( 'hero_title' ); ?></h1>
		<h2><?php the_field( 'sub_title' ); ?></h2>

		<div class="quicknav">
			<ul>
				<li data-src="overview">Overview</li><!--
				--><li data-src="features">Features</li><!--
				--><li data-src="reviews">Reviews</li><!--
				--><li data-src="mapps">Location</li>
			</ul>
		</div>
		
		<div class="quick-stats">
			<ul>
				<li>
					<svg id="svg-house" viewBox="0 0 24 24" width="100%" height="100%"><g transform="translate(0.5, 0.5)"><polyline data-cap="butt" fill="none" stroke-miterlimit="10" points="4,9.3 4,22 10,22 10,17 14,17 14,22 20,22 20,9.3 " stroke-linejoin="miter" stroke-linecap="butt"></polyline> <polyline data-cap="butt" fill="none" stroke-miterlimit="10" points="1,12 12,2 23,12 " stroke-linejoin="miter" stroke-linecap="butt"></polyline> <rect x="10" y="9" fill="none" stroke-linecap="square" stroke-miterlimit="10" width="4" height="4" stroke-linejoin="miter"></rect></g></svg>
					<h4><?php the_field( 'type' ); ?></h4>
				</li><!--
				--><li>
					<svg id="svg-bed" viewBox="0 0 24 24" width="100%" height="100%"><g transform="translate(0.5, 0.5)"><line data-cap="butt" fill="none" stroke-miterlimit="10" x1="1" y1="15" x2="23" y2="15" stroke-linejoin="miter" stroke-linecap="butt"></line> <line data-cap="butt" fill="none" stroke-miterlimit="10" x1="1" y1="19" x2="23" y2="19" stroke-linejoin="miter" stroke-linecap="butt"></line> <rect x="4" y="2" fill="none" stroke-linecap="square" stroke-miterlimit="10" width="16" height="6" stroke-linejoin="miter"></rect> <polyline fill="none" stroke-linecap="square" stroke-miterlimit="10" points="23,22 23,15 20,8 " stroke-linejoin="miter"></polyline> <polyline fill="none" stroke-linecap="square" stroke-miterlimit="10" points="4,8 1,15 1,22 " stroke-linejoin="miter"></polyline></g></svg>
					<h4><?php the_field( 'bedrooms' ); ?></h4>
				</li><!--
				--><li>
					<svg id="svg-sleeps" viewBox="0 0 24 24" width="100%" height="100%"><g transform="translate(0.5, 0.5)"><path fill="none" stroke-linecap="square" stroke-miterlimit="10" d="M4,7L4,7 C2.895,7,2,6.105,2,5v0c0-1.105,0.895-2,2-2h0c1.105,0,2,0.895,2,2v0C6,6.105,5.105,7,4,7z" stroke-linejoin="miter"></path> <path fill="none" stroke-linecap="square" stroke-miterlimit="10" d="M6,21H3v-4 l-2,0v-5c0-1.105,0.895-2,2-2h1" stroke-linejoin="miter"></path> <path fill="none" stroke-linecap="square" stroke-miterlimit="10" d="M20,7L20,7 c1.105,0,2-0.895,2-2v0c0-1.105-0.895-2-2-2h0c-1.105,0-2,0.895-2,2v0C18,6.105,18.895,7,20,7z" stroke-linejoin="miter"></path> <path fill="none" stroke-linecap="square" stroke-miterlimit="10" d="M18,21h3v-4 l2,0v-5c0-1.105-0.895-2-2-2h-1" stroke-linejoin="miter"></path> <path fill="none" stroke-linecap="square" stroke-miterlimit="10" d="M12,7L12,7 c-1.657,0-3-1.343-3-3v0c0-1.657,1.343-3,3-3h0c1.657,0,3,1.343,3,3v0C15,5.657,13.657,7,12,7z" stroke-linejoin="miter"></path> <path fill="none" stroke-linecap="square" stroke-miterlimit="10" d="M15,23H9v-6H7v-5 c0-1.105,0.895-2,2-2h6c1.105,0,2,0.895,2,2v6h-2V23z" stroke-linejoin="miter"></path></g></svg>
					<h4><?php the_field( 'people' ); ?></h4>
				</li><!--
				--><li>
					<svg id="svg-bathrooms" viewBox="0 0 24 24" width="100%" height="100%"><g transform="translate(0.5, 0.5)"> <line fill="none" stroke-linecap="square" stroke-miterlimit="10" x1="6" y1="20" x2="6" y2="22" stroke-linejoin="miter"></line> <line fill="none" stroke-linecap="square" stroke-miterlimit="10" x1="18" y1="20" x2="18" y2="22" stroke-linejoin="miter"></line> <path fill="none" stroke-linecap="square" stroke-miterlimit="10" d="M1,13v2c0,2.8,2.2,5,5,5h12 c2.8,0,5-2.2,5-5v-2H1z" stroke-linejoin="miter"></path> <path fill="none" stroke-linecap="square" stroke-miterlimit="10" d="M23,13V5c0-1.7-1.3-3-3-3 l0,0c-1.7,0-3,1.3-3,3l0,0" stroke-linejoin="miter"></path> <path fill="none" stroke-linecap="square" stroke-miterlimit="10" d="M20,8h-6l0,0 c0-1.7,1.3-3,3-3l0,0C18.7,5,20,6.3,20,8L20,8z" stroke-linejoin="miter"></path> </g></svg>
					<h4><?php the_field( 'bathrooms' ); ?></h4>
				</li><!--
				--><li>
					<svg id="svg-toilet" viewBox="0 0 24 24" width="100%" height="100%"><g transform="translate(0.5, 0.5)"><line data-cap="butt" fill="none" stroke-width="1" stroke-miterlimit="10" x1="3.1" y1="15" x2="20.9" y2="15" stroke-linejoin="miter" stroke-linecap="butt"></line> <path data-cap="butt" fill="none" stroke-width="1" stroke-miterlimit="10" d="M6,12V3c0-1.1,0.9-2,2-2h8 c1.1,0,2,0.9,2,2v9" stroke-linejoin="miter" stroke-linecap="butt"></path> <path fill="none" stroke-width="1" stroke-linecap="square" stroke-miterlimit="10" d="M21,12H3v2c0,3.3,2.7,6,6,6 l0,0v3h6v-3l0,0c3.3,0,6-2.7,6-6V12z" stroke-linejoin="miter"></path></g></svg>
					<h4><?php the_field( 'wcs' ); ?></h4>
				</li><!--
				--><li>
					<svg id="svg-nights" viewBox="0 0 24 24" width="100%" height="100%"><g transform="translate(0.5, 0.5)"><path fill="none" stroke-width="1" stroke-linecap="square" stroke-miterlimit="10" d="M19,15C13.5,15,9,10.5,9,5 c0-0.9,0.1-1.8,0.4-2.6C5.1,3.5,2,7.4,2,12c0,5.5,4.5,10,10,10c4.6,0,8.5-3.1,9.6-7.4C20.8,14.9,19.9,15,19,15z" stroke-linejoin="miter"></path></g></svg>
					<h4><?php the_field( 'min_stay' ); ?> Nights</h4>
				</li>
			</ul>
		</div>
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
