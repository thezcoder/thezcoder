<?php 

function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Header Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );

function get_category_image($category_ID) {
	$image['12'] = 'html5.png';
	$image['7'] = 'css3.png';
	$image['5'] = 'js.png';
	$image['6'] = 'java.png';
	$image['4'] = 'php.png';
	$image['8'] = 'linux.png';

	return $image[$category_ID];
}


function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '<a href="index.php?p=' . get_the_ID() . '">  Read more...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function thezcoder_widgets_init() {
	register_sidebars(8, array(
		'name' => __('Sidebar %d'),
		'id' => 'sidebar-$i',
		'before_widget' => '<aside>',
		'after_widget' => '</aside>',
	) );
}
add_action( 'widgets_init', 'thezcoder_widgets_init' );

function get_category_sidebar_id($category_ID) {
	$sidebar['12'] = 1;
	$sidebar['7'] = 2;
	$sidebar['5'] = 3;
	$sidebar['6'] = 4;
	$sidebar['4'] = 5;
	$sidebar['8'] = 6;
	$sidebar['114'] = 7;

	return $sidebar[$category_ID];
}

function cycle_category($index) {
	$category[0] = 'HTML5';
	$category[1] = 'CSS3';
	$category[2] = 'Javascript';
	$category[3] = 'Java';
	$category[4] = 'PHP';
	$category[5] = 'Linux';
	
	return $category[$index];
}

function thezcoder_scripts() {
	wp_enqueue_script('jquery');
	
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/thezcoder.js',
		array( 'jquery' , 'jquery-ui-core' ), null, TRUE );	
	wp_register_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js',
		array( 'jquery' ), null, TRUE );
	wp_register_script( 'cycle', get_template_directory_uri() . '/js/jquery.cycle.all.js',
		array( 'jquery' ), null, TRUE );	
	
	wp_enqueue_script( 'easing' );
	wp_enqueue_script( 'cycle' );
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'thezcoder_scripts' );

?>