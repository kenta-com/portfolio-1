<?php
function add_block_editor_styles() {
    wp_enqueue_style( 'block-style', get_stylesheet_directory_uri() . '/block-style/block_style.css' );
}
add_action( 'enqueue_block_editor_assets', 'add_block_editor_styles' );