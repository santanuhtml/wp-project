<?php
  //Advertisment
  function advertisment_shortcode($para,$content){
  $test = shortcode_atts(array(
    'id' => 0,  
  ),$para); 
  ob_start();
?>
  <div class="widget">    
    <div class="heading">
      <h2>Advertisment</h2>
    </div>
    <div class="">
      <img src=" http://placehold.it/300x250" class="img-responsive">
    </div>
  </div>
<?php
  return ob_get_clean();
  }
  add_shortcode('advertisment_sc','advertisment_shortcode');
?>



<?php
  //Advertisment
  function tag_shortcode($para,$content){
  $test = shortcode_atts(array(
    'id' => 0,  
  ),$para); 
  ob_start();
?>
  <div class="widget">    
    <div class="heading">
      <h2>Tag</h2>
    </div>
    <div class="">
      <?php
        $get_tags = null;
        $get_tags = new WP_Query(array(
          'post_type' => 'post'
          
         ));
        if($get_tags->have_posts()){
          while($get_tags->have_posts()){
            $get_tags->the_post();
            ?>
            <?php the_tags('<div id="tag">',' </div><div id="tag">','</div>'); ?>
        <?php
          }
        }
        wp_reset_postdata(); 
        ?>
    </div>
  </div>
<?php
  return ob_get_clean();
  }
  add_shortcode('tag_sc','tag_shortcode');
?>






<?php
 //Advertisment
  function tab_widgets_shortcode($para,$content){
  $test = shortcode_atts(array(
    'id' => 0,  
  ),$para); 
  ob_start();
  ?>
  <!-- tab widgets -->
    <div class="tab-widgets">
    <!-- Nav tabs -->
    <div class="heading">
      <ul class="nav my-tab">
        <li class="active"><a href="#home<?php echo $test['id']; ?>" role="tab" data-toggle="tab">Popular</a></li>
        <li><a href="#profile<?php echo $test['id']; ?>" role="tab" data-toggle="tab">Comments</a></li>
        <li><a href="#messages<?php echo $test['id']; ?>" role="tab" data-toggle="tab">Tags</a></li>
      </ul>
    </div>
    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home<?php echo $test['id']; ?>">
        <div class="widgets">
          <?php
          $new_post = null;
          $new_post = new WP_Query(array(
            'post_type' => 'post', 
            'posts_per_page' => 4,
           ));
          if($new_post->have_posts()){
            while($new_post->have_posts()){
              $new_post->the_post();
              ?>
         
              <div class="post newpost-widgets">
                <div class="row">
                  <div class="col-md-6 col-sm-5 col-xs-5">
                    <a href="<?php the_permalink() ?>">
                      <?php the_post_thumbnail('post-image'); ?>
                    </a>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-7 padding-less">
                    <a href="<?php the_permalink() ?>">
                      <h3><?php the_title(); ?></h3>
                    </a>
                  </div>
                </div>
              </div>
              <?php
              }
            }
            wp_reset_postdata(); 
          ?>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane" id="profile<?php echo $test['id']; ?>">
        <div class="widgets my-scroll">
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="http://placehold.it/68x68" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4>Om Sharma, <span>15th August, 2017</span></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco.</p>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="http://placehold.it/68x68" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4>Om Sharma <span>15th August, 2017</span></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco.</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="http://placehold.it/68x68" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4>Om Sharma <span>15th August, 2017</span></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco.</p>
            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="http://placehold.it/68x68" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4>Om Sharma <span>15th August, 2017</span></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco.</p>
            </div>
          </div>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane" id="messages<?php echo $test['id']; ?>">
        <div class="widgets my-scroll">
         <?php
          $get_tags = null;
          $get_tags = new WP_Query(array(
            'post_type' => 'post'
            
           ));
          if($get_tags->have_posts()){
            while($get_tags->have_posts()){
              $get_tags->the_post();
              ?>
              <?php the_tags('<div id="tag">',' </div><div id="tag">','</div>'); ?>
          <?php
            }
          }
          wp_reset_postdata(); 
          ?>
        </div>
      </div>
    </div>
  </div>

  <style type="text/css">
    .tab-widgets .my-tab{
        display: flex;
       /* border-bottom: 1px solid #ccc;*/
       margin-bottom: -5px;
      }
    .tab-widgets .nav>li>a{
      text-transform: uppercase;
      font-weight: 600;
    }
  </style>
  <!-- /tab widgets -->
  <?php
  return ob_get_clean();
  }
  add_shortcode('tab_widgets_sc','tab_widgets_shortcode');


?>