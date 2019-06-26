      <?php get_header(); ?>
      <br />
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
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="blog-info">
                  <ul class="list-inline add-icon">
                    <li>
                      Posted on : 
                      <?php
                      date_default_timezone_set("Asia/Kolkata");
                      echo the_date();
                      ?>
                    </li>
                    <li>
                      Post by : <?php the_author(); ?> 
                    </li>
                    <li>
                      <?php $category_detail=get_the_category(get_the_ID());
                        foreach($category_detail as $cd){
                        echo $cd->cat_name;
                      }
                      ?>
                    <li>  
                      <?php
                        $post_tags = get_the_tags();
                          if ( $post_tags ) {
                            echo 'Tags : ';
                            foreach( $post_tags as $tag ) {
                            echo  $tag->name . ', '; 
                          }
                        }
                      ?>
                      <!-- <?php the_tags('',' ',''); ?> -->
                    </li>
                  </ul>
                </div>  
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
                the_posts_pagination();
              }
              else{
              echo "no post";
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

    