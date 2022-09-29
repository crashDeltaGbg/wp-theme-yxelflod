<?php

add_action('wp_enqueue_scripts', 'yxelflod_files');

function yxelflod_files()
{
  wp_enqueue_style('main_style', get_stylesheet_uri('style.css'));
  wp_enqueue_style('countdown_timer_style', get_theme_file_uri('/assets/css/countdown-timer.css'), false, '1.0', 'all');
  wp_enqueue_script('countdown_timer_script', get_theme_file_uri('/assets/js/countdown-timer.js'), false, '1.0', true);
}

if (function_exists('acf_add_options_page')) {
  acf_add_options_page();
}
