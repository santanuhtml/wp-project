<?php
/*
--------------------------
THEME SETUP
--------------------------
*/
function jalantheme_setup(){
	/* title tage */
	add_theme_support('title-tag');
	/* register nav menus */
	register_nav_menus(array(
	  'header_menu' => 'Main menu',
	  'footer_menu' => 'footer menu'
	));
	/* register image support */
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','jalantheme_setup');

/*
---------------------------
FALLBACK MENU
---------------------------
*/
function office_master_fallback_menu(){ 
	?>
	<ul class="nav navbar-nav navbar-right">
    <li class="active"><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="product-list.php">Products</a></li>
    <li><a href="recipes.php">Recipes</a></li>
    <li><a href="csr.php">CSR</a></li>
    <li><a href="other-businesses.php">Other Businesses</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
	<?php 
	}

/*
----------------------------
CUSTOM POST
----------------------------
*/
function jalan_custom_post(){
    /* product */
	register_post_type('product',array(
    'labels' => array(
        'name' => 'Products',
        'menu_name' => 'Products',
        'all_items' => 'See All Products',
        'add_new' => 'Add New Product',
        'add_new_item' => 'Add New Basic Theme Product',
      ),
    'has_archive' => true,
    'public' => true,
    'menu_icon'   => 'dashicons-cart',
    'supports' => array(
        'title','editor','thumbnail'
      )
    ));
     /* Recipes */
    register_post_type('recipes',array(
    'labels' => array(
        'name' => 'Recipes',
        'menu_name' => 'Recipes',
        'all_items' => 'See All Recipes',
        'add_new' => 'Add New Recipes',
        'add_new_item' => 'Add New Basic ThemeRecipes',
      ),
    
    'public' => true,
    'menu_icon'   => 'dashicons-welcome-write-blog',
    'supports' => array(
        'title','editor','thumbnail'
      )
  ));
}
add_action('init','jalan_custom_post');

/*
------------------------------
------------------------------
*/
function custom_excerpt($number=50,$readmore='read'){
    $newNumber = $number + 1;
    $var = explode(' ',strip_tags( get_the_content() ),$newNumber);
    if(count($var)>=$newNumber){
      array_pop($var);
    }
    array_push($var,'<a href="'.get_the_permalink().'">'. $readmore . '</a>');
    $var = implode(' ',$var);
    return $var;
}

?>