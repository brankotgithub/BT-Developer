



<html<?php bloginfo('language'); ?>>
<head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>BT-Developer</title>
      <meta name="keywords" content="">
      <meta name="description" content="Customized worpress theme from free html css templates">
      <meta name="author" content="Branko Teodorovic">
       
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
     
     
  <title><?php 
            bloginfo('name'); 
            wp_title(' | ', true, 'left');
            ?></title>

 

<?php
// include default wordpress style
wp_head();
?>  


</head>
<!--header section start -->
      <div class="header_section">
         <nav class="navbar navbar-dark bg-dark">
            <a class="logo" href="<?php echo home_url();?>">
                <?php 
                    if (has_custom_logo()){
                    the_custom_logo();}
                        else{?>
            <img src="<?php echo get_template_directory_uri(); ?>/Fronted/images/logo.png" alt="" />
                <span>
              <?php 
            bloginfo('name'); 
            ?>
            </span>
          </a>
              <?php
                        } 
                    ?>
            
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarsExample01" style="">
               <?php 
                               
                            $menuLocation =get_nav_menu_locations();
                            //var_dump($menuLocation);
                            $headerManuID =$menuLocation['header-menu'];
                            $topMenuItems =wp_get_nav_menu_items($headerManuID);
                            /*list of menu items parametars - searching for ID, perents ID.....*/ 
                              //echo '<pre>';
                            //var_dump ($topMenuItems);
                           // echo '</pre>';
                             
                                 
                            
                            if ($topMenuItems) {?>
                <ul class="navbar-nav mr-auto nav-itemCell">
                    <?php                                     
                                        foreach ($topMenuItems as $topMenuItem) {
                                            
                                            //active class
                                                $activeClass = '';
                                                $activeClassSubMenu = '';
                                                if ($topMenuItem->url == get_permalink()) {
                                                    $activeClass = 'active';
                                                    
                                                }
                                            
                                            
                                            //top level menu
                                            
                                            if($topMenuItem->menu_item_parent==0) {
                                                
                                                ?>
                <li class="nav-item ">
                  <a class="nav-link  <?php echo $activeClass; ?>" href="<?php echo $topMenuItem->url?>"><?php echo $topMenuItem->title?></a>
                </li>
                <?php
                                    }}?>
                                </ul>
                           <?php } 
                            ?>
              
              <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
              </form>
            </div>
         </nav>
          
      <!-- banner section start -->

