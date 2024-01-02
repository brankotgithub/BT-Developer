<!--skills section start -->
      <div class="skills_section layout_padding">
        <div class="container">
          <h1 class="skills_taital"><span class="skills_bg">My</span> skills</h1>
          <p class="skills_text">There are many variations of passages of Lorem Ipsum available, </p>
          <div class="skills_section_2 layout_padding">
              <?php
                // Custom Query
                $args = array(
                    'post_type' => 'skill_services',
                    'posts_per_page' => -1, // Retrieve all posts
                    'orderby' => 'date', // Order by date
                    'order' => 'ASC' // Display in ascending order (older to newer)
                );

                $query = new WP_Query($args);

                // Loop through the posts
                $count = 0;
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        
                ?>
            <div class="progres_main">
              <div class="progress_left">
                <h2 class="lable_text"><?php the_title(); ?></h2>
              </div>
              <div class="progress_right">
                <div class="progress">
                    <div class="progress-bar" style="width:<?php echo get_the_content(); ?>%;background-color: <?php the_field('progress_bar_color'); ?>;">
                    <span class="width_text"><?php echo get_the_content(); ?>%</span>
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
          </div>
          
        </div>
      </div>
      <!--skills section end -->
