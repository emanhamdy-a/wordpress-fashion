<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta <?php bloginfo('charset');?>>
  <meta name="description" content="Ashion Template">
  <meta name="keywords" content="Ashion, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
  rel="stylesheet">
  <title>
    <?php wp_title('|','true','right');  bloginfo('name'); ?>
  </title>
  <link rel="pingback" href="<?php bloginfo('pingback'); ?>"/>
  <?php wp_head(); ?>
</head>

<body <?php body_class('test'); ?>>
  
  <!-- Page Preloder -->
  <!-- <div id="preloder">
    <div class="loader"></div>
  </div> -->

  <?php 
    $my_account_page_id  = 
    wc_get_page_id( 'myaccount' );
    $my_account_page_url = 
    $my_account_page_id ? 
    get_permalink( $my_account_page_id ) : ''; 
  ?>

  <!-- Offcanvas Menu Begin -->
  <div class="offcanvas-menu-overlay"></div>
  <div class="offcanvas-menu-wrapper">
    <div class="offcanvas__close">+</div>
    <ul class="offcanvas__widget">
      <li><a href="<?php bloginfo('url'); ?>/cart/"><span
        class="icon_bag_alt"></span>
        <!-- <div class="tip">2</div> -->
      </a></li>
    </ul>
    <div class="offcanvas__logo">
      <a href="<?php bloginfo('url');?>"><img src="<?php echo bloginfo('template_directory') . '/img/logo.png';?>" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__auth">
      <?php if(!is_user_logged_in()){ ?>
          <a href="<?php echo $my_account_page_url;?>">
            <span class="fa fa-sign-in pl-5"> login</span>
          </a>
      <?php }else{?>
        <a href="<?php
          echo $my_account_page_url;?>">
          <span class="fa fa-user pr-3"></span>
        </a>
        <!-- <a href="">/</a> -->
        <a href="<?php echo wc_logout_url();?>">
          <span class="fa fa-sign-out pl-3"></span>
        </a>
      <?php }?>
    </div>
  </div>
  <!-- Offcanvas Menu End -->

  <!-- Header Section Begin -->
  <header class="header" id="navbar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-3 col-lg-2">
          <div class="header__logo">
            <a href="<?php get_template_directory();?>">
              <img src="<?php bloginfo('template_directory'); ?>
              /img/logo.png" alt="">
            </a>
          </div>
        </div>
        <div class="col-xl-6 col-lg-7">
          <nav class="header__menu">
            <?php main_nav_menu(); ?>
          </nav>
        </div>
        
        <div class="col-lg-3 p-0 m-0">
          <div class="header__right">
            <div class="header__right__auth">
            </div>
            <ul class="header__right__widget">
              <?php if(!is_user_logged_in()){ ?>
                <li>
                  <a href="<?php echo $my_account_page_url;?>">
                    <span class="fa fa-sign-in pl-5"> login</span>
                  </a>
                </li> 
              <?php }else{?>
                <li><a href="<?php
                  echo $my_account_page_url;?>">
                  <span class="fa fa-user"></span>
                </a></li>
                <li> <a href="">/</a></li>
                <li><a href="<?php echo wc_logout_url();?>">
                  <span class="fa fa-sign-out"></span>
                </a></li>
              <?php }?>
              <li><a href="#">
                <!-- <div class="tip">2</div> -->
              </a></li>
              <li><a href="<?php bloginfo('url'); ?>/cart/"><span
               class="icon_bag_alt"></span>
                <!-- <div class="tip">2</div> -->
              </a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="canvas__open">
        <i class="fa fa-bars"></i>
      </div>
    </div>
  </header>
  <!-- Header Section End -->
  <div class="main_container">
  <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <?php echo woocommerce_breadcrumb(); ?>
              <!-- <a href="./index.html"><i class="fa fa-home"></i> -->
          </div>
        </div>
      </div>
    </div>
  <!-- Breadcrumb End -->