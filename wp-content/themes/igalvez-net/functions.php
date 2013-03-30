<?php
add_theme_support('automatic-feed-links');

function igalvez_tooltip_count($count) {
    return sprintf(_n('%s post', '%s posts', $count), number_format_i18n($count));
}
?>
