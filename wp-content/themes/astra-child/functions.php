<?php 
	 add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );
	 function astra_child_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 		  
 		  $path = '/wp-content/programming_assets/controller.js';
 		  
 		  if(file_exists(ABSPATH . $path)){
  
   $version = filemtime(ABSPATH . $path);
  
    }else{
        $version = '1.0.0';
    }
    
    wp_enqueue_script('theme-controller-scripts', get_site_url() . $path, [], $version, true);

 ?>