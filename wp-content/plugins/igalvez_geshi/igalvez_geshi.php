<?php
/*
Plugin Name: IGalvez.GeSHi
Plugin URI: http://igalvez.net/
Description: Syntax highlighting powered by GeSHi. Use the following shortcode: [sourcecode lang="$lang" lines="1,2,3..."]...[/sourcecode]
Version: 1.0
Author: Israel Galvez
Author URI: http://igalvez.net/
License: GPL v3
*/

// Create GeSHi [sourcecode lang="$lang" lines="1,2,3..."] shortcode
function igalvez_geshi($atts, $content = null) {
    extract(shortcode_atts(array(
		'lang' => 'text', // source code language -- default to plain text
        'lines' => false, // lines to highlight -- default to false 
	), $atts));
    
    $content = trim($content); // remove whitespace at ends
    
    include_once 'geshi.php';
    $geshi = new GeSHi($content, $lang);
    $geshi->set_header_type(GESHI_HEADER_DIV);
    $geshi->set_overall_class('geshi');
    $geshi->enable_classes();
    $geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);
    
    // Convert $lines parameter to an array of integers
    // and highlight these individual lines.
    if($lines != false) {
        $LINES = array_map('intval', explode(',', $lines));
        $geshi->highlight_lines_extra($LINES);
    }

    $filetype = $geshi->get_language_name();
    $header = "<div class=\"geshi-header\">$filetype</div>";
    
    return $header . $geshi->parse_code();
}
add_shortcode('sourcecode', 'igalvez_geshi');

// Add GeSHi stylesheet to WordPress
add_action('wp_enqueue_scripts', 'add_igalvez_geshi_css');
function add_igalvez_geshi_css() {
    wp_register_style('igalvez-geshi', plugins_url('igalvez-geshi.css', __FILE__));
    wp_enqueue_style('igalvez-geshi');
}
?>
