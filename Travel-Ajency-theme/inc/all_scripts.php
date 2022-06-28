<?php 
 wp_enqueue_style( 'style', get_stylesheet_uri() );
   //  wp_enqueue_style('custom-new-style' , 'https://fonts.googleapis.com');
   // wp_enqueue_style('custom-style-dot-css' , get_template_directory_uri() . '/css/style.css');
   // wp_enqueue_style('custom-css-css' , get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('custom-all-style-dot-css' , get_template_directory_uri() . '/css/main.scss');
   //   wp_enqueue_style('tour-css' , get_template_directory_uri() . '/css/tour.css');
   //  wp_enqueue_style('custom-about-dot-css' , get_template_directory_uri() . '/css/about.css');
   //  wp_enqueue_style('custom-about-scss' , get_template_directory_uri() . '/css/about.scss');
     wp_enqueue_style('custom-slick-css' , get_template_directory_uri() . '/css/slick.css');
     wp_enqueue_style('custom-font-css' , get_template_directory_uri() . '/css/fonts.css');
      // wp_enqueue_style('custom-booking -css' , get_template_directory_uri() . '/css/booking.css');
     wp_enqueue_style('custom-slicktheme-css' , get_template_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_style('custom-style-bt-css' , get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style ('font-awesome-new' , 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css');
    wp_enqueue_style('owlcarousel-css' , 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style('owlcarousel-second-css' , 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
    wp_enqueue_script( 'script-js', get_template_directory_uri() . '/js/Jquery.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
    wp_enqueue_script( 'script-ajax-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');
    wp_enqueue_script('jscustom' , get_template_directory_uri() .'/js/slick.min.js');
   //  wp_enqueue_script('jscustom-new' , get_template_directory_uri() .'/js/main.js' ,array('jquery'));
    