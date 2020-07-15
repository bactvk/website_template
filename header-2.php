<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/library/bootstrap/css/bootstrap.min.css" >

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/public/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/public/css/about_us.css">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
        <!-- menu bar -->
        <div class="menu_bar">
            <nav class="navbar navbar-expand-lg navbar-light bg-custom">
              <a href="<?php bloginfo('url') ?>" imageanchor="1">
                <img class="menu_bar_logo" src="<?php bloginfo('template_directory') ?>/public/images/logo.jpg">
                
                <img class="menu_bar_mobile_logo" src="<?php bloginfo('template_directory') ?>/public/images/mobile-logo.png">
              </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto navbar_menu">
                    <!-- <li class="nav-item">
                      <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about_us.html">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="services.html" tabindex="-1" aria-disabled="true">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="faq.html" tabindex="-1" aria-disabled="true">FAQ</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link border_none" href="contact_us.html" tabindex="-1" aria-disabled="true">Contact Us</a>
                    </li> -->
                    <?php wp_nav_menu() ?>
                  </ul>
                  <div class="form-inline my-2 my-lg-0 nav_item_right">

                    <li class="nav-item">
                      <span class="icon_menu"><i class="fa fa-th"></i></span>
                      <span>018 267-27-511</span>
                    </li>
                    <li class="nav-item">
                      <span class="icon_menu"><i class="fa fa-map-marker"></i></span>
                      <span>193 Steele Street, NY</i></span>
                    </li>

                   <div class="side_menu_button">
                      <a class="side_menu_button_link normal qode-side-menu-button-svg" href="javascript:void(0)">

                      <svg version="1.1" x="0px" y="0px" width="97px" height="90px" viewBox="0 0 97 90" enable-background="new 0 0 97 90" xml:space="preserve">
                      <rect width="97" height="90"></rect>
                      <line stroke-miterlimit="10" x1="33.5" y1="39.5" x2="63.5" y2="39.5"></line>
                      <line stroke-miterlimit="10" x1="33.5" y1="50.5" x2="63.5" y2="50.5"></line>
                      </svg> </a>
                    </div>

                    <!-- back top -->
                    <div id="back_to_top" class="on">
                        <i class="fa fa-angle-up"></i>
                    </div>

                    <!-- menu right fix -->
                    <div class="menu_right">
                      <div class="menu_right_content">
                        <div class="close_menu">
                          <img src="<?php bloginfo('template_directory') ?>/public/images/close_side_menu.png">
                        </div>
                        <img src="<?php bloginfo('template_directory') ?>/public/images/sidearea-logo.png">
                        <p class="mt-3 mb-5">Lorem ipsum dolor sit amet, consec a tetur adipisicing elit, sed do eiusmods tempor incididunt ut labore et</p>
                        <div class="menu_right_content_text">
                          <p>
                            <i class="fa fa-th"></i>  &nbsp;&nbsp;0018 267-527-511215
                          </p>
                          <p>
                            <i class="fa fa-map-marker"></i> &nbsp;&nbsp;193 Steele Street, Burr Ridge
                          </p>
                          <p>
                            <i class="fa fa-clock-o"></i>  &nbsp;&nbsp;Mon - Sat: 7:00 - 22:00
                          </p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
            </nav>
        </div>