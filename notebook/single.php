      <?php get_header(); 
      ?>
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
              <div class="blog single-blog">
                <h1><?php the_title(); ?></h1>
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
                <?php the_post_thumbnail('post-image-lg',array('class' => 'img-responsive')); ?>
                </a>
                <?php the_content(); ?>
              </div>
            <?php        
                }
              }
              else{
              echo "no post";
              }
            ?>
            
                <?php next_post_link( '%link', '%title', true, '', 'category' ); ?>
              
             
                <?php previous_post_link( '%link', '%title', true, '', 'category' ); ?>
              
            <?php
              $postid = get_the_ID();
              $comments_count = wp_count_comments($postid);
             
              if($comments_count->total_comments>1){
                ?>
                <a href="#reply-title" class="btn btn-secondary pull-right leave-reply">Leave a Reply</a>
                <?php
              }
            ?>
            <?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
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

    



