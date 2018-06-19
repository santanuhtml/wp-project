    <!-- footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5">
            <div class="pull-left">
              <p>© 2017 - Webmaddy Web Studio</p>
            </div>
          </div>
          <div class="col-md-7 col-sm-7">
            <?php wp_nav_menu(array(
              'theme_location' => 'footer_menu',
              'fallback_cb' => 'fallback_footermenu',
              'container' => '',
              'menu_class' => 'list-inline pull-right'
            )); ?>
            <!-- <ul class="list-inline pull-right">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery-2.2.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/default.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>