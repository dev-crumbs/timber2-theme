<?php
/**
 *
 * @package  Minimal Timber Theme  
 *
 */

$context = Timber::context();  // Import the Timber Global Context

Timber::render( 'index.twig', $context );
