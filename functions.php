<?php
/* enque styles and scripts */

function mb_enqueue_assets() {
  /*theme's primary css file*/


    /* theme's primary style.css file */
  wp_enqueue_style( 'style' , get_stylesheet_uri() );

  /* template's primary css file */
  wp_enqueue_style( 'modern-business-css' , get_template_directory_uri() . '/css/modern-business.css' );
  /* boostrap resources from theme files */
  wp_enqueue_style( 'bootstrap-css' , get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
  wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js' , array( 'jquery' ) , false , true );
  
  /*conditional resources for IE 9 */
  /*
  wp_enqueue_script( 'simple-blog-html5', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js' , array(), '3.7.0' );
  wp_script_add_data( 'simple-blog-html5', 'conditional', 'lt IE 9' );
  wp_enqueue_script( 'simple-blog-respondjs', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js' , array(), '1.4.2' );
  wp_script_add_data( 'simple-blog-respondjs', 'conditional', 'lt IE 9' );
  */

}

add_action( 'wp_enqueue_scripts' , 'mb_enqueue_assets' );

?>