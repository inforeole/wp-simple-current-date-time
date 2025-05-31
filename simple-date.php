<?php
/**
 * Plugin Name: Simple Current Date Time
 * Plugin URI: https://inforeole.fr/simple-current-date-time-wordpress-plugin/
 * Description: Displays the current date and time using WordPress settings and enables their use in H1 titles and metatitles (balise <title>). Simple, localized, and easy to use.
 * Version: 1.4
 * Author: Philippe Eveilleau - Inforeole
 * Author URI: https://inforeole.fr/
 * Text Domain: simple-current-date-time
 * Domain Path: /languages
 * Requires at least: 5.0
 * Tested up to: 6.8
 * Stable tag: 1.4
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

// Source file name: simple-date.php
// Role: Manages the display of the current date and time via shortcodes (English and French) and enables their use in HTML titles (h1) and metatitles (<title> tag).

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Adds available shortcodes and support link below the plugin description in the dashboard.
 *
 * @param array  $links The array of plugin meta links.
 * @param string $file  The plugin file.
 * @return array The filtered array of plugin meta links.
 */
function scdt_plugin_row_meta( $links, $file ) {
    if ( plugin_basename( __FILE__ ) === $file ) {
        $plugin_page_url = 'https://inforeole.fr/simple-current-date-time-wordpress-plugin/'; // Assurez-vous que cette URL est la bonne
        $row_meta = array(
            'shortcodes_info' => '<span style="font-weight: bold;">' . esc_html__( 'Shortcodes (EN):', 'simple-current-date-time' ) . '</span> [current_year], [current_month_year], [current_date_time]<br>' .
                                 '<span style="font-weight: bold;">' . esc_html__( 'Alias (FR):', 'simple-current-date-time' ) . '</span> [annee], [mois_annee], [date_heure_courante]',
            'support_link'    => '<a href="' . esc_url( $plugin_page_url ) . '" target="_blank">' . esc_html__( 'More Info & Support', 'simple-current-date-time' ) . '</a>',
        );
        return array_merge( $links, $row_meta );
    }
    return $links;
}
add_filter( 'plugin_row_meta', 'scdt_plugin_row_meta', 10, 2 );

/**
 * Loads the plugin's text domain for translation.
 */
function scdt_load_textdomain() {
    load_plugin_textdomain( 'simple-current-date-time', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'scdt_load_textdomain' );

/**
 * Shortcode to display the current year.
 *
 * @return string The current year.
 */
function scdt_current_year_shortcode() {
    return wp_date( 'Y' );
}
// Main shortcode in English
add_shortcode( 'current_year', 'scdt_current_year_shortcode' );
// Alias in French
add_shortcode( 'annee', 'scdt_current_year_shortcode' );


/**
 * Shortcode to display the current month and year.
 *
 * @return string The full month and year.
 */
function scdt_current_month_year_shortcode() {
    return wp_date( 'F Y' );
}
// Main shortcode in English
add_shortcode( 'current_month_year', 'scdt_current_month_year_shortcode' );
// Alias in French
add_shortcode( 'mois_annee', 'scdt_current_month_year_shortcode' );


/**
 * Shortcode to display the current date and time.
 *
 * @return string The date and time formatted according to WordPress settings.
 */
function scdt_current_date_time_shortcode() {
    $date_format = get_option( 'date_format' );
    $time_format = get_option( 'time_format' );
    return wp_date( $date_format . ' ' . $time_format );
}
// Main shortcode in English
add_shortcode( 'current_date_time', 'scdt_current_date_time_shortcode' );
// Alias in French
add_shortcode( 'date_heure_courante', 'scdt_current_date_time_shortcode' );


// Allows shortcode interpretation in post and page titles (<h1>, etc.)
add_filter( 'the_title', 'do_shortcode' );

/**
 * Allows shortcode interpretation in the <title> tag (metatitle).
 *
 * @param array $title_parts The document title parts (e.g., 'title', 'page', 'tagline', 'site').
 * @return array The modified document title parts.
 */
function scdt_do_shortcode_in_document_title_parts( $title_parts ) {
    if ( isset( $title_parts['title'] ) ) {
        $title_parts['title'] = do_shortcode( $title_parts['title'] );
    }
    return $title_parts;
}
add_filter( 'document_title_parts', 'scdt_do_shortcode_in_document_title_parts', 20 );

?>