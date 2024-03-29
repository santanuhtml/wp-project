      <?php get_header(); ?>
      <!-- banner -->
      <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
      <!-- contetnt & section -->
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <?php
              if (have_posts()) {
                while ( have_posts() ) {
                  the_post();
            ?>
              <div class="blog">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <div class="row">
                  <div class="col-md-6">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail('post-image-sm',array('class' => 'img-responsive')); ?>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <?php the_excerpt(); ?><br /> <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
                  </div>
                </div>
              </div>
            <?php        
                }
              }
              else{
             ?>
             		<br />
                <h1 class="text-center">NO RESULT FOUND!!!</h1>
              
             <?php
              }
            ?>
            <style type="text/css">
              .blog p{
                display: inline;
              }
              .blog{
                border-bottom: 1px solid #e0e0e0;
                padding-bottom: 24px;
              }
            </style>
          </div>
          <div class="col-md-4">
            <div class="basic-padding2">
              <img src="https://via.placeholder.com/300X300">
            </div>
            <div class="sidebar">
              <div class="social-media widget">
                <h2 class="widgettitle">CONNECT WITH US</h2>
                <ul class="list-inline">
                  <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/main/img/facebook.svg"></a></li>
                  <li><a href="#"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/main/img/twitter.svg"></a></a></li>
                  <li><a href="#"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/main/img/pinterest.svg"></a></a></li>
                  <li><a href="#"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/main/img/linkedin.svg"></a></a></li>
                </ul>
              </div>
              <?php 
                if(!dynamic_sidebar( 'office_master_widgts1' ) ){
                  echo "Not Found!";
                }
              ?>
            </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>

    