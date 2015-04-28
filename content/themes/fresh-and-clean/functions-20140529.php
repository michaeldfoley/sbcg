<?php
//includes
include('functions/theme-admin.php');
include('functions/better-excerpts.php');
include('functions/slides-meta.php');

//scripts
add_action('wp_enqueue_scripts','my_theme_scripts_function');

function my_theme_scripts_function() {
	
	
	
	wp_enqueue_script('superfish', get_stylesheet_directory_uri() . '/js/superfish.js');
	
	if(is_front_page()) :
	wp_enqueue_script('nivoSlider', get_stylesheet_directory_uri() . '/js/jquery.nivo.slider.pack.js');
	endif;
}


//Remove WordPress Version For Security Reasons
remove_action('wp_head', 'wp_generator');

//Activate post-image functionality (WP 2.9+)
if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

//Image resizing
if ( function_exists( 'add_image_size' ) ) {
add_image_size( 'full-size',  9999, 9999, false );
add_image_size( 'header-image',  580, 280, true );
add_image_size( 'singe-post-image',  200, 150, true );
add_image_size( 'post-image',  160, 120, true );
add_image_size( 'related-image',  100, 80, true );
}

// Enable Custom Background
add_custom_background();

//Add Pagination Support
include('functions/pagination.php');

//Register Sidebars
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Sidebar',
'description' => 'Widgets in this area will be shown on the right-hand side.',
'before_widget' => '<div class="box">',
'after_widget' => '</div>',
'before_title' => '<h4>',
'after_title' => '</h4>',
));


if ( function_exists('register_sidebar') )
			 
register_sidebar(array(
'name' => 'HomeAlerts',
'description' => 'Widgets in this area will be shown on the home page',
'before_widget' => '<div class="box">',
'after_widget' => '</div>',
'before_title' => '<h4>',
'after_title' => '</h4>',
));




// Limit Post Word Count
function new_excerpt_length($length) {
	return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');

//Replace Excerpt Link
function gpp_excerpt($text) { 
	return str_replace('[...]', '...', $text); 
	} 
add_filter('the_excerpt', 'gpp_excerpt');

// Register Navigation Menus
register_nav_menus(
	array(
	'primary'=>__('Top Menu'),
	)
);
/// add home link to menu
function home_page_menu_args( $args ) {
$args['show_home'] = true;
return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );

// menu fallback
function default_menu() {
	require_once (TEMPLATEPATH . '/includes/default-menu.php');
}
add_action( 'init', 'create_post_types' );
function create_post_types() {
// Define Post Type For Slider
  register_post_type( 'slides',
    array(
      'labels' => array(
		'name' => _x( 'Slides', 'post type general name' ), // Tip: _x('') is used for localization
		'singular_name' => _x( 'Slide', 'post type singular name' ),
		'add_new' => _x( 'Add New', 'Slide' ),
		'add_new_item' => __( 'Add New Slide' ),
		'edit_item' => __( 'Edit Slide' ),
		'new_item' => __( 'New Slide' ),
		'view_item' => __( 'View Slide' ),
		'search_items' => __( 'Search Slides' ),
		'not_found' =>  __( 'No Slides found' ),
		'not_found_in_trash' => __( 'No Slides found in Trash' ),
		'parent_item_colon' => ''
      ),
      'public' => true,
	  'exclude_from_search' => true,
	  'supports' => array('title','thumbnail'),
    )
  );
}

add_filter('widget_text','execute_php',100);
function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}
add_filter('gform_enable_credit_card_field', '__return_true');




add_action("gform_confirmation", "post_to_trx", 10, 4);

function post_to_trx($confirmation, $form, $lead, $ajax){

if($lead["8"] == 'Credit') {	

	require_once( trailingslashit( get_template_directory() ). '/trx/config.php' );

		$data = '<Detail>';
		$data .= '<TranType>Credit</TranType>';
		$data .= '<TranAction>Sale</TranAction>';
		$data .= '<Amount>'.$lead["5"].'</Amount>';
		$data .= '<CurrencyCode>840</CurrencyCode>';
		$data .= '</Detail>';
		$data .= '<Account>';
		if(!empty($lead["1.3"])){
			$data .= '<FirstName>'.$lead["1.3"].'</FirstName>';
		}if(!empty($lead["1.6"])){
			$data .= '<LastName>'.$lead["1.6"].'</LastName>';
		}
		$data .= '<Pan>'.str_replace("-","",$lead["9"]).'</Pan>';
		$data .= '<Expiration>'.$lead["10"].$lead["11"].'</Expiration>';
	
		if(!empty($lead["13"])){
			$data .= '<Cvv>'.$lead["13"].'</Cvv>';
		}if(!empty($lead["12.5"])){
			$data .= '<Postal>'.$lead["12.5"].'</Postal>';
		}if(!empty($lead["12.1"])){
			$data .= '<Address>'.$lead["12.1"].'</Address>';
		}
		$data .= '</Account>';
		$data .= '<IndustryData>';
		$data .= '<Industry>CardNotPresent</Industry>';
		$data .= '<Eci>7</Eci>';
		$data .= '</IndustryData>';
//echo $data;
		$response=  getResponse($data);

		if(strpos(strip_tags($response),'RESPONSECODE = 00')) {

return "Thank you. Your payment has been received. You will receive an email confirmation shortly.";
} else {
return "We're sorry, your payment was not approved. Please <a href=\"#\" onclick=\"window.history.go(-1); return false;\"> go back and try again</a>.";
}



 } else {

	return "Thank you for your submission. You will receive an email confirmation.";
}


	
}


add_action('gform_after_submission_8', 'clear_cc', 20, 2);
function clear_cc($entry, $form){
       
        GFFormsModel::update_lead_field_value($form, $entry,'','','9','');
 GFFormsModel::update_lead_field_value($form, $entry,'','','10','');
 GFFormsModel::update_lead_field_value($form, $entry,'','','11','');
 GFFormsModel::update_lead_field_value($form, $entry,'','','13','');
}
add_action("gform_after_submission_8", "set_post_content", 10, 2);
 function set_post_content($entry, $form){
 //Gravity Forms has validated the data
 //Our Custom Form Submitted via PHP will go here
 
 // Lets get the IDs of the relevant fields and prepare an email message
 $message = print_r($entry, true);
 
 // In case any of our lines are larger than 70 characters, we should use wordwrap()
 $message = wordwrap($message, 70);
 
 // Send
 //mail('sarah@abacusdesign.net', 'Getting the Gravity Form Field IDs', $message);
 }
?>