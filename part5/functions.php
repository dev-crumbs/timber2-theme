<?php
/**
 * Minimal Timber Theme
 *
 * @package  minimal-timber-Theme  
 *
 */
require_once 'vendor/autoload.php';
new Timber\Timber();


class minimalTimberTheme extends Timber\Site {
	public function __construct() {
		add_filter( 'timber/twig', array( $this, 'add_to_twig' ) );
		parent::__construct();
	}

	public function add_to_twig( $twig ) {
    // first custom function
    $function = new Twig_Function('enqueue_style', function ($handle, $src) {
      wp_enqueue_style( $handle, get_stylesheet_directory_uri() . '/assets/css/'.$src);
    });
    $twig->addFunction($function);
  // second custom function
    $function = new Twig_Function('enqueue_style_ext', function ($handle, $src) {
      wp_enqueue_style( $handle, $src);
    });
    $twig->addFunction($function);

		return $twig;
	}
}

new minimalTimberTheme();
