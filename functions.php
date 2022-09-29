<?php

add_action('wp_enqueue_scripts', 'yxelflod_files');

function yxelflod_files()
{
  wp_enqueue_style('main_style', get_style_sheet_uri('/assets/css/countdown_timer.css'));
  wp_enqueue_script('countdown_timer', get_theme_file_uri('/assets/js/countdown_timer.js'), false, '1.0', true);
}

/* if (function_exists('acf_add_options_page')) {
  acf_add_options_page();
} */