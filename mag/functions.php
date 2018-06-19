<?php

//------------ THEME SETUP ----------------
function theme_steup(){
  //html5
  add_theme_support( 'html5' );
	//add title tag
	add_theme_support( 'title-tag' );

	//add menu
	register_nav_menus(array(
	  'top_menu' => 'Top menu',
	  'header_menu' => 'Main menu',
	  'footer_menu' => 'footer menu'
	));

	//add image
	add_theme_support( 'post-thumbnails' ); 

	//add post image
	add_image_size( 'post-image', 670, 368, true );
}
add_action('after_setup_theme','theme_steup');


// ------------ FALL BACK MENU ----------------
//fall back top menu
function fallback_topmenu(){?>
	<ul class="list-inline pull-right top-nav" style="margin-right:10px;">
      <li class="hidden-xs"><a href="#">About Us</a></li>
      <li class="hidden-xs"><a href="#">Contact</a></li>
    </ul>
<?php
}
//fall back main menu
function fallback_mainmenu(){?>
	<ul class="nav navbar-nav">
    <li><a href="index.php">Life Style</a></li>
    <li><a href="front-page.php">Fashion</a></li>
    <li><a href="singlepost.php">Travel</a></li>
    <li><a href="#">News</a></li>
    <li><a href="#">Music</a></li>
    <li><a href="#">Food</a></li>
  </ul>
<?php
}
// fall back footer menu
function fallback_footermenu(){?>
	<ul class="list-inline pull-right">
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
<?php
}

// ------------ GENERAL FUNCTIONS ----------------
//custom_excerpt for post content
function wpdocs_custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//horizontal posts
 function custom_excerpt_title($number=50,$readmore='read'){
    $newNumber = $number + 1;
    $var = explode(' ',strip_tags( get_the_title() ),$newNumber);
    if(count($var)>=$newNumber){
      array_pop($var);
    }
    array_push($var,'<a href="'.get_the_permalink().'">'. $readmore . '</a>');
    $var = implode(' ',$var);
    return $var;
  }


// ------------ Widgets register ----------------
function theme_widgets_setup() {
  //right sidebar
  register_sidebar( array(
    'name'          => 'Right Sidebar',
    'id'            => 'right_sidebar',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="heading"><h2>',
    'after_title'   => '</h2></div>',
  ) );

  //single page right sidebar
  register_sidebar( array(
    'name'          => 'Single page Right Sidebar',
    'id'            => 'single_right_sidebar',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="heading"><h2>',
    'after_title'   => '</h2></div>',
  ) );

  //register coustom widgets
  register_widget('tab_widgets');
  register_widget('news_widgets');
  register_widget('tag_widgets');

}
add_action( 'widgets_init', 'theme_widgets_setup' );


// ------------ external files ----------------
require_once('inc/custom_shortcode.php');
require_once('inc/widgets.php');

?>