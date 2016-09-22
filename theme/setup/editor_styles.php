<?php

/*
 * Puzzle
 * Custom Editor Styles
 */

/*
 * Add editor stylesheets so the content looks more like it will on the frontend
 * Commas must be HTML encoded as %2C
 */
puzzle_check_if_custom_style_exists();
add_editor_style(array(
    '//fonts.googleapis.com/css?family=Open+Sans:300%2C300i%2C400%2C400i%2C600%2C600i%2C700%2C700i',
    'assets/css/editor-style.css',
    'assets/css/custom.css'
));

?>
