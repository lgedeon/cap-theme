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
	printf( __( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>', 'twentyeleven' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		'<span>' . esc_html( get_the_date( 'M') ) . '</span><span>' . esc_html( get_the_date( 'j') ) . '</span><span>' . esc_html( get_the_date( 'Y') ) . '</span>'
	);
}

function cap_do_mailchimp() {
	?>
<!-- Begin MailChimp Signup Form -->
<aside id="mc_embed_signup">
	<form action="http://wordpress.us3.list-manage.com/subscribe/post?u=4fa4dda8a90f268be0ccebe9c&amp;id=8d3eeda600" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

		<div class="mc-field-group">
			<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="first name">
		</div>
		<div class="mc-field-group">
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="email">
		</div>
		<div id="mce-responses" class="clear">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		<div style="position: absolute; left: -5000px;"><input type="text" name="b_4fa4dda8a90f268be0ccebe9c_8d3eeda600" value=""></div>
		<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
	</form>
</aside>

<!--End mc_embed_signup-->
	<?php
}

function cap_add_typekit_header() {
	?>
<script type="text/javascript" src="//use.typekit.net/cih8ljz.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){console.log('typekit failed')}</script>
	<?php
}

add_filter( 'wp_head', 'cap_add_typekit_header' );