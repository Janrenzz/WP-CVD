<?php 

function cvd_assets() {
    wp_enqueue_style('cvd-styles', get_template_directory_uri() . "/css/styles.css", microtime());
}

add_action('wp_enqueue_scripts', 'cvd_assets');