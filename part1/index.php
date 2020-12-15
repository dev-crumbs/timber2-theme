<?php
/**
 *
 * @package  Minimal Timber Theme  
 *
 */

$context = Timber::context();  // Import the main Timber Class
$context['posts'] = new Timber::get_posts();// Creates a collection with the posts from the loop that is available to Timber

$templates = array( 'index.twig' ); // Create an array with the "index.twig" template as element
if ( is_home() ) {
	array_unshift( $templates, 'front-page.twig', 'home.twig' );
} // add front-page.twig and home.twig to the templates array if the home page is a static page(fallback strategy so that every possible template can use the Timber class)
Timber::render( $templates, $context );  // Send the Timber class to the templates array.
