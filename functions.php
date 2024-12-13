<?php

wp_enqueue_style('main-style', get_template_directory_uri(), 'style.css');
wp_enqueue_style('bulma-style', 'https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css');

add_action('after_setup_theme', 'register_my_menu');

function register_my_menu() {
    register_nav_menu('primary_menu')
}