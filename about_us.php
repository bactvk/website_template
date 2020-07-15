<?php 
  /* Template Name: About Us */
  get_header(2); 
?>

    <div class="services_bk">
      <div class="about_us_text_bk">ABOUT US</div>
    </div>
    <div class="clearfix"></div>
        <!-- slider top -->
        
  </div>
      
      <!-- about us -->
    <div class="container_custom_card container_custom_mobile">
      <div class="about_us_top text-center">
        <div class="about_us_intro">
          <!-- <img src="<?php bloginfo('template_directory') ?>/public/images/background/section-title-image-4.png" class="about_us_image"> -->
          <div class="about_us_block">
            <p class="about_us_text">COMPANY OVERVIEW</p>
            <p class="about_us_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eius mod tempor incididunt ut labore et dolore mag</p>
          </div>
        </div>
      </div>

      <div class="row card_content">

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

    <!-- clients -->
    <div class="container_custom container_custom_mobile">

      <div class="client_top text-center">
        <div class="client_intro">
          <!-- <div class="client_image"> </div> -->
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


<?php get_footer(); ?>