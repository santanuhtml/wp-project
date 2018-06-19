<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/main/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600|Playfair+Display:400,400i,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href='<?php echo get_template_directory_uri(); ?>/main/plugins/bgndGallery/dist/css/jquery.mb.bgndgallery.min.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/main/plugins/lity/lity.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main/plugins/animate.css">
    <link href="<?php echo get_template_directory_uri(); ?>/main/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>

    <div class="pre-nav">
      <div class="container">
        <p class="pull-right"><i class="fa fa-phone" aria-hidden="true"></i> Call : 98300 12345</p>
        <p class="pull-right"><i class="fa fa-envelope" aria-hidden="true"></i> Email : info@jalansattu.com</p>
      </div>
    </div>

    <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/main/img/logo2.png" class="img-responsive">
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
          <!-- <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="product-list.php">Products</a></li>
            <li><a href="recipes.php">Recipes</a></li>
            <li><a href="csr.php">CSR</a></li>
            <li><a href="other-businesses.php">Other Businesses</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul> -->

          <?php wp_nav_menu(array(
            'theme_location' => 'header_menu',
            'fallback_cb' => 'office_master_fallback_menu',
            'container' => '',
            'menu_class' => 'nav navbar-nav navbar-right'
          )); ?>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>