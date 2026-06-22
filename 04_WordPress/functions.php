<?php
/**
 * Bioscience Child Theme
 */

function bioscience_child_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bioscience-child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), '1.1');
}
add_action('wp_enqueue_scripts', 'bioscience_child_styles');

function bioscience_flush_rewrites() {
    flush_rewrite_rules(false);
}
add_action('after_switch_theme', 'bioscience_flush_rewrites');

function remove_protected_title_prefix($title) {
    if (is_page() && post_password_required()) {
        return str_replace('Protected: ', '', $title);
    }
    return $title;
}
add_filter('protected_title_format', 'remove_protected_title_prefix');
