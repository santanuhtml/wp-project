 <?php get_header(); ?>

  <!-- ================== Breadcrumbs ==================== -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url(); ?>">Home</a></li>
            <li><a href="<?php echo site_url(); ?>">All Posts</a></li>
            <li class="active">Single</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- ================== single-post ==================== -->
  <div class="post-widgets">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div class="single-post">
            <?php
              if(have_posts()){
                the_post();
                
                ?>
                <div class="post" style="padding-bottom: 20px;">
                  <?php the_post_thumbnail('post-image'); ?>
                  <h2><?php the_title(); ?></h2>
                  <p class="post-details"><?php the_time('F jS, Y') ?></p>
                  <?php echo the_content(); ?>
                  <div class="tags" id="tag">
                    <h4>Tags:</h4>
                    <?php the_tags('',' ',''); ?>
                  </div><!-- tags -->
                  <!-- <div class="tags">
                    <h4>Share:</h4>
                    <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                    <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                    <a href="#"><i class="icofont icofont-social-instagram"></i></a>
                    <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                  </div> -->
                </div><!-- post -->
                <?php
              }
              else{
                ?>
                <div class="post" style="padding-bottom: 20px;">
                    <img src="http://placehold.it/750x412" class="img-responsive">
                    <h2>Amazing Videos Show SpaceX’s</h2>
                    <p class="post-details">January 24, 2016 | OM SHARMA</p>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <div class="tags">
                      <h4>Tags:</h4>
                      <a href="#"><span class="label label-default">Default</span></a>
                      <a href="#"><span class="label label-default">Default</span></a>
                      <a href="#"><span class="label label-default">Default</span></a>
                    </div><!-- tags -->
                    <div class="tags">
                      <h4>Share:</h4>
                      <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                      <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                      <a href="#"><i class="icofont icofont-social-instagram"></i></a>
                      <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                    </div><!-- tags -->
                </div><!-- post -->
                <?php
              }
              wp_reset_postdata(); 
            ?>
           
           
            <div class="next-prev-post">
              <nav aria-label="...">
                <ul class="pager">
                  <li class="previous">
                    <?php previous_post_link( '%link', 'Previous Post' ); ?>
                    <!-- <a href="#"><span aria-hidden="true">&larr;</span> Older</a> -->
                  </li>
                  <li class="next">
                    <?php next_post_link( '%link', 'Next Post' ); ?>
                    <!-- <a href="#">Newer <span aria-hidden="true">&rarr;</span></a> -->
                  </li>
                </ul>
              </nav>
            </div>  
           
          </div><!-- single-post -->
          <div class="reaplay">
            <div class="row">
              <div class="col-md-8">
                <?php
                  if(comments_open()){
                    comments_template();
                  }
                ?>
              </div>
            </div>
          </div><!-- reaplay -->
        </div>
        <div class="col-md-4 padding-less">
          <?php 
            if(!dynamic_sidebar( 'single_right_sidebar' )){
            ?>
              <div class="col-md-12 col-sm-6 col-xs-12">
                <h2>single page right side widgets</h2>
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
  </div>

 <?php get_footer(); ?>

