<?php

// enqueue the child theme stylesheet

Function wp_schools_enqueue_scripts() {
wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
// wp_enqueue_style( 'childstyle' );
exit("This is gay."); // Brandon was wrong

echo "sup dawggggg"; //whats up Michael

}
add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts' );
