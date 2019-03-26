<?php
/**
 * Enqueue scripts and styles.
 */
function perfectpitch_scripts() {
	wp_enqueue_style( 'perfectpitch-style', get_stylesheet_directory_uri() . '/style.min.css', array(), '1.0.0' );
	wp_enqueue_style( 'lity-style', get_stylesheet_directory_uri() . '/lity.min.css', array(), '1.0.0' );
	
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto', false );

	wp_enqueue_script( 'perfectpitch-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), ' ', true );

	wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js', array(), false, true );

	wp_enqueue_script( 'scrollMagic-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js', array(), false, true );

	wp_enqueue_script( 'scrollMagicIndicators-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js', array(), false, true );

	wp_enqueue_script( 'ScrollMagicGsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array(), false, true );

	wp_enqueue_script( 'Lity-js', get_template_directory_uri() . '/js/dist/lity.js', array(), ' ', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'perfectpitch_scripts' );