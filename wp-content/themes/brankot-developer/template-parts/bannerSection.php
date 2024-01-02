<!-- banner section start -->
      <div class="banner_section layout_padding ">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
              
              <?php
                // Custom Query
                $args = array(
                    'post_type' => 'slider_services',
                    'posts_per_page' => -1, // Retrieve all posts
                );
                $query = new WP_Query($args);

                // Loop through the posts
                $count = 0;
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $active_class = ($count == 0) ? 'active' : '';
                ?>
              
              
              <div class="carousel-item <?php echo $active_class; ?>">
                <div class="container">
                  <div class="row row2">
                     <div class="col-lg-7 col-md-6">
                        <div>
    <img class="banner_sectionCell" src="<?php
    if (has_post_thumbnail()) {
        echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'custom_image_size'));
    } else {
        // Display a default image if no featured image is set
        echo esc_url(get_template_directory_uri() . '/Fronted/images/img-1.png');
    }
    ?>" alt="">
</div>



                     </div>
                      
                     <div class="col-lg-5 col-md-6 ">
                        <h1 class="banner_taital bannertextCell"><?php the_title(); ?></h1>
                        <p class="banner_text bannertextCell"><?php echo get_the_excerpt(); ?> </p>
                        <div class="btn_main">
                           <div class="more_bt">
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'about', true)); ?>">
                                <?php echo esc_html(get_post_meta(get_the_ID(), 'About text 1', true)); ?>
                            </a>
                            </div>

                           <div class="contact_bt"><a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'Contact', true)); ?>">
                                <?php echo esc_html(get_post_meta(get_the_ID(), 'Contact text 1', true)); ?>
                            </a>
                           </div>
                        </div>
                     </div>
                     
                  </div>
              </div>
              
              
            </div>
              <?php
                        $count++;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            <div class="controler_main">
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class="fa fa-angle-down" style="font-size:36px"></i>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class="fa fa-angle-up" style="font-size:36px"></i>
              </a>
            </div>
               
          </div>
      </div>
      
      </div>
<!-- banner section end -->