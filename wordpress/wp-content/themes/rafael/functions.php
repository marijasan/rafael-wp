<?php
$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => true,
	'flex-width'             => true,
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
);
global $wp_version;
if ( version_compare( $wp_version, '3.4', '>=' ) )
	add_theme_support( 'custom-header', $defaults );
else
	add_custom_image_header( $args );
?>