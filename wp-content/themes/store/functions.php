<?php

/**
 * wp-bootstrap-navwalker.php
*/
require_once('wp-bootstrap-navwalker.php');
/**
 * add future image thumpnail
 */
add_theme_support( 'post-thumbnails' );

/**
 * load styles and css files
 */

  function load_stylesheets(){
      
    wp_register_style('style',get_template_directory_uri() .
     '/style.css','',1,'all'
    );
    wp_enqueue_style('style');

    wp_register_style('bootstrap',get_template_directory_uri() .
     '/css/bootstrap.min.css','',1,'all'
    );
    wp_enqueue_style('bootstrap');

    wp_register_style('font-awesome',get_template_directory_uri() .
     '/css/font-awesome.min.css','',1,'all'
    );
    wp_enqueue_style('font-awesome');

    wp_register_style('elegant-icons',get_template_directory_uri() .
     '/css/elegant-icons.css','',1,'all'
    );
    wp_enqueue_style('elegant-icons');

    wp_register_style('jquery-ui',get_template_directory_uri() .
     '/css/jquery-ui.min.css','',1,'all'
    );
    wp_enqueue_style('jquery-ui');

    wp_register_style('magnific-popup',get_template_directory_uri() .
     '/css/magnific-popup.css','',1,'all'
    );
    wp_enqueue_style('magnific-popup');

    wp_register_style('owl-carousel',get_template_directory_uri() .
     '/css/owl.carousel.min.css','',1,'all'
    );
    wp_enqueue_style('owl-carousel');

    wp_register_style('slicknav',get_template_directory_uri() .
     '/css/slicknav.min.css','',1,'all'
    );
    wp_enqueue_style('slicknav');

    wp_register_style('styles',get_template_directory_uri() .
     '/css/style.css','',1,'all'
    );
    wp_enqueue_style('styles');

    wp_register_style('app',get_template_directory_uri() .
     '/css/app.css','',1,'all'
    );
    wp_enqueue_style('app');

  }

  add_action('wp_enqueue_scripts','load_stylesheets');//add css styles

  /**
  * load scripts and js files
  */

  function load_javascript(){
    wp_deregister_script('jquery');
    wp_register_script('jquery',get_template_directory_uri()
    . '/js/jquery-3.3.1.min.js',array(),1,1,1);
    wp_enqueue_script('jquery');
    
    wp_register_script('popper',get_template_directory_uri()
    . '/js/popper.min.js',array(),1,1,1);
    wp_enqueue_script('popper');

    wp_register_script('bootstrap',get_template_directory_uri()
    . '/js/bootstrap.min.js',array(),1,1,1);
    wp_enqueue_script('bootstrap');

    wp_register_script('jquery-magnific',get_template_directory_uri()
    . '/js/jquery.magnific-popup.min.js',array(),1,1,1);
    wp_enqueue_script('jquery-magnific');
    
    wp_register_script('jquery-ui',get_template_directory_uri()
    . '/js/jquery-ui.min.js',array(),1,1,1);
    wp_enqueue_script('jquery-ui');
    
    wp_register_script('mixitup',get_template_directory_uri()
    . '/js/mixitup.min.js',array(),1,1,1);
    wp_enqueue_script('mixitup');
    
    wp_register_script('jquery-countdown',get_template_directory_uri()
    . '/js/jquery.countdown.min.js',array(),1,1,1);
    wp_enqueue_script('jquery-countdown');
    
    wp_register_script('slicknav',get_template_directory_uri()
    . '/js/jquery.slicknav.js',array(),1,1,1);
    wp_enqueue_script('slicknav');
    
    wp_register_script('owl-carousel',get_template_directory_uri()
    . '/js/owl.carousel.min.js',array(),1,1,1);
    wp_enqueue_script('owl-carousel');
    
    wp_register_script('nicescroll',get_template_directory_uri()
    . '/js/jquery.nicescroll.min.js',array(),1,1,1);
    wp_enqueue_script('nicescroll');
    
    wp_register_script('main',get_template_directory_uri()
    . '/js/main.js',array(),1,1,1);
    wp_enqueue_script('main');

    wp_register_script('app',get_template_directory_uri()
    . '/js/app.js',array(),1,1,1);
    wp_enqueue_script('app');

    wp_register_script('first',get_template_directory_uri()
    . '/js/first.js',array(),1,false,1);
    wp_enqueue_script('first');

  }

  add_action('wp_enqueue_scripts','load_javascript');//add js

  add_theme_support('menus');
  add_theme_support('post-thumbnails');
 
  /**
   * register custom menus
   */
  function register_custom_menus(){
    register_nav_menus(
      array(
        'top-menu' => 'Top Menu',
        'category-menu' => 'Category Menu',
      )
    );
  }
  add_action('init','register_custom_menus');

  function main_nav_menu(){
    wp_nav_menu(array(
      'theme_location' =>'top-menu',
      // 'menu_class'     =>'nav navbar-nav',
      'container'      =>false,
      'depth'          =>2,
      'walker'         =>new wp_bootstrap_navwalker()
    ));
  }
  function cat_menu(){
    wp_nav_menu(array(
      'theme_location' =>'category-menu',
      // 'menu_class'     =>'nav navbar-nav',
      'container'      =>false,
      'depth'          =>2,
      'walker'         =>new wp_bootstrap_navwalker()
    ));
  }

  /**
   * add images sizes
   */
  add_image_size('post_image_lg',1100,750,false);//dont crop
  add_image_size('post_image_md',750,500,false);//dont crop
  //add_image_size('post_image_md',800,600,true);//crop
  add_image_size('post_image_sm',600,400,true);//crop

  /**
   * add side bars
   */
  register_sidebar(
    array(
      'name'  => 'Main Sidebar',
      'id'    => 'main-sidebar',
      'class' => '',
      'before-title'  => '<h4>',
      'after-title'   => '</h4>',
    )
  );

  register_sidebar(
    array(
      'name'  => 'Filter Sidebar',
      'id'    => 'filter-sidebar',
      'class' => '',
      'before-title'  => '<h4>',
      'after-title'   => '</h4>',
      'description'  => 'filter sidebar contain filter',
      'before_widget'=> '<div class="widget-content">',
      'after_widget' => '</div>',
    )
  );
  register_sidebar(
    array(
      'name'  => 'footer widget1',
      'id'    => 'footer-widget1',
      'class' => 'footer widget1',
      'before-title'  => '',
      'after-title'   => '',
      'description'  => '',
      'before_widget'=> '',
      'after_widget' => '',
    )
  );

  register_sidebar(
    array(
      'name'  => 'footer widget2',
      'id'    => 'footer-widget2',
      'class' => 'footer-widget2',
      'before-title'  => '',
      'after-title'   => '',
      'description'  => '',
      'before_widget'=> '',
      'after_widget' => '',
    )
  );


  function mytheme_add_woocommerce_support(){
    add_theme_support('woocommerce');
  }
  add_action('after_setup_theme','mytheme_add_woocommerce_support');

  // To change add to cart text on single product page
  add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
  function woocommerce_custom_single_add_to_cart_text() {
      return __( '', 'woocommerce' ); 
  }

  // To change add on sale badge
  add_filter( 'woocommerce_sale_flash', 'misha_change_on_sale_badge', 10, 2 ); 
  function misha_change_on_sale_badge( $badge_html, $post ) {
    return '<span class="on-sale">sale</span>';
  }

  // To change add to cart text on product archives(Collection) page
  add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
  function woocommerce_custom_product_add_to_cart_text() {
      return __('' , 'woocommerce' );
  }

  // change number of columns in shop
 function wc_loop_shop_columns(){
   return 3;
 }
  add_filter( 'loop_shop_columns', 'wc_loop_shop_columns', 1, 10 );

/** Change number of related products output */ 

// function woo_related_products_limit() {
//   global $product;
//   $args['posts_per_page'] = 6;
//   $args['columns'] = 3;
// 	return $args;
// }

function related_products_args( $args ) {
$args['posts_per_page'] = 6;
$args['columns'] = 3;
return $args;
}
add_filter( 'woocommerce_output_related_products_args', 
'related_products_args', 20 );

// register sidebar
function filter_sidebar(){
  register_sidebar(array(
    'name'         => 'Filter sidebar',
    'id'           => 'filter-sidebar',
    'class'        => 'filter-sidebar',
  ));
}

add_action('widgets_init','filter_sidebar');


// Method 1: Filter.
// function my_acf_google_map_api( $api ){
//   $api['key'] = 'xxx';
//   return $api;
// }
// add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');