<?php

function install_bootstrap(){


     wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
     wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
     wp_enqueue_style('google-font' , "//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap");
     wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css' );
     wp_enqueue_style('external_css', get_theme_file_uri('/src/index.css'));
  
}


add_action('wp_enqueue_scripts', 'install_bootstrap' );

?>

