<?php

/* 
 include css function
 */
function brankot_developer_style (){
    
    wp_enqueue_style('Bootstrap', get_template_directory_uri().'/Fronted/css/bootstrap.min.css', array(), 'v4.1.0');
    wp_enqueue_style('Responsive', get_template_directory_uri().'/Fronted/css/responsive.css', array(''), 'v.1.0');        
    wp_enqueue_style('style', get_template_directory_uri().'/Fronted/css/style.css', array(), 'v.1.0');  
    wp_enqueue_style('owl.carousel', get_template_directory_uri().'/Fronted/css/owl.carousel.min.css', array(), 'v2.3.3');
    wp_enqueue_style('owl.theme.default', get_template_directory_uri().'/Fronted/css/owl.theme.default.min.css', array(), 'v2.3.3');
    wp_enqueue_style('my-custom-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
           
          wp_enqueue_style('font-awesome', 'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', array(), '4.0.3', 'all');
    
         wp_enqueue_script('fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', array(), 'v2.1.5', 'screen');
}

add_action('wp_enqueue_scripts', 'brankot_developer_style');
/* 
 include css function for close iframe dont work
 */
function enqueue_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), '5.15.4', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');



function brankot_developer_scripts (){
    wp_enqueue_script('jQuery', get_template_directory_uri().'/Fronted/js/jquery.mCustomScrollbar.min.css', array(), 'Version: 3.1.13', true);
    wp_enqueue_script('Bootstrap', get_template_directory_uri().'/Fronted/js/bootstrap.js', array('jQuery'), 'v4.3.1', true);
       
    wp_enqueue_script('jQuery', get_template_directory_uri().'/Fronted/js/jquery.min.js', array('jQuery'), 'v3.3.0', true);
      wp_enqueue_script('jQuery', get_template_directory_uri().'/Fronted/js/popper.min.js', array('jQuery'), 'v1.0.0', true);
      wp_enqueue_script('Bootstrap', get_template_directory_uri().'/Fronted/js/bootstrap.bundle.min.js', array('jQuery'), 'v4.1.0', true);
      wp_enqueue_script('jQuery', get_template_directory_uri().'/Fronted/js/jquery-3.0.0.min.js', array('jQuery'), 'v1.0.0', true);
      wp_enqueue_script('jQuery', get_template_directory_uri().'/Fronted/js/plugin.js', array('jQuery'), 'v1.0.0', true);
     
      
     
     
      wp_enqueue_script('owl.carousel', get_template_directory_uri().'/Fronted/js/owl.carousel.js', array('jQuery'), 'v4.1.0', true);
       
    wp_enqueue_script('fancybox', 'https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', array(), 'v2.1.5', true);
    
    wp_enqueue_script('Circle js', get_template_directory_uri().'/Fronted/js/jquery.mCustomScrollbar.concat.min.js', array('jQuery'), 'Version: 3.1.13', true); 
    wp_enqueue_script('Custom js', get_template_directory_uri().'/Fronted/js/custom.js', array('jQuery'), '1,0', true);
  
}

add_action('wp_enqueue_scripts', 'brankot_developer_scripts');

 

     


function brankot_developer_support (){
    
    //titlr support
    add_theme_support( 'title-tag' );
    
    //logo support
    add_theme_support( 'custom-logo', array (
                'height'               => 50,
		'width'                => 200,
		'flex-height'          => true,
		'flex-width'           => true
		/*'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, */
         
    ));
    
    //featured picture dupport
    add_theme_support( 'post-thumbnails' );
    
    //add image suport
    add_image_size( 'custom_image_size', 630, 360, true );
    add_image_size( 'custom_image_project1', 335, 357, true );
    add_image_size( 'custom_image_project2', 604, 357, true );
    add_image_size( 'custom_image_project3', 355, 600, true );
    //menu support
    register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'social-menu' => __( 'Social Menu' )
     )
   );
 
}
    

add_action('after_setup_theme', 'brankot_developer_support');
add_action('init', 'brankot_developer_support');



function brankot_developer_create_post_type() {
    register_post_type('slider_services', array(
        'labels' => array(
            'name' => 'SliderServices',
            'singular_name' => 'SliderService',
            'plural_name' => 'SliderServices',
            'all_items' => 'All Services',
            'add_new' => 'Add New Services',
            'add_new_item' => 'Add New Slider Services Item',
            'new_item' => 'New Slider Services',
            'edit' => 'Edit',
            'edit_item' => 'Edit Slider Service Item',
            'view' => 'View Slider Service',
            'view_item' => 'View Slider Service Item',
            'featured_image' => 'Featured image for this Service'
        ),
        'public' => true,
        'hierarchical' => false,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-admin-generic',
        'menu_position' => 17,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt', 'custom-fields'),
        'taxonomies' => array('post_tag'), // Add this line to enable tags
    ));
}

add_action('init', 'brankot_developer_create_post_type');


function brankot_developerSkill_create_post_type() {
    register_post_type('skill_services', array(
        'labels' => array(
            'name' => 'SkillsServices',
            'singular_name' => 'SkillsServices',
            'plural_name' => 'SkillsServices',
            'all_items' => 'All Skills',
            'add_new' => 'Add New Skill',
            'add_new_item' => 'Add New Skill Services Item',
            'new_item' => 'New Skill Services',
            'edit' => 'Edit',
            'edit_item' => 'Edit Skill Service Item',
            'view' => 'View Skill Service',
            'view_item' => 'View Skill Service Item',
            'featured_image' => 'Featured image for this Skill'
        ),
        'public' => true,
        'hierarchical' => false,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-admin-generic',
        'menu_position' => 18,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        'taxonomies' => array('post_tag'), // Add this line to enable tags
    ));
}

add_action('init', 'brankot_developerSkill_create_post_type');



function brankot_developerClient_create_post_type() {
    register_post_type('client_post', array(
        'labels' => array(
            'name' => 'ClientPost',
            'singular_name' => 'ClientPost',
            'plural_name' => 'ClientPosts',
            'all_items' => 'All Client Posts',
            'add_new' => 'Add New Client Post',
            'add_new_item' => 'Add New Client Post Item',
            'new_item' => 'New Client Posts',
            'edit' => 'Edit',
            'edit_item' => 'Edit Client Post Item',
            'view' => 'View Client Post',
            'view_item' => 'View Client Post Item',
            'featured_image' => 'Featured image for this Client'
        ),
        'public' => true,
        'hierarchical' => false,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-admin-generic',
        'menu_position' => 19,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        'taxonomies' => array('post_tag'), // Add this line to enable tags
    ));
}

add_action('init', 'brankot_developerClient_create_post_type');


//code for creating - calling options page
/*require get_template_directory() . '/inc/options.php';*/


