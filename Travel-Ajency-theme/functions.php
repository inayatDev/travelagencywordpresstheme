<?php 
function tripz_travel_agency() {
   include_once 'inc/all_scripts.php';
}
add_action( 'wp_enqueue_scripts', 'tripz_travel_agency' );
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function create_destinations_cpt() {
  include_once 'inc/destination.php';
}
add_action( 'init', 'create_destinations_cpt', 0 );
add_theme_support( 'post-thumbnails' );
function create_flight_cpt() {
include_once 'inc/flight.php';
}
add_action( 'init', 'create_flight_cpt', 0 );
function global_notice_meta_box() {
    $screens = array( 'post', 'flight' );
    foreach ( $screens as $screen ) {
        add_meta_box(
            'global-notice',
            __( 'Flight Type', 'sitepoint' ),
            'global_notice_meta_box_callback',
            $screen
        );
    }
}
add_action( 'add_meta_boxes', 'global_notice_meta_box' );
function global_notice_meta_box_callback( $post ) {
    // Add a nonce field so we can check for it later.
    wp_nonce_field( 'global_notice_nonce', 'global_notice_nonce' );
    $value = get_post_meta( $post->ID, '_global_notice', true );
    echo '<input type = "text"  id="global_notice" name="global_notice" value="'.esc_attr( $value ).'">' ;
}
function save_global_notice_meta_box_data( $post_id ) {
    // Check if our nonce is set.
    if ( ! isset( $_POST['global_notice_nonce'] ) ) {
        return;
    }
    // Verify that the nonce is valid.
    if ( ! wp_verify_nonce( $_POST['global_notice_nonce'], 'global_notice_nonce' ) ) {
        return;
    }
    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    // Check the user's permissions.
    if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_page', $post_id ) ) {
            return;
        }
    }
    else {
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }
    /* OK, it's safe for us to save the data now. */
    // Make sure that it is set.
    if ( ! isset( $_POST['global_notice'] ) ) {
        return;
    }
    // Sanitize user input.
    $my_data = sanitize_text_field( $_POST['global_notice'] );
    // Update the meta field in the database.
    update_post_meta( $post_id, '_global_notice', $my_data );
}
add_action( 'save_post', 'save_global_notice_meta_box_data' );
// Register Custom Post Type Hotel
function create_hotel_cpt() {
   include_once 'inc/hotel_cpt.php';
}
add_action( 'init', 'create_hotel_cpt', 0 );
// theme option page
 
// Register Custom Post Type Trip Package
function create_trippackage_cpt() {
   include_once('inc/trip-pakages.php');
}
add_action( 'init', 'create_trippackage_cpt', 0 );

// function add_theme_menu_item()
// {
//         add_menu_page("Theme Setting", "Theme Setting", "manage_options", "theme-panel", "theme_settings_page", null, 99);
 //}
//add_action("admin_menu", "add_theme_menu_item");
function theme_settings_page()
{
    ?>
        <div class="wrap">
        <h1>Theme Setting</h1>
        <form method="post" action="options.php" enctype="multipart/form-data">
            <?php
                settings_fields("section");
                do_settings_sections("theme-options");      
                submit_button(); 
            ?>          
        </form>
        </div>
    <?php
}
function display_website_title()
{  ?>
        <input type="text" name="website_title" id="website_title" style = "width :700px" value="<?php echo get_option('website_title'); ?>" />
    <?php
}
function display_slogan_element()
{  ?>
        <input type="text" name="website_slogan" id="website_slogan" style = "width :700px" value="<?php echo get_option('website_slogan'); ?>" />
    <?php
}
function destination()
{ ?>
        <input type="text" name="destination" id="destination" style = "width :700px" value="<?php echo get_option('destination'); ?>" />
    <?php
}
function destination_description()
{  ?>
     <textarea name="destination_description" id="destination_description" style = "width :700px" rows="4" cols="50"><?php echo get_option('destination_description'); ?></textarea>
    <?php
}
function display_theme_panel_fields()
{
    add_settings_section("section", "Travel Agency Settings", null, "theme-options");
    add_settings_field("website_title", "Website Title", "display_website_title", "theme-options", "section");
    add_settings_field("website_slogan", "Slogan", "display_slogan_element", "theme-options", "section");
    add_settings_field("destination", "Destination Title", "destination", "theme-options", "section");
    add_settings_field("destination_description" , "Destination Description" ,"destination_description" , "theme-options", "section");
    register_setting("section", "website_title");
    register_setting("section", "website_slogan");
    register_setting("section", "destination");
    register_setting("section", "destination_description");
}
add_action("admin_init", "display_theme_panel_fields");
function logo_display()
{ ?>   
        <input type="file" style="color:transparent" name="logo"/> 
        <img src= <?php echo get_option('logo'); ?>
   <?php
}
function handle_logo_upload()
{
    if(!function_exists('wp_handle_upload')){
        require_once(ABSPATH.'wp-admin/includes/file.php');
    }
    if(!empty($_FILES["logo"]["tmp_name"]))
    {
        $urls = wp_handle_upload($_FILES["logo"], array('test_form' => FALSE));
        $temp = $urls["url"];
        return $temp;   
    }     
    return $option;
}
function display_theme_panel_fields_new()
{
    add_settings_section("section", "Travel Agency Settings", null, "theme-options" );
    add_settings_field("logo", "Logo", "logo_display", "theme-options", "section");  
    register_setting("section", "logo", "handle_logo_upload");
}
add_action("admin_init", "display_theme_panel_fields_new");
add_action('widgets_init', 'wptutorial_register_sidebar');
function wptutorial_register_sidebar() {
    register_sidebar([
		'name' => __('Sidebar Widget Area', 'wptutorial'),
		'id' => 'sidebar-area'
    ]);
    register_sidebar([
		'name' => __('Footer Widget Area', 'wptutorial'),
		'id' => 'footer-area'
    ]);
}
// Register Custom Post Type testimonial
function create_testimonial_cpt() {
 include_once('inc/testimonial_cpt.php');
}
add_action( 'init', 'create_testimonial_cpt', 0 );
function header_section(){
    $image = get_post_meta($post->ID, 'aw_custom_image', true);
    ?>
   <section class="about" style="background-image: url(<?php echo $image ; ?>)">
        <div class="about_text">
            <h2><?php wp_title(); ?></h2>
            <p>Lorem ipsum dolorabore et dolor rebum. Stet clita kasd guber</p>
        </div>
    </section>
    <?php 
}
add_shortcode('view_section' , 'header_section');
function footer_widgets_items(){
register_sidebar( array(
'name' => 'Footer Column 1',
'id' => 'footer1',
'before_widget' => '<div class="widget-item">',
'after_widget' => '</div>',
'before_title' => '<h4 class="widget_heading">',
'after_title' => '</h4>'
));register_sidebar( array(
'name' => 'Footer Column 2',
'id' => 'footer2',
'before_widget' => '<div class="widget-item">',
'after_widget' => '</div>',
'before_title' => '<h4 class="widget_heading">',
'after_title' => '</h4>'
));
register_sidebar( array(
'name' => 'Footer Column 3',
'id' => 'footer3',
'before_widget' => '<div class="widget-item">',
'after_widget' => '</div>',
'before_title' => '<h4 class="widget_heading">',
'after_title' => '</h4>'
));
}
add_action('widgets_init', 'footer_widgets_items');
function global_email_meta_box_new() {
    $screens = array('trippackage' );
    foreach ( $screens as $screen ) {
        add_meta_box(
            'global-email',
            __( 'Email', 'sitepoint' ),
            'global_email_meta_box_callback',
            
        );
        add_meta_box(
            'first-firstname',
            __( 'firstname', 'sitepoint' ),
            'first_firstname_meta_box_callback',
            
        );
         add_meta_box(
            'global-lastname',
            __( 'lastname', 'sitepoint' ),
            'global_lastname_meta_box_callback',
            $screen
        );
    }
}

 function create_db_for_booking()
 {
global $wpdb;
global $jal_db_version;
$table_name = $wpdb->prefix . 'travel_agency_booking';
$charset_collate = $wpdb->get_charset_collate();
$sql = "CREATE TABLE $table_name (
  id mediumint(9) NOT NULL AUTO_INCREMENT,
  email text NOT NULL,
  name tinytext NOT NULL,
  arrivaldate text NOT NULL,
  country text NOT NULL,
  phone text Not NULL,
  adults text NOT NULL,
  children text NOT NULL,
  message text NOT NULL,
  PRIMARY KEY  (id)
) $charset_collate;";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );
}
 
 add_action('init' , 'create_db_for_booking');

 function insert_in_db_booking(){
  global $wpdb;
     if ( isset( $_POST['submit'] ) ){
        $email = $_POST['email'];
        $name  = $_POST['fname'];
        $lname = $_POST['lname'];
        $fullname = $name." ".$lname;
        $arrivaldate = $_POST['arrivaldate'];
        $country  = $_POST['country'];
        $phonenumber = $_POST['phonenumber'];
        $adults = $_POST['adults'];
        $children = $_POST['children'];
        $subject  = $_POST['subject'];
        if($email == '' || $name == '' ||  $lname == '' ){
            echo '<script>alert("please insert the values")</script>';
        }
        else{
  $result = $wpdb->insert( 'wp_travel_agency_booking', array(
    'email' => $email,
    'name' => $fullname,
    'arrivaldate' =>  $arrivaldate,
    'country' => $country,
    'phone'=> $phonenumber,
    'adults' => $adults,
    'children' => $children,
    'message'  => $subject ));
 if( FALSE === $result )
    {
    echo( "Failed!" );
    } 
else {
    echo( "<script>alert('Booking Completed Succesfully')</script>" );
    }
}
 }

 }
 add_action('init' , 'insert_in_db_booking');

 function add_theme_menu_item_new_1()
{
        add_menu_page("Travel Agency", "Travel Agency", "manage_options", "theme-page", "theme_settings_page_new_1","dashicons-airplane
", null, 99);
}
add_action("admin_menu", "add_theme_menu_item_new_1");
function theme_settings_page_new_1(){
 ?>
 <div class = "wrap">
    <h2>All Settings</h2>
</div>
<?php
}

function setting_page_travel_agency() {
  add_submenu_page('theme-page','Settings', 'Settings', 'manage_options', 'theme-panel', 'theme_settings_page'); 

}
add_action('admin_menu', 'setting_page_travel_agency');

function setting_page_select_bookings() {
  add_menu_page('Bookings', 'Bookings', 'manage_options', 'theme-booking', 'booking_cal_back'); 

}
add_action('admin_menu', 'setting_page_select_bookings');
function booking_cal_back(){
    ?>
    <div class = "wrap">
        <h3>All Booking Recieved</h3>
    <table style = "border: 1px solid black; width:600px" >
        <tr>
            <td>S.No</td>
            <td>Email </td>
            <td>Name</td>
            <td>Arival Date</td>
            <td>Country</td>
            <td>Phone</td>
            <td>Adult</td>
            <td>Childern</td>
            <td>Message</td>
</tr>
    <?php
    global $wpdb;
    $wpdb_prefix = $wpdb->prefix;
    $result = $wpdb->get_results(sprintf("SELECT email, name FROM  wp_travel_agency_booking"));
    foreach($result as $res){
        ?>
    <tr>
       <td><?php echo $res->id; ?></td> 
      <td><?php echo $res->email; ?></td>
       <td><?php echo $res->name; ?></td>
        <?php
    // echo $res->email;
    }
    ?>
</tr>
</table>
    </div>
    <?php

}

// function fetch_booking_db(){

// }
// }
// add_action('init' , 'fetch_booking_db');

function custom_search_form( $form, $value = "Search", $post_type = 'post' ) {
    $form_value = (isset($value)) ? $value : attribute_escape(apply_filters('the_search_query', get_search_query()));
    $form = '<form method="get" id="searchform" action="' . get_option('home') . '/" >
    <div>
        <input type="hidden" name="post_type" value="'.$post_type.'" />
        <input type="text" value="' . $form_value . '" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="'.attribute_escape(__('Search')).'" />
    </div>
    </form>';
    return $form;
}
add_shortcode('search_form_posts' , 'custom_search_form');



function aw_custom_meta_boxes( $post_type, $post ) {
    add_meta_box(
        'aw-meta-box',
        __( 'Header Image' ),
        'render_aw_meta_box',
        array('post', 'page'), //post types here
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'aw_custom_meta_boxes', 10, 2 );
  
function render_aw_meta_box($post) {
    $image = get_post_meta($post->ID, 'aw_custom_image', true);
    ?>
    <table>
        <tr>
            <td><a href="#" class="aw_upload_image_button button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="aw_custom_image" id="aw_custom_image" style = "width :550px"  value="<?php echo $image; ?>" /></td>
        </tr>
    </table>
    <?php
}
function aw_include_script() {
  
    if ( ! did_action( 'wp_enqueue_media' ) ) {
        wp_enqueue_media();
    }
  
    wp_enqueue_script( 'awscript', get_stylesheet_directory_uri() . '/js/awscript.js', array('jquery'), null, false );
}
add_action( 'admin_enqueue_scripts', 'aw_include_script' );
function aw_save_postdata($post_id)
{
    if (array_key_exists('aw_custom_image', $_POST)) {
        update_post_meta(
            $post_id,
            'aw_custom_image',
            $_POST['aw_custom_image']
        );
    }
}
add_action('save_post', 'aw_save_postdata');
