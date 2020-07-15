<?php 
  /* Template Name: Services */
  get_header(5); 
?>

		<div class="services_bk">
          <div class="about_us_text_bk">SERVICES</div>
        </div>
        <div class="clearfix"></div>
        <!-- slider top -->
        
      </div>
      
      <!-- about us -->
      <div class="container_custom_what">
        <div class="about_us_top text-center">
            <div class="about_us_intro">
              <!-- <img src="<?php bloginfo('template_directory') ?>/public/images/background/section-title-image-6.png" class="about_us_image"> -->
              <div class="about_us_block">
                <p class="about_us_text">WHAT WE DO</p>
                <p class="about_us_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eius mod tempor incididunt ut labore et dolore mag</p>
              </div>
            </div>
        </div>
      </div>

      <!-- FAST DELIVERY -->
     
      <div class="mt-2 mb-5">
        <?php
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $args = array(
            'posts_per_page' => 4,
            'paged' => $paged,
            'cat' => 12
          );
          $custom_query = new WP_Query( $args );
          $stt = 0;
        ?>

        <?php
        while($custom_query->have_posts()) :
          $stt ++;
              $custom_query->the_post();
        ?>
        <?php if($stt % 2 != 0) { ?>
          <div class="container_custom_fast">
            <div class="row">
                <div class="col-sm-6">
                  <!-- <img src="<?php bloginfo('template_directory') ?>/public/images/card/home-image-4.jpg" width="100%"> -->
                  <?php echo get_the_post_thumbnail( get_the_id(), '', array( 'class' =>'services-img') );?>
                </div>
                <div class="col-sm-5 ml-5 mt-4 fast_delivery_content">
                    <div class="">

                      <div class="fast_delivery mb-4">
                          <img class="fast_delivery_bk" src="<?php bloginfo('template_directory') ?>/public/images/background/section-title-image-7.png">
                          
                          <h5 class="fast_delivery_text pl-4"><?php echo the_title(); ?></h5>
                      </div>

                      <div class="pl-4 fast_delivery_content" >
                        <p>
                          <?php echo the_excerpt(); ?>
                        </p>
                        <a href="<?php echo the_permalink() ?>" class="view_more mt-4">
                          View more
                        </a>

                      </div>
                    </div>
                </div>
            </div>
          </div>
        <?php }else{ ?>
          <div class="container_custom_fast">
            <div class="row">
              <div class="col-sm-6 fast_delivery_content">
                  <div class="">

                    <div class="fast_delivery mb-4">
                        <img  src="<?php bloginfo('template_directory') ?>/public/images/background/section-title-image-8.png" class="logistics_bk">
                        <h5 class="fast_delivery_text pl-4"><?php echo the_title(); ?></h5>
                    </div>

                    <div class="pl-4 logictic_content" >
                      <p>
                        <?php echo the_excerpt(); ?>
                      </p>
                      <a href="<?php echo the_permalink() ?>" class="view_more mt-4">
                        View more
                      </a>

                    </div>
                  </div>
              </div>

              <div class="col-sm-6 mt-4">
                <!-- <img src="<?php bloginfo('template_directory') ?>/public/images/card/services-image-2.jpg" width="100%"> -->
                <?php echo get_the_post_thumbnail( get_the_id(), '', array( 'class' =>'services-img') );?>
              </div>
            </div>
          </div>
        <?php } ?>
       

        <?php endwhile; ?>
        <?php if (function_exists("pagination")) {
            pagination($custom_query->max_num_pages);
        } ?>

      </div>

     

<?php get_footer(); ?>