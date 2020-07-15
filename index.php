<?php 
/* Template Name: Index */
get_header() ?>
        <div class="clearfix"></div>
        <!-- slider top -->
        <div class="slider_top">
          <!-- <img class="header_img_s" src="<?php bloginfo('template_directory') ?>/public/images/header/s-typ.png" > -->
            <div class="first_view">
              <!-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">

                  <div class="carousel-item active carousel-item-custom">
                    <div class="row align-items-center">
                      <div class="col-md-6 col-sm-12">
                        
                          <div class="trucking_block">
                            <h1 class="trucking_title">TRUCKING TRANSPORT SERVICES</h1>
                            <p class="trucking_content">Lorem ipsum dolor sit amet, consec a tetur adipisic ing elit, sed do eiusmods tempor incididunt ut </p>
                            <div class="">
                               <a class="view_more_trucking" href="#">Xem thêm</a>
                             </div>

                          </div>
                        

                      </div>
                      <div class="col-md-6 col-sm-12 img_trucking_block">
                        <div class="slider_image">
                          <img src="<?php bloginfo('template_directory') ?>/public/images/slide/rev-image-1.jpg" class="w-100 trucking_img" alt="...">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item carousel-item-custom">
                    <div class="row align-items-center">
                      <div class="col-md-6 col-sm-12">
                        
                          <div class="trucking_block">
                            <h1 class="trucking_title">TRUCKING TRANSPORT SERVICES</h1>
                            <p class="trucking_content">Lorem ipsum dolor sit amet, consec a tetur adipisic ing elit, sed do eiusmods tempor incididunt ut </p>
                            <div class="">
                               <a class="view_more_trucking" href="#">Xem thêm</a>
                             </div>

                          </div>
                        

                      </div>
                      <div class="col-md-6 col-sm-12 img_trucking_block">
                        <div class="slider_image">
                          <img src="<?php bloginfo('template_directory') ?>/public/images/slide/rev-image-2.jpg" class="w-100 trucking_img" alt="...">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item carousel-item-custom">
                    <div class="row align-items-center">
                      <div class="col-md-6 col-sm-12">
                        
                          <div class="trucking_block">
                            <h1 class="trucking_title">TRUCKING TRANSPORT SERVICES</h1>
                            <p class="trucking_content">Lorem ipsum dolor sit amet, consec a tetur adipisic ing elit, sed do eiusmods tempor incididunt ut </p>
                            <div class="">
                               <a class="view_more_trucking" href="#">Xem thêm</a>
                             </div>

                          </div>
                        

                      </div>
                      <div class="col-md-6 col-sm-12 img_trucking_block">
                        <div class="slider_image">
                          <img src="<?php bloginfo('template_directory') ?>/public/images/slide/rev-image-3.jpg" class="w-100 trucking_img" alt="...">
                        </div>
                      </div>
                    </div>
                  </div>

                  
                </div>
              </div> -->
              <?php
                echo do_shortcode('[smartslider3 slider="2"]');
                ?>
            </div>
            
        </div>
      </div>
      <!-- section-boxed -->
      <div class="section_boxed">
        <div class="container_custom">
          <div class="row">

            <?php 
              $args = array(
                'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
                'showposts' => 4, // số lượng bài viết
                'cat' => 1, // lấy bài viết trong chuyên mục có id là 7
              );
            ?>
            <?php $getposts = new WP_query($args); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
              <div class="col-sm-3 box">
                  <div class="icon_section-boxed pb-5">
                    <!-- <img src="<?php bloginfo('template_directory') ?>/public/images/box/icon-1.png"> -->
                    <?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'img-circle') );//lấy hình ?>
                  </div>
                  <h3><?php the_title() ?></h3>
                  <p class="service_text">
                    <?php the_excerpt() ?>
                  </p>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <!-- <div class="col-sm-3 box">
               <div class="icon_section-boxed pb-5">
                  <img src="<?php bloginfo('template_directory') ?>/public/images/box/icon-2.png">
                </div>
                <h3>FAST DELIVERY</h3>
                <p class="service_text">
                  Lorem ipsum dolor sit amet cons tetur adipisicing sens nie
                </p>
            </div>
            <div class="col-sm-3 box">
                <div class="icon_section-boxed pb-5">
                  <img src="<?php bloginfo('template_directory') ?>/public/images/box/icon-3.png">
                </div>
                <h3>ORDER TRACKING</h3>
                <p class="service_text">
                  Lorem ipsum dolor sit amet cons tetur adipisicing sens nie
                </p>
            </div>
            <div class="col-sm-3 box">
                <div class="icon_section-boxed pb-5">
                  <img src="<?php bloginfo('template_directory') ?>/public/images/box/icon-4.png">
                </div>
                <h3>WAREHOUSING</h3>
                <p class="service_text">
                  Lorem ipsum dolor sit amet cons tetur adipisicing sens nie
                </p>
            </div> -->
          </div>
        </div>
      </div>
      <!-- about us -->
      <div class="container_custom_card">
        <div class="about_us_top text-center mb-5">
            <div class="about_us_intro">
              <!-- <div class="about_us_image"> </div> -->
              <img class="about_us_image" src="<?php bloginfo('template_directory') ?>/public/images/background/section-title-image-1.png">
              <p class="about_us_text">ABOUT US</p>
              <p class="about_us_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eius mod tempor incididunt ut labore et dolore mag</p>
            </div>
        </div>

        <!-- card block -->
        <div class="row">
          <?php 
              $args = array(
                'post_status' => 'publish', 
                'post_type' => 'post',
                'showposts' => 3, 
                'cat' => 9, 
              );
            ?>
         <?php $getposts = new WP_query($args); ?>
          <?php global $wp_query; $wp_query->in_the_loop = true; $stt = 0; ?>
          <?php while ($getposts->have_posts()) : $stt ++;  $getposts->the_post(); ?>
            <div class="col-sm-4 box_card mb-5">
              <div class="card">
                <?php echo get_the_post_thumbnail( get_the_id(), '', array( 'class' =>'card-img-top') );?>
                <div class="card-body card_body_<?php echo $stt ?>">
                  <h5 class="card-title"><?php the_title() ?></h5>
                  <p class="card-text"><?php the_excerpt() ?></p>
                  <a href="#" class="view_more">View more
                    <i class="fa fa-angle-right view_more_icon"></i>
                  </a>

                </div>
              </div>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>

         
        </div>
        
      </div>
      <!-- slider bottom -->
      <div class="slide_bottom">
          <!-- <div class="bd-example">
            <div id="carouselExampleCaptions2" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions2" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions2" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="slide_item">
                    <div class="slide_bottom_block">
                      <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ul lamco laboris nisi ut aliquip ex ea commodo consequat duis aute. Lorem ipsum</p>
                      <h4>John Smith</h4>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                    <div class="slide_item">
                      <div class="slide_bottom_block">
                        <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ul lamco laboris nisi ut aliquip ex ea commodo consequat duis aute. Lorem ipsum</p>
                        <h4>John Smith</h4>
                      </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slide_item">
                      <div class="slide_bottom_block">
                        <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ul lamco laboris nisi ut aliquip ex ea commodo consequat duis aute. Lorem ipsum</p>
                        <h4>John Smith</h4>
                      </div>
                    </div>
                </div>
              </div>
             
            </div>
          </div> -->
          <?php
            echo do_shortcode('[smartslider3 slider="3"]');
            ?>

      </div>

      <!-- common question -->
      <div class="container_custom container_custom_footer_mobile">
        <div class="common_questions_top text-center">
            <div class="common_questions_intro">
              <div class="common_questions_image"> 
                <img src="<?php bloginfo('template_directory') ?>/public/images/background/section-title-image-2.png">
              </div>
              <p class="common_questions_text">COMMON QUESTIONS</p>
              <p class="common_questions_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eius mod tempor incididunt ut labore et dolore mag</p>
            </div>  
        </div>
      </div>
      <!-- dropdown -->
      <div class="container_custom" style="margin-top: 0px">

          <div class="row">
              <div class="col-sm-6 common_questions_img mt-4">
                <img src="<?php bloginfo('template_directory') ?>/public/images/card/home-image-4.jpg" width="100%">
              </div>
              <div class="col-sm-6 common_questions_block">
                      <div class="hieuung">
                        <?php 
                          $args = array(
                            'post_status' => 'publish', 
                            'post_type' => 'post',
                            'showposts' => 4, 
                            'cat' => 11, 
                          );
                        ?>
                        <?php $getposts = new WP_query($args); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) :  $getposts->the_post(); ?>
                          <div class="motkhoi" >
                            <div class="motkhoi_title" >
                              <span><?php echo the_title() ?></span>
                              <i class="fa fa-plus"></i>
                            </div>
                            <div class="ndmotkhoi">
                            <?php echo the_excerpt() ?>
                            </div>
                          </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                       
                      </div>
              </div>
          </div>

      </div>

      <!-- map -->
      <div class="container-fluid find_us_map">
        <div class="row">
          <div class="col-sm-7 find_us_img">
            <img src="<?php bloginfo('template_directory') ?>/public/images/map-asian-a.png" width="100%">
          </div>
          <div class="col-sm-3 offset-1 find_us_block mt-4">
            <div class="item_find_us">
              <div class="find_us_content">
                <div class="find_us_content_bk"></div>
                <h4 class="">find us</h4>
              </div>
              
              <p>
                Lorem ipsum dolor sit amet, consecte tur adipisicing elit sed do eius mod
              </p>
            </div>

            <div class="item_find_us">
              <h4 class="find_us_content_title">main office</h4>
              <div class="find_us_content">
                <p>
                  <i class="fa fa-map-marker"></i>&nbsp; 163 Nguyen Van Troi Street, Dist Phu Nhuan, HCM city
                </p>
                <p>
                  <i class="fa fa-th"></i>  &nbsp;267-527-511215, 267-527-511264
                </p>
                <p>
                  <i class="fa fa-clock-o"></i>  &nbsp;Mon - Fri: 8:30 - 17:30
                </p>
              </div>
              
            </div>
             
          </div>
        </div>
      </div>

      <!-- client BLOCK -->
      <div class="container_custom_client">

        <div class="client_top text-center">
          <div class="client_intro">
            <img class="client_image" src="<?php bloginfo('template_directory') ?>/public/images/background/section-title-image-3.png">
            <p class="client_text">CLIENTS</p>
              
          </div>
        </div>

        <div class="row">
          <?php 
              $args = array(
                'post_status' => 'publish', 
                'post_type' => 'post',
                'showposts' => 5, 
                'cat' => 10, 
              );
            ?>

          <?php $getposts = new WP_query($args); ?>
          <?php global $wp_query; $wp_query->in_the_loop = true; $stt = 0; ?>
          <?php while ($getposts->have_posts()) : $stt ++;  $getposts->the_post(); ?>

          <div class="col-sm-2_custom text-center">
              <?php echo get_the_post_thumbnail( get_the_id(), '', array( 'class' =>'') );?>
          </div>

          <?php endwhile; wp_reset_postdata(); ?>
          
        </div>
      </div>
  

      <!-- footer -->
      
    <?php get_footer() ?> 