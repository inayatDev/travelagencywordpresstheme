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
    $screens = array( 'post', 'page', 'flight' );
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

function add_theme_menu_item()
{
        add_menu_page("Theme Setting", "Theme Setting", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}
add_action("admin_menu", "add_theme_menu_item");
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
        <input type="text" name="website_title" id="website_title" value="<?php echo get_option('website_title'); ?>" />
    <?php
}
function display_slogan_element()
{  ?>
        <input type="text" name="website_slogan" id="website_slogan" value="<?php echo get_option('website_slogan'); ?>" />
    <?php
}
function destination()
{ ?>
        <input type="text" name="destination" id="destination" value="<?php echo get_option('destination'); ?>" />
    <?php
}
function destination_description()
{  ?>
     <textarea name="destination_description" id="destination_description" rows="4" cols="50"><?php echo get_option('destination_description'); ?></textarea>
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
        <input type="file" name="logo"/> 
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
    ?>
   <section class="about">
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


add_action( 'add_meta_boxes', 'global_email_meta_box_new' );
function global_email_meta_box_callback( $post ) {
    wp_nonce_field( 'global_notice_nonce', 'global_notice_nonce' );
    $value = get_post_meta( $post->ID, '_global_notice', true ); ?>
<input type = "text" style="width:100%" id="global_notice" name="global_notice"  value = <?php echo esc_attr( $value );?> <?php 
}

function first_firstname_meta_box_callback( $post ) {
    // Add a nonce field so we can check for it later.
    wp_nonce_field( 'first_firstname_nonce', 'first_firstname_nonce' );
    $value_firstname = get_post_meta( $post->ID, '_first_firstname', true); ?>
   <?php echo "testing name is : ".$value_firstname; ?>
<input type = "text" style="width:100%" id="first_firstname" name="first_firstname" value = <?php echo esc_attr( $value_firstname );?> 
<?php 
}

function global_lastname_meta_box_callback( $post ) {
    wp_nonce_field( 'lastname_notice_nonce', 'lastname_notice_nonce' );
    $lastname = get_post_meta( $post->ID, '_lastname_notice', true ); ?>
    <?php echo $lastname ; ?>
<input type = "text" style="width:100%" id="last_notice" name="last_notice"  value = <?php echo esc_attr( $lastname );?> <?php 
}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id
 */
function save_global_notice_meta_box_data_new( $post_id ) {
    // Check if our nonce is set.
    if ( ! isset( $_POST['first_firstname_nonce'] ) ) {
        return;
    }
    // Verify that the nonce is valid.
    if ( ! wp_verify_nonce( $_POST['first_firstname_nonce'], 'first_firstname_nonce' ) ) {
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
    if ( ! isset( $_POST['first_firstname_nonce'] ) ) {
        return;
    }
    // Sanitize user input.
    $my_data = sanitize_text_field( $_POST['first_firstname_nonce'] );

    // Update the meta field in the database.
    update_post_meta( $post_id, '_first_firstname', $my_data );
}
add_action( 'save_post', 'save_global_notice_meta_box_data_new' );
function global_notice_before_post( $content ) {
    global $post;
    // retrieve the global notice for the current post
    $global_notice = esc_attr( get_post_meta( $post->ID, '_first_firstname', true ) );
    $notice = "<div class='sp_global_notice'>$global_notice</div>";
    return $notice . $content;
}
add_filter( 'the_content', 'global_notice_before_post' );