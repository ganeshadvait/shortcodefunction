<?php
/**
 * Blocksy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blocksy
 */

if (version_compare(PHP_VERSION, '5.7.0', '<')) {
	require get_template_directory() . '/inc/php-fallback.php';
	return;
}

require get_template_directory() . '/inc/init.php';

// Shortcode for a larger section or entire page
function hero_image_shortcode() {
    ob_start(); // Start output buffering
    ?>
    <img src="https://luxhospitals.com/wp-content/uploads/2024/08/dr-adhishak.png">
    <?php
    return ob_get_clean(); // Return the buffered content
}
add_shortcode('hero_image', 'hero_image_shortcode');  // Correct function name here

