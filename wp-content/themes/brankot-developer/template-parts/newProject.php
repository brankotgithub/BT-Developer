 <!--project section start -->
    

      
      
      <div class="new_project_section layout_padding">
        <div class="container">
          <h1 class="new_project_taital"><?php the_field('header_new_project'); ?></h1>
          <p class="new_project_text"><?php the_field('new_project_header_text'); ?></p>
          <div class="new_project_section_2 layout_padding">
           <div class="row">
              <?php
                // Custom Query
                $args = array(
            'category_name' => 'new', // Filter by 'about' category
            'posts_per_page' => 3, // Retrieve all posts
            'orderby' => 'date', // Order by date
            'order' => 'DESC' // Display in ascending order (newer to older)
        );

                $query = new WP_Query($args);

                // Loop through the posts
                $count = 0;
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        
                ?>
               
              
                  
                  <div class="overlay<?php echo $count; ?>" style="display: none;"></div>
                <div class="fullscreen<?php echo $count; ?> " style="display: none;">
                    <i class="fas fa-times close-icon" onclick="toggleFullscreen<?php echo $count; ?>()"></i>
                           
                    <iframe src="<?php echo get_field('new_project_link'); ?>"></iframe>


                </div>
                 
                  
             <div class="col-lg-4 col-sm-12">
            <div class="zoom" onclick="toggleFullscreen<?php echo $count; ?>()">
                <img src="<?php
                    if (has_post_thumbnail()) {
                        echo esc_url(get_the_post_thumbnail_url(get_the_ID()));
                    } else {
                        // Display a default image if no featured image is set
                    echo esc_url(get_template_directory_uri() . '/Fronted/images/img-1.png');
                    }
                    ?>" class="image_6">
                <h6 class="new_text"><?php the_title(); ?></h6>
            </div>
            </div>
         
              <?php
                        $count++;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
              </div>
          </div>
        </div>
      </div>
      <!--project section end -->

