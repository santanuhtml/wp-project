<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/default.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/color.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- ================== top-nav ==================== -->
    <div class="pre-nav">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-6">
            <ul class="list-inline">
              <li><a href="#"><?php date_default_timezone_set("Asia/Bangkok"); echo date('l, jS F Y'); ?></a></li>
            </ul>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <ul class="list-inline pull-right top-nav">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            </ul>
            <!-- top menu -->
            <?php wp_nav_menu(array(
              'theme_location' => 'top_menu',
              'fallback_cb' => 'fallback_topmenu',
              'container' => '',
              'menu_class' => 'list-inline pull-right top-nav'
            )); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- ================== header ==================== -->
    <div class="header-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-3">
            <div class="logo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="img-responsive">
            </div>
          </div>
          <div class="col-md-8 col-sm-9 hidden-xs">
            <img src="http://placehold.it/847x120" class="img-responsive">
          </div>
        </div>
      </div>
    </div>
    <!-- ================== main-nav ==================== -->
    <nav class="navbar navbar-default main-nav">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <!-- main menu -->
          <?php wp_nav_menu(array(
            'theme_location' => 'header_menu',
            'fallback_cb' => 'fallback_mainmenu',
            'container' => '',
            'menu_class' => 'nav navbar-nav'
          )); ?>
          <ul class="nav navbar-nav navbar-right">
            <li style="margin-left: 10px; width: 100%;">
              <?php get_search_form(); ?>
              <!-- <form class="navbar-form navbar-left">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
              </form> -->
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>