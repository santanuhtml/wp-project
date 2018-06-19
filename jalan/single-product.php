<?php get_header(); ?>

<div class="page" style="background-image:url('<?php echo get_template_directory_uri(); ?>/main/img/page-background.jpg');">
  <div class="container">
    <div class="row">

      <?php
        if (have_posts()) {
          while ( have_posts() ) {
          the_post();
      ?>


      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url(); ?>">Home</a></li>
          <li><a href="<?php echo site_url(); ?>/products">Products</a></li>
          <li class="active"><?php the_title(); ?></li>        
        </ol>
        <div class="section-sm">
          <div class="row">
            <div class="col-md-4">
              <div class="product-box wow fadeInUp" data-wow-delay="900ms">
                <?php the_post_thumbnail(); ?>
                <div class="details">
                  <h3><?php the_title(); ?></h3>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="basic-padding">
                <h2 class="title2"><?php the_title(); ?></h2>
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php        
          }
        }
        else{
        echo "no post";
        }
      ?> 



    </div>
  </div>
</div>



<?php get_footer(); ?>