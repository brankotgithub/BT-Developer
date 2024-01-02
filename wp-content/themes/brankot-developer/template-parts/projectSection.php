<!--project section start -->
      <div class="project_section layout_padding">
        <div class="container">
            <h1 class="project_taital"><span class="project_bg"><?php the_field('project_header_text_2'); ?></span>  <?php the_field('project_header_text_3'); ?></h1>
          <p class="project_text"><?php the_field('project_header_text_1'); ?></p>
          
              
               <?php
                $args = array(
                'post_type' => 'post', // Set post type to 'post'
                'posts_per_page' => -1, // Retrieve all posts
                'tag' => 'project', // Specify the tag slug or name to filter posts
                'orderby' => 'date', // Order by date
                'order' => 'ASC', // Display in ascending order (older to newer)
                );

                $do_posts = new WP_Query($args);
                $count = 0;

                $featured_images = array();
                $post_titles = array();
                $post_URL= array();
                if ($do_posts->have_posts()) {
                    while ($do_posts->have_posts()) {
                    $do_posts->the_post();
                    $count++;
        
                // Store featured images and titles in separate arrays for each post
        
                if ($count === 4) {
                    $featured_images[$count] = get_field('project_image_3');
                    } elseif ($count === 3) {
                    $featured_images[$count] = get_field('project_image_2');
                    } else {
                    $featured_images[$count] = get_field('project_image');
                    }

                $post_titles[$count] = get_the_title();
                $post_URL[$count] = get_field('project_link');
            
                }
               
    wp_reset_postdata();
   for ($i = 1; $i <= $count; $i++) {
        ${'featured_images' . $i} = isset($featured_images[$i]) ? $featured_images[$i] : '';
        ${'post_titles' . $i} = isset($post_titles[$i]) ? $post_titles[$i] : '';
        ${'post_URL' . $i} = isset($post_URL[$i]) ? $post_URL[$i] : '';
    }
    
    ?>
             <div class="project_section_2 layout_padding"> 
            
                 <div class="row ">
                
                
              <div class="col-sm-8">
                <div class="image_main">
                  <div class="image_left container_1Cell">
                    <div class="container_1 ">
                      <img src="<?php  echo esc_url(${'featured_images' . 1}); ?>" alt="<?php echo ${'post_titles' . 1}; ?>" class="image" style="width:100%">
                      <div class="middle">
                        <div class="text"><img src="<?php echo get_template_directory_uri(); ?>/Fronted/images/search-icon.png"></div>
                        <a href="<?php echo esc_url(${'post_URL' . 1}); ?>" target="_blank">
                            <h1 class="ui_text"><?php echo (${'post_titles' . 1}); ?></h1>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="image_right container_1Cell">
                    <div class="container_1 container_1Cell">
                      <img src="<?php  echo esc_url(${'featured_images' . 2}); ?>" alt="<?php echo ${'post_titles' . 2}; ?>" class="image" style="width:100%">
                      <div class="middle">
                        <div class="text"><img src="<?php echo get_template_directory_uri(); ?>/Fronted/images/search-icon.png"></div>
                        <a href="<?php echo esc_url(${'post_URL' . 2}); ?>" target="_blank">
                            <h1 class="ui_text"><?php echo (${'post_titles' . 2}); ?></h1>
                         </a>
                      </div>
                    </div>
                  </div>
                  <div class="image_right_1">
                    <div class="container_1">
                      <img  src="<?php  echo esc_url(${'featured_images' . 3}); ?>" alt="<?php echo ${'post_titles' . 3}; ?>" class="image" style="width:100%">
                      <div class="middle">
                        <div class="text"><img src="<?php echo get_template_directory_uri(); ?>/Fronted/images/search-icon.png"></div>
                        <a href="<?php echo esc_url(${'post_URL' . 3}); ?>" target="_blank">
                            <h1 class="ui_text"><?php echo (${'post_titles' . 3}); ?></h1>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="container_1">
                    <img style="width: 350px; height: 700px;" src="<?php  echo esc_url(${'featured_images' . 4}); ?>" alt="<?php echo ${'post_titles' . 4}; ?>" class="image" style="width:100%">
                    <div class="middle row2">
                      <div class="text"><img src="<?php echo get_template_directory_uri(); ?>/Fronted/images/search-icon.png"></div>
                      <a href="<?php echo esc_url(${'post_URL' . 4}); ?> " target="_blank">
                          <h1 class="ui_text"><?php echo (${'post_titles' . 4}); ?></h1>
                      </a>
                    </div>
                </div>
              </div>
            </div>
              <?php }  else {
    echo 'No posts found.';
}
?>
              
          </div>
          <div class="seemore_bt"><a href="<?php the_field('see_more_link'); ?>"><?php the_field('see_more'); ?></a></div>
        </div>
      </div>
      <!--project section end -->

