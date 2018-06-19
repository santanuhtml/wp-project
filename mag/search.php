  <?php get_header(); ?>
  
  <!-- ================== Breadcrumbs ==================== -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url(); ?>">Home</a></li>
            <li class="active">All Posts</li>
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
              if(have_posts()){
              	?>
              	<h2><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2><br>
              	<?php
                while(have_posts()){
                  the_post();
                  ?>
                  <!-- post -->
                  <div class="post" id="post-list">
                    <div class="row">
                      <!-- <div class="col-md-6 col-sm-5">
                        <a href="<?php the_permalink() ?>">
                          <?php the_post_thumbnail('post-image'); ?>
                        </a>
                      </div> -->
                      <div class="col-md-12">
                        <a href="<?php echo the_permalink(); ?>">
                          <h3><?php echo the_title();?></h3>
                        </a>
                        <p class="post-details"><?php the_time('F jS, Y') ?></p>
                        <!--  <p class="post-content"></p> -->
                        <?php echo the_excerpt(); ?>
                      </div>
                    </div>
                  </div><!-- /post -->
                  <?php
                }
                the_posts_pagination();
              }
              else{
                ?>
                <h2><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2><br>
                <div class="post">
                  <div class="row">
                    <div class="col-md-6 col-sm-7">
                      <h3>Nothing found!</h3>
                    </div>
                  </div>
                </div><!-- post -->
                <?php
              }
            ?>
          </div><!-- vartical-post -->
        </div>
        <div class="col-md-4 padding-less">
          <div class="row">
            <!-- <div class="col-md-12 col-sm-6 col-xs-12">
              <?php include('includes/social.php') ?>
            </div> -->
            <div class="col-md-12 col-sm-6 col-xs-12">
              <?php include('includes/advertisment.php') ?>
            </div>
            <div class="col-md-12 col-sm-6 col-xs-12">
              <?php include('includes/tab-widgets.php') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  <!-- /post & widgets -->

  <?php get_footer(); ?>
  


            
