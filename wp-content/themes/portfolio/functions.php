<?php

//
function digital_portfolio_script_enqueue()
{
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/custom/styles.css', [], '3.1.1', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/custom/script.js', [], '1.0.0', true);

    //bootstrap
    wp_register_style('bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', [], '5.2.3', 'all');

    wp_enqueue_style('bootstrapcss');

    wp_register_script('jsbootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', [], '5.2.3', false);
    wp_enqueue_script('jsbootstrap');
}

add_action('wp_enqueue_scripts', 'digital_portfolio_script_enqueue');