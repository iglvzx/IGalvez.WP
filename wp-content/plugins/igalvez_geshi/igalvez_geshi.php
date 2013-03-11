<?php
/*
Plugin Name: IGalvez.GeSHi
Plugin URI: http://igalvez.net/
Description: Syntax highlighting powered by GeSHi. Use the following shortcode: [sourcecode lang="$lang"]...[/sourcecode]
Version: 1.0
Author: Israel Galvez
Author URI: http://igalvez.net/
License: GPL v3
*/

// Create GeSHi [sourcecode lang="$lang"] shortcode
function igalvez_geshi($atts, $content = null) {
    extract(shortcode_atts(array(
		'lang' => 'text', // default to plain text
	), $atts));
    
    $content = trim($content); // remove whitespace at ends
    
    include_once 'geshi.php';
    $geshi = new GeSHi($content, $lang);
    $geshi->set_header_type(GESHI_HEADER_DIV);
    $geshi->set_overall_class('geshi');
    $geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);
    
    return $geshi->parse_code();
}
add_shortcode('sourcecode', 'igalvez_geshi');

// Add GeSHi stylesheet to WordPress
add_action('wp_enqueue_scripts', 'add_igalvez_geshi_css');
function add_igalvez_geshi_css() {
    wp_register_style('igalvez-geshi', plugins_url('igalvez-geshi.css', __FILE__));
    wp_enqueue_style('igalvez-geshi');
}

// Process shortcodes before line breaks.
remove_filter('the_content', 'do_shortcode');
add_filter('the_content', 'do_shortcode', 11);
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 12);

// Disable smart quotes, punctuation, etc.
remove_filter('the_content', 'wptexturize');
remove_filter('comment_text', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');
?>
