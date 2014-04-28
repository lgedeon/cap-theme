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
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

				<?php twentyeleven_posted_on(); ?>

			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
		</article><!-- #post-<?php the_ID(); ?> -->

		<aside id="mc_embed_signup">
			<?php cap_do_mailchimp() ?>
			<span style="font-size: 2.5em; font-weight: bold; display: block;">INSPIRATION</span>
			<span style="font-size: 2.1em;">IN YOUR INBOX!</span>
			<p style="font-size: 1.1em; font-style: italic;line-height: 1.6em;margin-top: .4em;">Monthly tools and tricks from me&nbsp;to&nbsp;you.</p>
		</aside>

		<?php cap_do_testimonial() ?>

		<aside class="cap-social" style="font-size: 57px;">
			<a href="mailto:test@mail.com?Subject=From%20your%20Website" target="_top"></a>
			<a href="http://caroleannctd.tumblr.com/" style="background-position-x: -1em;"></a>
			<a href="http://www.instagram.com/caroleannctd" style="background-position-x: -2em;"></a>
			<a href="https://www.facebook.com/caroleannctd" style="background-position-x: -3em;"></a>
			<a href="http://www.pinterest.com/caroleannctd" style="background-position-x: -4em;"></a>
			<a href="www.flickr.com/photos/connectthedotscrafts/" style="background-position-x: -5em;"></a>
			<a href="http://lnkd.in/3J2vV8" style="background-position-x: -6em;"></a>
		</aside>
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