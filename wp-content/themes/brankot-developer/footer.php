<!--footer section start -->
      <div class="footer_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <h1 class="addres_text">ADDRESS</h1>
              <p class="dummy_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
            </div>
            <div class="col-sm-4">
              <h1 class="addres_text">QUICK LINKS</h1>
              <div class="footer_menu">
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="project.html">Project</a></li>
                  <li><a href="clients.html">Clients</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="Newsletter">
                <h1 class="addres_text">Newsletter</h1>
                <div class="social_icon">
                  <ul>
                    <li><a href="#"><img src="images/fb-icon.png"></a></li>
                    <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                    <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                  </ul>
                </div>
              </div>
              <input type="text" class="mail_text" placeholder="Enter Your Email" name="Enter Your Email">
              <input type="text" class="mail_text" placeholder="Phone" name="Phone">
              <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            </div>
          </div>
        </div>
      </div>
      <!--footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
        <div class="container">
          <div class="copyright_text">Copyright 2023 All Right Reserved By.<a href="https://html.design"> Free html Templates</div>
        </div>
      </div>
      <!-- copyright section end -->  
      <!-- Javascript files-->
      <script src="<?php echo get_template_directory_uri(); ?>/Fronted/js/jquery.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/Fronted/js/popper.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/Fronted/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/Fronted/js/jquery-3.0.0.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/Fronted/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="<?php echo get_template_directory_uri(); ?>/Fronted/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/Fronted/js/custom.js"></script>
      <!-- javascript --> 
      <script src="<?php echo get_template_directory_uri(); ?>/Fronted/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });fa fa-angle-down
      </script>
    
      <script>
    function toggleFullscreen0() {
  const fullscreen = document.querySelector('.fullscreen0');
  const overlay = document.querySelector('.overlay0');
  
  if (fullscreen.style.display === 'none') {
    fullscreen.style.display = 'block';
    overlay.style.display = 'block';
    overlay.style.opacity = 0.8; // Set opacity to 0.5 when showing the overlay
  } else {
    fullscreen.style.display = 'none';
    overlay.style.opacity = 0; // Set opacity to 0 when hiding the overlay
    setTimeout(() => {
      overlay.style.display = 'none';
    }, 300); // Hide the overlay after the opacity transition (adjust the time as needed)
  }
}

function toggleFullscreen1() {
  const fullscreen = document.querySelector('.fullscreen1');
  const overlay = document.querySelector('.overlay1');
  
  if (fullscreen.style.display === 'none') {
    fullscreen.style.display = 'block';
    overlay.style.display = 'block';
    overlay.style.opacity = 0.8; // Set opacity to 0.5 when showing the overlay
  } else {
    fullscreen.style.display = 'none';
    overlay.style.opacity = 0; // Set opacity to 0 when hiding the overlay
    setTimeout(() => {
      overlay.style.display = 'none';
    }, 300); // Hide the overlay after the opacity transition (adjust the time as needed)
  }
}
function toggleFullscreen2() {
  const fullscreen = document.querySelector('.fullscreen2');
  const overlay = document.querySelector('.overlay2');
  
  if (fullscreen.style.display === 'none') {
    fullscreen.style.display = 'block';
    overlay.style.display = 'block';
    overlay.style.opacity = 0.8; // Set opacity to 0.5 when showing the overlay
  } else {
    fullscreen.style.display = 'none';
    overlay.style.opacity = 0; // Set opacity to 0 when hiding the overlay
    setTimeout(() => {
      overlay.style.display = 'none';
    }, 300); // Hide the overlay after the opacity transition (adjust the time as needed)
  }
}
      </script>

  
<?php
        // include default wordpress js files
        wp_footer();
?>

</body>

</html>

