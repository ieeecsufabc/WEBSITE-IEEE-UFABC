<?php

function load_scripts(){
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '4.5.2', true);
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2', 'all');
    wp_enqueue_style('template', get_template_directory_uri() . '/assets/css/template.css', array(), '0.1', 'all');
};
add_action('wp_enqueue_scripts', 'load_scripts');


function funcoes_config(){
    register_nav_menus(
        array(
            'my_main_menu' => 'Menu'
        )
    );
    add_theme_support('custom-header');
}
add_action('after_setup_theme', 'funcoes_config', 0);
?>