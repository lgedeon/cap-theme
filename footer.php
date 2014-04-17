<?php
/**
 * Template for or Carole Ann Penney child theme
 *
 * Contains the closing of the id=main div and all content after
 *
 */
?>

<?php // clear after all floats so background image stretches to bottom ?>
<br style="clear: both;" />

</div><!-- #main -->

<?php if ( is_front_page() ) : ?>
	<section class="home-footer">
	<?php
		$cap_posts = new WP_Query( 'posts_per_page=1' );
		$cap_posts->the_post();
		$cap_post = $cap_posts->post->ID;
	?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>

				<?php twentyeleven_posted_on(); ?>

			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
		</article><!-- #post-<?php the_ID(); ?> -->

		<?php cap_do_mailchimp() ?>

	</section>
<?php endif; ?>

</div><!-- #page -->

<footer id="colophon" role="contentinfo">
	<div id="site-generator">
		&copy; CAROLE ANN PENNEY 2014 &nbsp; | &nbsp; DESIGN: <a href="http://kristindivona.com/">KRISTIN DIVONA</a> &nbsp; | &nbsp; WEB DEVELOPMENT: LUKE GEDEON &nbsp; | &nbsp; HEADSHOTS: MATT FERRARA PHOTOGRAPHY &nbsp; | &nbsp; POWERED BY WORDPRESS
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>