<?php 
/*
Template Name: Product List
*/
get_header();
 ?>
<div class="page" style="background-image:url('<?php echo get_template_directory_uri(); ?>/main/img/page-background.jpg');">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
		    <li><a href="<?php echo site_url(); ?>">Home</a></li>
		    <li class="active">Product List</li>        
		  </ol>
			<h1 class="title">Product List</h1>
		</div>
	</div>
</div>

			<div class="container">
        <div class="row">

        <?php
        $jalanProduct = new WP_Query(array(
        'post_type' => 'product', 
        'posts_per_page' => -1,
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
        </div>
      </div>
    </div>

</div>
<style type="text/css">
  .page p {
    text-align: left;
  }
</style>
<?php get_footer(); ?>