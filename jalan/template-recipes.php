<?php 
/*
Template Name: Recipes
*/
get_header();
 ?>
<div class="page" style="background-image:url('<?php echo get_template_directory_uri(); ?>/main/img/page-background.jpg');">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
		    <li><a href="#">Home</a></li>
		    <li class="active">Recipes</li>        
		  </ol>
			<h1 class="title">Recipe</h1>
		</div>
	</div>
</div>

			<div class="container">
        <div class="row">



          <?php
            $allrecipes = new WP_Query(array(
              'post_type' => 'recipes', 
              'posts_per_page' => -1
              ));

            if ($allrecipes->have_posts()) {
              while($allrecipes->have_posts()){
                $allrecipes->the_post();
                ?>

                <div class="col-md-4">
                  <div class="product-box wow fadeInUp">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail(); ?>
                    </a>
                    <div class="details">
                      <h3><?php the_title(); ?></h3>
                    </div>
                    <a class="btn" href="<?php the_permalink(); ?>">View Details</a>
                  </div>
                </div>
                
                <?php
              }
            }
            else{
              ?>

              <div class="col-md-4">
            <div class="product-box wow fadeInUp">
              <a href="recipes-details.php"><img src="<?php echo get_template_directory_uri(); ?>/main/img/Recipes/sattudrink.jpg" class="img-responsive"></a>
              <div class="details">
                <h3>Sattu Drink</h3>
              </div>
              <a class="btn" href="recipes-details.php">View Details</a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-box wow fadeInUp">
              <a href="recipes-details.php"><img src="<?php echo get_template_directory_uri(); ?>/main/img/Recipes/sattubaati.jpg" class="img-responsive"></a>
              <div class="details">
                <h3>Sattu Baati</h3>
              </div>
              <a class="btn" href="recipes-details.php">View Details</a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-box wow fadeInUp">
              <a href="recipes-details.php"><img src="<?php echo get_template_directory_uri(); ?>/main/img/Recipes/shallowfriedsattuflatbreads.jpg" class="img-responsive"></a>
              <div class="details">
                <h3>Shallow Fried Sattu Flatbreads</h3>
              </div>
              <a class="btn" href="recipes-details.php">View Details</a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-box wow fadeInUp">
              <a href="recipes-details.php"><img src="<?php echo get_template_directory_uri(); ?>/main/img/Recipes/sattuwithwatermelon.jpg" class="img-responsive"></a>
              <div class="details">
                <h3>Sattu With Watermelon</h3>
              </div>
              <a class="btn" href="recipes-details.php">View Details</a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-box wow fadeInUp">
              <a href="recipes-details.php"><img src="<?php echo get_template_directory_uri(); ?>/main/img/Recipes/sattufruitmix.jpg" class="img-responsive"></a>
              <div class="details">
                <h3>Sattu Fruitmix</h3>
              </div>
              <a class="btn" href="recipes-details.php">View Details</a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-box wow fadeInUp">
              <a href="recipes-details.php"><img src="<?php echo get_template_directory_uri(); ?>/main/img/Recipes/6.jpg" class="img-responsive"></a>
              <div class="details">
                <h3>Green Mango Sattu Drink</h3>
              </div>
              <a class="btn" href="recipes-details.php">View Details</a>
            </div>
          </div>


              <?php
            }
            wp_reset_postdata(); 

          ?>
          
        </div>
      </div>
    </div>

</div>
<?php
get_footer();
 ?>