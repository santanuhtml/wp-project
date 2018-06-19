  <div class="footer">
      <div class="container">
        <div class="row">

          <div class="col-md-3">
            <div class="widget">
              <img src="<?php echo get_template_directory_uri(); ?>/main/img/logo2.png" class="img-responsive footer-logo">
              <h4>Jalan Food Products</h4>
              <p class="text-sm">Ranglal Jalan Road, Baralal Street,<br>
                Upper Bazar, Ranchi-834001,<br>
                Jharkhand (India)</p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="widget">
              <h3>Contact Details</h3>
              <p class="text-sm footer-contact"><i class="fa fa-phone" aria-hidden="true"></i>  0651-2209029<br>
                <i class="fa fa-phone" aria-hidden="true"></i>  0651-6888004<br>
                <i class="fa fa-envelope" aria-hidden="true"></i>  jalanfoodproducts@gmail.com</p>

              <div class="social-links">
                <p>Social Links :</p>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/main/img/icons/facebook.png" class="img-responsive"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/main/img/icons/google-plus.png" class="img-responsive"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/main/img/icons/twitter.png" class="img-responsive"></a>
              </div>
            </div>
          </div>

          

          <div class="col-md-3">
            <div class="widget">
              <h3>Quick Links</h3>
              <ul class="footer-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">CSR</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          
           <div class="col-md-3">
            <div class="widget">
              <h3>Get in touch</h3>
              <form>
                <div class="form-group">
                  <input type="text" name="name" placeholder="Your name" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" name="name" placeholder="Your mobile number" class="form-control">
                </div>
                 <div class="form-group">
                  <textarea class="form-control" placeholder="Your message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" value="Send" class="btn btn-primary">
                </div>
              </form>
            </div>
           </div>
          

          

        </div><!-- row -->
      </div>
    </div>

    <div class="copyright">
      <div class="container">
        <p>&copy; 2018 - Jalan Food Products | Website by <a href="#">Webmaddy</a></p>
      </div>
    </div>



   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/main/js/bootstrap.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/main/plugins/wow.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/main/plugins/lity/lity.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/main/plugins/bgndGallery/dist/jquery.mb.bgndGallery.js"></script>
    <script type="text/javascript">
      new WOW().init({
        offset: 50
      });
      //Redefining the "zoom" effect
      $.mbBgndGallery.effects.zoom = {
          enter:{scale:(1+ Math.random()*2),opacity:0, z: 100},
          exit:{scale:(1 + Math.random()*2),opacity:0, z:100},
          enterTiming:"ease-out",
          exitTiming:"ease-in"
      };


      myGallery = new mbBgndGallery({
        containment:"#bannerGallery", // or "#myGalleryElement"
        timer:4000,
        effTimer:2000,
        controls:"#gallery_controls",
        grayScale:false,
        effect:'zoom',
        // If your server allow directory listing
        //folderPath:"elements/",
        // else:
        images:[
         "<?php echo get_template_directory_uri(); ?>/main/img/banner.jpg",
         ],
      });
    </script>
    <?php wp_footer(); ?>
  </body>
</html>