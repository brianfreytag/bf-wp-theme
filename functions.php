<?php
/**
 * @package   BrianFreytag.com
 * @author    Brian Freytag http://www.brianfreytag.com
 * @copyright Copyright (C)2020 Brian Freytag
 * @license   GNU/GPLv2 and later
 *
 * http:/ /www.gnu.org/licenses/gpl-2.0.html
 */

add_action( 'wp_enqueue_scripts', 'bf_wp_theme_enqueue_styles' );
function bf_wp_theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}