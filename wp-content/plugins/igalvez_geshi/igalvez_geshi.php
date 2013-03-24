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

// Create GeSHi [sourcecode lang="$lang" start="$n" lines="1,2,3..."] shortcode
function igalvez_geshi($atts, $content = null) {
    extract(shortcode_atts(array(
		'lang' => 'text', // source code language -- default to plain text
        'lines' => false, // lines to highlight -- default to false
        'start' => 1 // starting line number -- default to 1
	), $atts));
    
    $content = trim($content); // remove whitespace at ends
    
    include_once 'geshi.php';
    $geshi = new GeSHi($content, $lang);
    $geshi->set_header_type(GESHI_HEADER_DIV);
    $geshi->set_overall_class('geshi');
    $geshi->enable_classes();
    $geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);
    $geshi->set_tab_width(4);
    $geshi->enable_keyword_links(false);
    
    // Convert $lines parameter to an array of integers
    // and highlight these individual lines.
    if($lines != false) {
        $LINES = array_map('intval', explode(',', $lines));
        $geshi->highlight_lines_extra($LINES);
    }
    
    // set starting line number
    $geshi->start_line_numbers_at((int) $start);
    
    return $geshi->parse_code();
}
add_shortcode('sourcecode', 'igalvez_geshi');
?>
