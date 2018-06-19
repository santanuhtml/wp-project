<?php get_header(); ?>

  <!-- ================== banner ==================== -->
  <div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8 padding-rignt-less">
          <div class="banner1">
            <img src="http://placehold.it/750x412" class="img-responsive">
          </div>   
        </div>
        <div class="col-md-4 col-sm-4 padding-left-less hidden-xs">
          <div class="banner2">
            <img src="http://placehold.it/360x200" class="img-responsive">
          </div>
        </div>
         <div class="col-md-4 col-sm-4 padding-left-less hidden-xs">
          <div class="banner3">
            <img src="http://placehold.it/360x200" class="img-responsive">
          </div>
        </div>
      </div>
    </div>
  </div><!-- banner -->

  <!-- ================== post & widgets ==================== -->
  <div class="post-widgets">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="vartical-post">
            <div class="heading">
              <h2>New Posts</h2>
            </div>
            <?php
            	$new_post = null;
            	$new_post = new WP_Query(array(
						    'post_type' => 'post', 
						    'posts_per_page' => 3,
						   ));
            	if($new_post->have_posts()){
            		while($new_post->have_posts()){
            			$new_post->the_post();
            			?>
            			<div class="post" id="post-list">
                    <div class="row">
                      <div class="col-md-6 col-sm-5">
                        <a href="<?php the_permalink() ?>">
                          <?php the_post_thumbnail('post-image'); ?>
                        </a>
                      </div>
                      <div class="col-md-6 col-sm-7">
                      	<a href="<?php the_permalink() ?>">
                        	<h3><?php echo the_title();?></h3>
                      	</a>
                        <p class="post-details"><?php the_time('F jS, Y') ?></p>
                        <!--  <p class="post-content"></p> -->
                        <?php echo the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" type="button" class="btn btn-default">Read Continue</a>
                      </div>
                    </div>
                  </div><!-- /post -->
            			<?php
            		}
            	}
            	else{
            		?>
            		<div class="post">
		              <div class="row">
		                <div class="col-md-6 col-sm-5">
		                  <img src="http://placehold.it/360x220" class="img-responsive">
		                </div>
		                <div class="col-md-6 col-sm-7">
		                  <h3>Amazing Videos Show SpaceX’s</h3>
		                  <p class="post-details">January 24, 2016 | OM SHARMA</p>
		                  <p class="post-content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using</p>
		                  <a href="#" type="button" class="btn btn-default">Read Continue</a>
		                </div>
		              </div>
		            </div><!-- post -->
            		<?php
            	}
            	wp_reset_postdata(); 
            ?>
          </div><!-- vartical-post -->



          
    			<div class="horizontal-post">
            <div class="heading">
              <h2>Domestic Pets</h2>
            </div>
            <div class="row">
            	<?php
		          	$category_post = null;
		          	$category_post = new WP_Query(array(
							    'post_type' => 'post', 
							    'category_name' => 'domestic pets',
							    'posts_per_page' => 3,
							   ));
		          	if($category_post->have_posts()){
		          		while($category_post->have_posts()){
		          			$category_post->the_post();
		          			?>
			              <div class="col-md-4 col-sm-4">
			                <div class="post">
			                  <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail('post-image'); ?>
			                  </a>
			                  <a href="<?php the_permalink(); ?>">
			                  	<h3><?php the_title(); ?></h3>
		                  	</a>
			                  <p class="post-details"><?php the_time('F jS, Y') ?></p>
			                </div>
			              </div>
        						<?php
          				}
        				}
          		else{
	          		?>
	          		<div class="horizontal-post">
			            <div class="heading">
			              <h2>Domestic Pets</h2>
			            </div>
			            <div class="row">
			              <div class="col-md-4 col-sm-4">
			                <div class="post">
			                  <img src="http://placehold.it/230x140" class="img-responsive">
			                  <h3>Amazing Videos Show SpaceX’s</h3>
			                  <p class="post-details">January 24, 2016 | OM SHARMA</p>
			                </div>
			              </div>
			            </div>
			          </div><!-- horizontal-post -->
          		<?php
          		}
	          	wp_reset_postdata(); 
							?>
						</div>
      		</div><!-- horizontal-post -->
          




          <div class="news-post">
            <div class="heading">
              <h2>Domestic Pets</h2>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
              	<?php
			          	$category_post = null;
			          	$category_post = new WP_Query(array(
								    'post_type' => 'post', 
								    'category_name' => 'domestic pets',
								    'posts_per_page' => 1,
								   ));
			          	if($category_post->have_posts()){
			          		while($category_post->have_posts()){
			          			$category_post->the_post();
			          			?>
			          			<div class="single-news">
			                  <a href="<?php the_permalink(); ?>">
                        	<?php the_post_thumbnail('post-image'); ?>
                        </a>
                        <a href="<?php the_permalink(); ?>">
                        	<h3><?php the_title(); ?></h3>
                        </a>
			                  <p class="post-details"><?php the_time('F jS, Y') ?></p>
			                  <?php echo the_excerpt(); ?>
			                  <a href="<?php the_permalink(); ?>" type="button" class="btn btn-default">Read Continue</a>
			                </div><!-- single-news  -->
			          			<?php
			          		}
			          	}
			          	else{
			          		?>
			          		<div class="single-news">
		                  <img src="http://placehold.it/360x200" class="img-responsive">
		                  <h3>Amazing Videos Show SpaceX’s</h3>
		                  <p class="post-details">January 24, 2016 | OM SHARMA</p>
		                  <p class="post-content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using</p>
		                  <a href="#" type="button" class="btn btn-default">Read Continue</a>
		                </div><!-- single-news  -->
			          		<?php
			          	}
			          	wp_reset_postdata(); 
			          ?>

              </div>
              <div class="col-md-6 col-sm-6">
                <div class="news-list">
                	<?php
				          	$category_post = null;
				          	$category_post = new WP_Query(array(
									    'post_type' => 'post', 
									    'category_name' => 'domestic pets',
									    'posts_per_page' => 4,
									   ));
				          	if($category_post->have_posts()){
				          		while($category_post->have_posts()){
				          			$category_post->the_post();
				          			?>
				          				<div class="post">
			                      <div class="row">
			                        <div class="col-md-6 col-sm-5">
			                          <a href="<?php the_permalink(); ?>">
			                          	<?php the_post_thumbnail('post-image'); ?>
			                          </a>
			                        </div>
			                        <div class="col-md-6 col-sm-7 nopadding-left">
			                          <h3><?php echo custom_excerpt_title(10,'Learn More'); ?></h3>
			                          <p class="post-details"><?php the_time('F jS, Y') ?></p>
			                        </div>
			                      </div>
			                    </div>
			          				<?php
			          			}
		          			}
		          			else{
		          				?>
		          					<div class="post">
		                      <div class="row">
		                        <div class="col-md-6 col-sm-5 col-xs-5">
		                          <img src="http://placehold.it/360x200" class="img-responsive">
		                        </div>
		                        <div class="col-md-6 col-sm-7 col-xs-7">
		                          <h3>Amazing Videos Show SpaceX’s</h3>
		                          <p class="post-details">January 24, 2016 | OM SHARMA</p>
		                        </div>
		                      </div>
		                    </div>
		          				<?php
		          			}
		          			wp_reset_postdata(); 
	          			?>
                </div>
              </div>
            </div>
          </div><!-- news-post -->
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

<?php get_footer(); ?>