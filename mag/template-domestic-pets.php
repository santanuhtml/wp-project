<?php 
/*
Template Name: domestic pets
*/
get_header(); ?>

 <!-- ================== Breadcrumbs ==================== -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url(); ?>">Home</a></li>
            <li class="active">Domestic Pets</li>
          </ol>
        </div>
      </div>
    </div>
  </div> 

 <!-- ================== post & widgets ==================== -->
  <div class="post-widgets">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="vartical-post">
            <!-- <div class="heading">
              <h2>Technology</h2>
            </div> -->
            <?php
		        	$category_page = null;
		        	$category_page = new WP_Query(array(
					    'post_type' => 'post',
					    'category_name' => 'domestic pets', 
					    'posts_per_page' => -1,

					   ));
              if($category_page->have_posts()){
                while($category_page->have_posts()){
                  $category_page->the_post();
                  ?>
                  <div class="post" id="post-list">
                    <div class="row">
                      <div class="col-md-6 col-sm-5">
                        <a href="<?php the_permalink() ?>">
                          <?php the_post_thumbnail('post-image'); ?>
                        </a>
                      </div>
                      <div class="col-md-6 col-sm-7">
                        <h3><?php echo the_title();?></h3>
                        <p class="post-details"><?php the_time('F jS, Y') ?></p>
                        <!--  <p class="post-content"></p> -->
                        <?php echo the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" type="button" class="btn btn-default">Read Continue</a>
                      </div>
                    </div>
                  </div><!-- /post -->
                  <?php
                }
                the_posts_pagination();
              }
              else{
                ?>
                <div class="post">
                  <div class="row">
                    <div class="col-md-6 col-sm-5">
                      <img src="http://placehold.it/360x220" class="img-responsive">
                    </div>
                    <div class="col-md-6 col-sm-7">
                      <h3>Amazing Videos Show SpaceX’s long established fact.</h3>
                      <p class="post-details">January 24, 2016 | OM SHARMA</p>
                      <p class="post-content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using</p>
                      <a href="#" type="button" class="btn btn-default">Read Continue</a>
                    </div>
                  </div>
                </div><!-- post -->
                <?php
              }
            ?>
          </div><!-- vartical-post -->
        </div>
        <div class="col-md-4 padding-less">
          <?php 
            if(!dynamic_sidebar( 'right_sidebar' )){
            ?>
              <div class="col-md-12 col-sm-6 col-xs-12">
                <h2>Add Side widgets</h2>
                <br>
                <h3>Advertisment widget</h3>
                <br>
                <h3>tab widget</h3>
              </div>
          <?php  
            }
           ?>
        </div>
      </div>
    </div>
  </div>  <!-- /post & widgets -->



<?php 
get_footer(); ?>