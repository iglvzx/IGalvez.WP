<?php
/*
Plugin Name: IGalvez.Settings
Plugin URI: http://igalvez.net/
Description: WordPress customizations.
Version: 1.0
Author: Israel Galvez
Author URI: http://igalvez.net/
License: GPL v3
*/

// Process shortcodes before line breaks.
remove_filter('the_content', 'do_shortcode');
add_filter('the_content', 'do_shortcode', 11);
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 12);

// Disable smart quotes, punctuation, etc.
remove_filter('the_content', 'wptexturize');
remove_filter('comment_text', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');

// Disable visual editor
add_filter('user_can_richedit', '__return_false');
?>