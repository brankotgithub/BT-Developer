 <!--clients section start -->
      <div class="clients_section layout_padding">
        <div class="container">
          <h1 class="new_project_taital"><?php the_field('client_section_header_title'); ?></h1>
          <p class="new_project_text"><?php the_field('client_section_header_text'); ?></p>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
              <?php
                // Custom Query
                $args = array(
                    'post_type' => 'client_post',
                    'posts_per_page' => -1, // Retrieve all posts
                );
                $query = new WP_Query($args);

                // Loop through the posts
                $numberCar = 1;
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        
                        $numberCar++;
                        endwhile;
                        wp_reset_postdata();
                        endif;
                        
                        for ($i = 1; $i <= $numberCar/2; $i++) {
                            $active_class = ($i == 1) ? 'active' : '';
                ?>
            
              <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i-1; ?>" class="<?php echo $active_class;?>"></li>
                                                                                                             
                    <?php
                        }
                ?>                                                                                        
              
            </ol>
              
            <div class="carousel-inner">
                
                <?php
                // Custom Query
                $args = array(
                    'post_type' => 'client_post',
                    'posts_per_page' => -1, // Retrieve all posts
                );
                $query = new WP_Query($args);

                // Loop through the posts
                $count = 0;
                
                
                $featured_images = array();
                $post_titles = array();
                $post_content = array();
                
                
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        
                        $count++;

                        // Store featured images and titles in separate arrays for each post
                        $featured_images[$count] = get_the_post_thumbnail_url();
                        $post_titles[$count] = get_the_title();
                        $post_content[$count] = get_the_content();
                        
                       
                    endwhile;
    
            wp_reset_postdata();
            for ($i = 1; $i <= $count; $i++) {
                ${'featured_images' . $i} = isset($featured_images[$i]) ? $featured_images[$i] : '';
                ${'post_titles' . $i} = isset($post_titles[$i]) ? $post_titles[$i] : '';
                ${'post_content' . $i} = isset($post_content[$i]) ? $post_content[$i] : '';
                
                    
            }
            
            
            ?>
            <?php
            $count2=$count/2;
            $j=0;
            for ($i = 1; $i <= $count2; $i++) {
               $j++ ;
            ?>
                
                
                
              <?php if ($j == 1): ?>
                <div class="carousel-item active">
                <?php else: ?>
                    <div class="carousel-item">
                <?php endif; ?>
                        
                <div class="clients_section_2 layout_padding">
                  <div class="client_main">
                    <div class="client_left">
                      <div class="client_img"><img src="<?php echo esc_url(${'featured_images' . $j}); ?>"></div>
                    </div>
                    <div class="client_right">
                      <h4 class="client_name"><?php echo ${'post_titles' . $j}; ?></h4>
                      <p class="client_text"><?php echo ${'post_content' . $j};$j++; ?></p>
                    </div>
                  </div>
                  <div class="client_main_1">
                    <div class="client_left">
                      <div class="client_img_10"><img src="<?php echo esc_url(${'featured_images' . $j}); ?>"></div>
                    </div>
                    <div class="client_right">
                      <h4 class="client_name"><?php echo ${'post_titles' . $j}; ?></h4>
                      <p class="client_text"><?php echo ${'post_content' . $j}; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
           
                    }
                ?>
              
            </div>
          </div>
              
              <?php else: 
                echo 'No posts found.';
              endif; ?>
              
        </div>
      </div>
      <!--clients section end -->    
