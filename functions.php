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
function best_surgeons_shortcode() {
    ob_start(); // Start output buffering
    ?>
    <div class="best-surgeons">
        <h5>Best Surgeons & Equipment</h5>
        <p>Lux Hospitals have top-notch Hernia experts with the latest and advanced Stryker 1688 4K Laparoscopic setup.</p>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered content
}
add_shortcode('best_surgeons', 'best_surgeons_shortcode');

function free_consultation_shortcode() {
    ob_start(); // Start output buffering
    ?>
    <div class="free-consultation">
        <h5>Get FREE Consultation</h5>
        <p>Now Lux Hospitals offer free consultation with our Hernia expert. Call us and avail Free OPD Now.</p>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered content
}
add_shortcode('free_consultation', 'free_consultation_shortcode');

function all_insurances_shortcode() {
    ob_start(); // Start output buffering
    ?>
    <div class="all-insurances">
        <h5>All Insurances Accepted</h5>
        <p>Pay 0 with our 100% Insurance Cashless facility for the complete procedure.</p>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered content
}
add_shortcode('all_insurances', 'all_insurances_shortcode');

function compassionate_care_shortcode() {
    ob_start(); // Start output buffering
    ?>
    <div class="compassionate-care">
        <h5>100% Cure. Compassionate Care</h5>
        <p>Lux Hospitals combines medical expertise and compassionate care for a 100% cure.</p>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered content
}
add_shortcode('compassionate_care', 'compassionate_care_shortcode');

