<?php
add_action( 'wp_enqueue_scripts', function(){
  $theme = wp_get_theme();
  wp_enqueue_style( 'seedlet-style', get_template_directory_uri().'/style.css', [], $theme->parent()->get('Version') );
  wp_enqueue_style( 'soestlet-style', get_stylesheet_uri(), [], $theme->get('Version')  );
});
