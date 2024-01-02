<!--about section start -->
      <div class="about_section layout_padding">
        <div class="container">
            <?php
                // Custom Query
                $args = array(
            'category_name' => 'about', // Filter by 'about' category
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
          <div class="row">
              
            <div class="col-md-6">
              <h1 class="about_taital"><?php the_title(); ?></h1>
              <p class="about_text"><?php the_content(); ?></p>
              <div class="readmore_bt"><a href="<?php the_field('github_about_link'); ?>" target="_blank"><?php the_field('github_about'); ?></a>
</div>
              <div class="readmore_bt"><a href="<?php the_field('linkedin_about_link'); ?>" target="_blank"><?php the_field('linkedin_about'); ?></a></div>
              <div class="readmore_bt"><a href="<?php the_field('hubstaff_about_link'); ?>" target="_blank"><?php the_field('hubstaff_about'); ?></a></div>
            </div>
            <div class="col-md-6">
              <div class="about_img"><img src="<?php
    if (has_post_thumbnail()) {
        echo esc_url(get_the_post_thumbnail_url(get_the_ID()));
    } else {
        // Display a default image if no featured image is set
        echo esc_url(get_template_directory_uri() . '/Fronted/images/img-1.png');
    }
    ?>">
       
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
      <!--about section end -->

