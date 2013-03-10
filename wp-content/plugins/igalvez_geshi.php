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

function igalvez_geshi($atts, $content = null) {
    extract(shortcode_atts(array(
		'lang' => 'text', // default to plain text
	), $atts));
    
    include_once 'geshi/geshi.php';
    $geshi = new GeSHi($content, $lang);
    
    return $geshi->parse_code();
}

add_shortcode('sourcecode', 'igalvez_geshi');
?>
