<?php get_header(); ?>

    <div class="header" id="bannerGallery">
      <div class="overlay"></div>
     <div class="header-content">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h4>Making every moment a</h4>
              <h2>Celebration</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="section section-intro">
      <div class="container">
        <div class="row">
          <div class="col-md-8 wow fadeInUp" data-wow-delay="1000ms">
            <h1 class="title">Jalan Food Products</h1>
            <p><strong>Jalan Group</strong> is a leading manufacturer and supplier of nutritious Chana Sattu, Besan and Roasted Chana. Jalan Group was founded by Late Shankar Lal Jalan in 1949. His successors Gyan Prakash Jalan &amp; Vishnu Kumar Jalan continued the time-tested business policies and never compromised on the quality of the products, using only natural ingredients and preserving their natural goodness in the food products. “Purity and health in every pack” is our everlasting promise to our consumers.</p>
            
          </div><!-- col 8 -->
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri(); ?>/main/img/badge.png" class="badge-50">
            <div class="intro_right wow fadeInLeft" data-wow-delay="500ms">
              <img src="<?php echo get_template_directory_uri(); ?>/main/img/intro1.jpg" class="img-responsive">
            </div>
            <div class="intro_right wow fadeInRight " data-wow-delay="700ms">
              <img src="<?php echo get_template_directory_uri(); ?>/main/img/intro2.jpg" class="img-responsive">
            </div>
            <div class="intro_right wow fadeInUp" data-wow-delay="1000ms">
              <img src="<?php echo get_template_directory_uri(); ?>/main/img/intro3.jpg" class="img-responsive">
            </div>
            <div class="intro_right wow fadeInDown" data-wow-delay="1200ms">
              <img src="<?php echo get_template_directory_uri(); ?>/main/img/intro4.jpg" class="img-responsive">
            </div>
          </div><!-- col 4 -->
        </div>
      </div>
      <img src="img/bowl.png" class="bowl wow fadeInRight" data-wow-delay="1000ms">
    </div>

    <div class="section section-products" style="background-image: url('<?php echo get_template_directory_uri(); ?>/main/img/bg-product.jpg')">
      
      <div class="container">
        <div class="row">


      <?php
        $jalanProduct = null;
        $jalanProduct = new WP_Query(array(
        'post_type' => 'product', 
        'posts_per_page' => 4,
        ));

      if ($jalanProduct->have_posts()) {
        while($jalanProduct->have_posts()){
          $jalanProduct->the_post();
          ?>

          <div class="col-md-3">
            <div class="product-box wow fadeInUp">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
              </a>
              <div class="details">
                <h3><?php the_title(); ?></h3>
                <p><?php echo custom_excerpt(12,''); ?></p>
              </div>
              <a class="btn" href="<?php the_permalink(); ?>">View Details</a>
            </div>
          </div><!-- col 3 -->
          <?php
        }
      }
      else{
        ?>

          <div class="col-md-3">
            <div class="product-box wow fadeInUp">
              <a href="product-details.php"><img src="<?php echo get_template_directory_uri(); ?>/main/img/product/1.jpg" class="img-responsive"></a>
              <div class="details">
                <h3>Jalan Sattu</h3>
                <p>Jalan Sattu is prepared from high quality gram which are first cleaned...</p>
              </div>
              <a class="btn" href="product-details.php">View Details</a>
            </div>
          </div><!-- col 3 -->

          <div class="col-md-3">
            <div class="product-box wow fadeInUp" data-wow-delay="300ms">
              <a href="product-details.php"><img src="<?php echo get_template_directory_uri(); ?>/main/img/product/2.jpg" class="img-responsive"></a>
              <div class="details">
                <h3>Jalan Besan</h3>
                <p>This is our oldest product. We take special care during production process of...</p>
              </div>
              <a class="btn" href="product-details.php">View Details</a>
            </div>
          </div><!-- col 3 -->

          <div class="col-md-3">
            <div class="product-box wow fadeInUp" data-wow-delay="600ms">
              <a href="product-details.php"><img src="<?php echo get_template_directory_uri(); ?>/main/img/product/1.jpg" class="img-responsive"></a>
              <div class="details">
                <h3>Bhunja Chana</h3>
                <p>his is our high quality roasted channa. It is packed in 500 grammes pack so...</p>
              </div>
              <a class="btn" href="product-details.php">View Details</a>
            </div>
          </div><!-- col 3 -->

          <div class="col-md-3">
            <div class="product-box wow fadeInUp" data-wow-delay="900ms">
              <a href="product-details.php"><img src="<?php echo get_template_directory_uri(); ?>/main/img/product/2.jpg" class="img-responsive"></a>
              <div class="details">
                <h3>Bombay Chana</h3>
                <p>Roasted Gram (Bhuna Channa) is consumed by people in village, town, city &amp; metropolis of India...</p>
              </div>
              <a class="btn" href="product-details.php">View Details</a>
            </div>
          </div><!-- col 3 -->


        <?php
      }
      wp_reset_postdata(); 
      ?>
      
          <div class="col-md-12 text-center margin-top-15">
            <a href="<?php echo site_url(); ?>/products" class="btn btn-secondary">View all products</a>
          </div>
        </div>
      </div>
    </div>


          <!-- ============= post test ============== -->
           <?php
            if (have_posts()) {
              while ( have_posts() ) {
              the_post();
          ?>

            <div class="single_post">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p><?php the_content(); ?></p>
            </div>
            
          <?php        
              }
            }
            else{
            echo "no post";
            }
          ?>


  <?php get_footer(); ?>