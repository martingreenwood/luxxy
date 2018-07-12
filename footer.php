<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package luxxy
 */

?>

	</div><!-- #content -->

	<footer id="prefooter">
		
		<div class="container">
			<div class="row">

				<div class="company-info columns five">
					<h1><?php echo bloginfo( 'name' ); ?></h1>
					<?php the_field( 'footer_info', 'options' ); ?>
					<ul class="contact">
						<li>T: <a href="tel:<?php the_field( 'telephone', 'options' ); ?>" title=""><?php the_field( 'telephone', 'options' ); ?></a></li>
						<li>E: <a href="mailto:<?php the_field( 'email', 'options' ); ?>" title=""><?php the_field( 'email', 'options' ); ?></a></li>
					</ul>

					<ul class="social">
						<li><a href="<?php the_field( 'twitter' ); ?>" title=""><i class="fab fa-twitter"></i></a></li>
						<li><a href="<?php the_field( 'facebook' ); ?>" title=""><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="<?php the_field( 'instagram' ); ?>" title=""><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>

				<div class="news columns seven">
					<h3>Featured Articles</h3>
					<?php
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 4,
					);
					$the_query = new WP_Query($args);
					if ($the_query->have_posts()) {
					?>
					<ul>
						<?php 
						while ($the_query->have_posts()) {
							$the_query->the_post();
							?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></li>
							<?php
						} // end while have posts
						?>
					</ul>
					<?php
					wp_reset_postdata();
					} // end if have posts
					?>
				</div>
				
			</div>
		</div>

	</footer>

	<footer id="colophon" class="site-footer">
		
		<div class="container">
			<div class="row">

				<div class="copyright six columns">
					<p>&copy; <?php echo date("Y"); ?> <?php echo bloginfo( 'name' ); ?>.All rights reserved</p>
				</div>
				<div class="copyright six columns">
					<p>Site by <a href="http://wearebeard.com" title="">WEAREBEARD</a></p>
				</div>
				
			</div>
		</div>

	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
