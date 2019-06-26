<?php
require_once('wp-bootstrap-navwalker.php');
function gkTheme_setup(){
	add_theme_support('title-tag');
	register_nav_menus(array(
	  'header_menu' => 'Main menu',
	  'footer_menu' => 'footer menu'
	));
	add_theme_support('post-thumbnails');
	add_image_size( 'post-image-sm', 330, 168, true );
	add_image_size( 'post-image-lg', 690, 350, true );
}
add_action('after_setup_theme','gkTheme_setup');

//READ MORE OPTION
function wpdocs_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

//Filter the except length to 40 words.
function wpdocs_custom_excerpt_length( $length ) {
  return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//breadcrumb
function get_breadcrumb() {
  echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
  if (is_category() || is_single()) {
      echo "&nbsp;&nbsp;<span>&#8260;</span>&nbsp;&nbsp;";
      the_category(' &bull; ');
        if (is_single()) {
          echo " &nbsp;&nbsp;<span>&#8260;</span>&nbsp;&nbsp; ";
          the_title();
        }
  } elseif (is_page()) {
      echo "&nbsp;&nbsp;<span>&#8260;</span>&nbsp;&nbsp;";
      echo the_title();
  } elseif (is_search()) {
    echo "&nbsp;&nbsp;<span>&#8260;</span>&nbsp;&nbsp;Search Results for... ";
    echo '"<em>';
    echo the_search_query();
    echo '</em>"';
  }
}

//question custom post
function basicTheme_custom_post(){
  register_post_type('questions',array(
    'labels' => array(
      'name' => 'Questions',
      'menu_name' => 'Questions',
      'all_items' => 'All Questions',
      'add_new' => 'Add New Questions',
      'add_new_item' => 'Add New Questions',
      ),
      'public' => true,
      'menu_icon' => 'dashicons-welcome-add-page',
      'supports' => array(
        'title','editor','thumbnail','excerpt','revisions','custom-fields','page-attributes'
      )
    ));
}
add_action('init','basicTheme_custom_post');

function create_question_taxonomy(){ 
  register_taxonomy(
    'questions-category',   
    'questions',
    array(
      'label' => __( 'Category' ),
      'rewrite' => array( 'slug' => 'questions-category' ),
      'hierarchical' => true,
    )
  );
}
add_action( 'init', 'create_question_taxonomy' );

//widgets
function office_master_widgets() {
  register_sidebar( array(
    'name'          => 'Home right sidebar',
    'id'            => 'office_master_widgts1',
  ) );
}
add_action('widgets_init', 'office_master_widgets');

//SHORTCODE
function first_shortcode($para){
	return '<div class="more">'.$para['value'].'</div>';
}
add_shortcode('callit','first_shortcode');

// fallback menu
function office_master_fallback_menu(){ 
?>
<ul class="nav navbar-nav">
  <li><a href="#">Science</a></li>
  <li><a href="#">History</a></li>
  <li><a href="#">Geography</a></li>
  <li><a href="#">Conputer</a></li>
</ul>
<?php 
	}
?>