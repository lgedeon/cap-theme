<?php
// Reset the content width for the child theme. Our functions.php runs first, and parent checks if this isset.
	$content_width = 584;

// change twentyeleven's default header size
	function __cap_return_386() { return 386; }
	function __cap_return_1220() { return 1220; }
	add_filter( 'twentyeleven_header_image_width', '__cap_return_1220' );
	add_filter( 'twentyeleven_header_image_height', '__cap_return_386' );


// over-ride the posted on section
function twentyeleven_posted_on() {
	printf( __( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'twentyeleven' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		'<span>' . esc_html( get_the_date( 'M') ) . '</span><span>' . esc_html( get_the_date( 'j') ) . '</span><span>' . esc_html( get_the_date( 'Y') ) . '</span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'twentyeleven' ), get_the_author() ) ),
		get_the_author()
	);
}
