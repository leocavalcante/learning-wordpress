<?php declare(strict_types=1);

function register_scripts()
{
  wp_enqueue_script('script', get_template_directory_uri() . '/dist/main.js');
}

add_action('wp_enqueue_scripts', 'register_scripts');
