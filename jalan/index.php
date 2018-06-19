<?php get_header(); ?>

<div class="section">
  <div class="container">
    <?php
      if (have_posts()) {
        while ( have_posts() ) {
        the_post();
    ?>
    <div class="post">
      <div class="row">
        <div class="col-md-5">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </div>
        <div class="col-md-7">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
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
          <div class="col-md-5">
            <img src="http://via.placeholder.com/350x250">
          </div>
          <div class="col-md-7">
            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>
        </div>
      </div>
      <?php
      }
    ?>
  </div>
</div>

<style type="text/css">
  .post{
    margin-bottom: 30px;
  }
  .post img{
    width: 100%;
    height: auto;
    margin-bottom: 15px;
    padding: 4px;
    line-height: 1.42857143;
    background-color: #ffffff;
    border: 1px solid #dddddd;
    border-radius: 4px;
  }
  .post h2{
    margin-bottom: 15px;
  }
</style>
<?php get_footer(); ?>