<?php 
  /* Template Name: Contact Us */
  get_header(3); 
?>

	<div class="services_bk">
     	<div class="about_us_text_bk">CONTACT US</div>
    </div>
    <div class="clearfix"></div>
 
  </div>
  
  
  <!-- FAST DELIVERY -->
  <div class="container_custom">
      <div class="row">
          <div class="col-sm-6 mb-5 fast_delivery_card">
            <img src="<?php bloginfo('template_directory') ?>/public/images/card/map.jpg" width="100%" height="100%">
          </div>
          <div class="col-sm-5 ml-5 fast_delivery_content">
              <div class="">

                <div class="fast_delivery mb-4">
                  <img src="<?php bloginfo('template_directory') ?>/public/images/background/section-title-image-5.png" class="fast_delivery_bk">
                    <h5 class="fast_delivery_text pl-4">GET IN TOUCH</h5>
                    <!-- <div class="fast_delivery_bk"></div> -->
                </div>

                <div class="" >
                  <div class="row">
                      <div class="col-sm-6">
                          <p>
                            <i class="fa fa-map-marker"></i> &nbsp;193 Steele Street NY
                          </p>
                          <p>
                            <i class="fa fa-th"></i>  &nbsp;267-527-511215
                          </p>
                          <p>
                            <i class="fa fa-clock-o"></i>  &nbsp;Mon - Sat: 7:00 - 22:00
                          </p>
                      </div>
                      <div class="col-sm-6 touch_address">
                          <p>
                            <i class="fa fa-map-marker"></i> &nbsp;4252 Layman, NY
                          </p>
                          <p>
                            <i class="fa fa-th"></i>  &nbsp;910-977-9777
                          </p>
                          <p>
                            <i class="fa fa-clock-o"></i>  &nbsp;Mon - Sat: 7:00 - 22:00
                          </p>
                      </div>
                  </div>
                  <div class="row mt-4">
                      <form class="form_contact ml-4">
                        <div class="input_contact_us">
                          <div class="row">
                            <input type="text" placeholder="Your Message" name="">
                          </div>
                          <div class="row">
                            <input type="text" placeholder="Your Name" name="">
                          </div>
                          <div class="row">
                            <input type="text" placeholder="Your Email" name="">
                          </div>

                          <div class="row">
                             <button class="view_more mt-4">
                              Submit
                            </button>
                          </div>
                        </div> 

                         
                      </form>
                  </div>
                  

                </div>
              </div>
          </div>
      </div>
  </div>


<?php get_footer(); ?>