<?php
function harshamoole_portfolio_enqueue_styles() {
    wp_enqueue_style('harshamoole-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'harshamoole_portfolio_enqueue_styles');
