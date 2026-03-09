<?php

function cvd_theme_support() {
    add_theme_support('custom-logo');
}
add_action('init', 'cvd_theme_support');