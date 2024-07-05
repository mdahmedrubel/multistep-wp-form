<?php

/**
 * @wordpress-plugin
 * Plugin Name: Custom Step Form
 * Description: A simple custom Step form, for multiple steping form
 * Version:     1.0.0
 * Author:      Mr. Developer
 * Author URI:  #
 * Text Domain: custom-step-form
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 */
// Block direct access to file
defined('ABSPATH') or die('Not Authorized!');


// load styles and scripts
function csf_load_plugin_css() {
    $plugin_url = plugin_dir_url(__FILE__);
    wp_enqueue_style('csf-style', $plugin_url . 'inc/style.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'csf_load_plugin_css');

// Enqueue the JavaScript file
function csf_load_plugin_scripts() {
    wp_enqueue_script('csf-script', plugin_dir_url(__FILE__) . 'inc/main.js', array(), '1.0.0', true);
}
// Hook the script enqueue function to 'wp_enqueue_scripts'
add_action('wp_enqueue_scripts', 'csf_load_plugin_scripts');


// Function to output "Hi"
function csf_form_function() {
    // Assuming $plugin_dir is defined as:
    $plugin_dir = plugin_dir_url(__FILE__);
    $html = "";

    // Concatenating the PHP variable in the HTML string
    $html .= '<div class="multiform">' .
        '<div class="container">' .
        '<form id="regForm" action="" method="post">' .
        '<div class="tab active">' .
        '<div class="row g-4 align-items-center">' .
        '<div class="col-lg-8 col-12">' .
        '<div class="thumb-part">' .
        '<img src="' . $plugin_dir . 'inc/img/1.png" alt="thumb">' .
        '<div class="content text-center">' .
        '<span>Step 1 of 4</span>' .
        '<h4>What’s the Occassion?</h4>' .
        '<p>Let us know what you\'re celebrating or the purpose of your trip</p>' .
        '</div>' .
        '</div>' .
        '</div>' .
        '<div class="col-lg-4 col-12">' .
        '<div class="formoption">' .
        '<input placeholder="30" oninput="this.className = \'\'" name="occassion">' .
        '</div>' .
        '</div>' .
        '</div>' .
        '</div>' .
        '<div class="tab">' .
        '<div class="row g-4 align-items-center">' .
        '<div class="col-lg-8 col-12">' .
        '<div class="thumb-part">' .
        '<img src="' . $plugin_dir . 'inc/img/2.jpeg" alt="thumb">' .
        '<div class="content text-center">' .
        '<span>Step 2 of 4</span>' .
        '<h4>Where are you headed?</h4>' .
        '<p>Share your travel destination.</p>' .
        '</div>' .
        '</div>' .
        '</div>' .
        '<div class="col-lg-4 col-12">' .
        '<div class="formoption">' .
        '<input placeholder="50" oninput="this.className = \'\'" name="headed">' .
        '</div>' .
        '</div>' .
        '</div>' .
        '</div>' .
        '<div class="tab">' .
        '<div class="row g-4 align-items-center">' .
        '<div class="col-lg-8 col-12">' .
        '<div class="thumb-part">' .
        '<img src="' . $plugin_dir . 'inc/img/3.png" alt="thumb">' .
        '<div class="content text-center">' .
        '<span>Step 3 of 4</span>' .
        '<h4>When AreYou Traveling?</h4>' .
        '<p>Choose your travel dates and specify the time of you plan to depart on those days.</p>' .
        '</div>' .
        '</div>' .
        '</div>' .
        '<div class="col-lg-4 col-12">' .
        '<div class="formoption">' .
        '<div class="row g-4">' .
        '<div class="col-6">' .
        '<h6>Start Date</h6>' .
        '<input type="date" name="startdate">' .
        '</div>' .
        '<div class="col-6">' .
        '<h6>End Date</h6>' .
        '<input type="date" name="enddate">' .
        '</div>' .
        '<div class="col-6">' .
        '<h6>Departure time</h6>' .
        '<select name="starttime" id="starttime" required>' .
        '<option selected>Please select</option>' .
        '<option value="morning">Morning</option>' .
        '<option value="afternoon">After Noon</option>' .
        '<option value="evining">Evining</option>' .
        '<option value="night">Night</option>' .
        '</select>' .
        '</div>' .
        '<div class="col-6">' .
        '<h6>Departure time</h6>' .
        '<select name="endtime" id="endtime" required>' .
        '<option selected>Please select</option>' .
        '<option value="morning">Morning</option>' .
        '<option value="afternoon">After Noon</option>' .
        '<option value="evining">Evining</option>' .
        '<option value="night">Night</option>' .
        '</select>' .
        '</div>' .
        '</div>' .
        '</div>' .
        '</div>' .
        '</div>' .
        '</div>' .
        '<div class="tab">' .
        '<div class="row g-4 align-items-center">' .
        '<div class="col-lg-8 col-12">' .
        '<div class="thumb-part">' .
        '<img src="' . $plugin_dir . 'inc/img/4.png" alt="thumb">' .
        '<div class="content text-center">' .
        '<span>Step 4 of 4</span>' .
        '<h4>Welcome Message to the Group</h4>' .
        '<p>Write a personalized message to greet and inform your group about the trip.</p>' .
        '</div>' .
        '</div>' .
        '</div>' .
        '<div class="col-lg-4 col-12">' .
        '<div class="formoption">' .
        '<textarea placeholder="150" oninput="this.className = \'\'" name="group"></textarea>' .
        '</div>' .
        '</div>' .
        '</div>' .
        '</div>' .
        '<div class="tabcontorl">' .
        '<div class="row g-4 align-items-center">' .
        '<div class="col-lg-6 col-12"></div>' .
        '<div class="col-lg-6 col-12">' .
        '<div style="overflow:auto;">' .
        '<div class="groub_btn d-flex justify-content-center">' .
        '<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>' .
        '<input type="hidden" name="csf_data_nonce" value="' . wp_create_nonce('csf_data_nonce') . '">' .
        '<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>' .
        '<button type="submit" id="submit">Submit</button>' .
        '</div>' .
        '</div>' .
        '</div>' .
        '</div>' .
        '</div>' .
        '</form>' .
        '</div>' .
        '</div>';

    return $html;
}
// Register the shortcode [say_hi]
function register_csf_form_shortcode() {
    add_shortcode('csf-form', 'csf_form_function');
}
// Hook the shortcode registration to 'init'
add_action('init', 'register_csf_form_shortcode');


function create_travel_form_post_type() {
    register_post_type(
        'travel_form',
        array(
            'labels' => array(
                'name' => __('Travel Forms'),
                'singular_name' => __('Travel Form'),
                'add_new' => __('Add New'),
                'add_new_item' => __('Add New Travel Form'),
                'edit_item' => __('Edit Travel Form'),
                'new_item' => __('New Travel Form'),
                'view_item' => __('View Travel Form'),
                'search_items' => __('Search Travel Forms'),
                'not_found' => __('No Travel Forms found'),
                'not_found_in_trash' => __('No Travel Forms found in Trash'),
                'all_items' => __('All Travel Forms'),
                'archives' => __('Travel Form Archives'),
                'insert_into_item' => __('Insert into travel form'),
                'uploaded_to_this_item' => __('Uploaded to this travel form'),
                'featured_image' => __('Featured Image'),
                'set_featured_image' => __('Set featured image'),
                'remove_featured_image' => __('Remove featured image'),
                'use_featured_image' => __('Use as featured image'),
                'menu_name' => __('Travel Forms'),
                'filter_items_list' => __('Filter travel forms list'),
                'items_list_navigation' => __('Travel forms list navigation'),
                'items_list' => __('Travel forms list'),
            ),
            'public' => true,
            'has_archive' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'show_in_admin_bar' => true,
            'supports' => array('title', 'editor', 'custom-fields'),
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-admin-post',
            'rewrite' => array('slug' => 'travel-form'),
            'query_var' => true,
        )
    );
}
add_action('init', 'create_travel_form_post_type');


//handle the submission
function handle_travel_form_submission() {
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['csf_data_nonce']) && wp_verify_nonce($_POST['csf_data_nonce'], 'csf_data_nonce')) {
        // Get the form data
        $occassion = sanitize_text_field($_POST['occassion']);
        $headed = sanitize_text_field($_POST['headed']);
        $startdate = sanitize_text_field($_POST['startdate']);
        $enddate = sanitize_text_field($_POST['enddate']);
        $starttime = sanitize_text_field($_POST['starttime']);
        $endtime = sanitize_text_field($_POST['endtime']);
        $group = sanitize_textarea_field($_POST['group']);

        // Check if any required field is empty
        if (empty($occassion) || empty($headed) || empty($startdate) || empty($enddate) || empty($starttime) || empty($endtime) || empty($group)) {
            // Redirect back to the form with an error message
            wp_redirect(add_query_arg('error', 'empty_fields', wp_get_referer()));
            exit;
        }

        // Create a new post
        $post_id = wp_insert_post(array(
            'post_title' => 'Travel Form Submission',
            'post_type' => 'travel_form',
            'post_status' => 'publish',
        ));

        // Check if the post was created
        if ($post_id) {
            // Save the custom fields
            update_post_meta($post_id, 'occassion', $occassion);
            update_post_meta($post_id, 'headed', $headed);
            update_post_meta($post_id, 'startdate', $startdate);
            update_post_meta($post_id, 'enddate', $enddate);
            update_post_meta($post_id, 'starttime', $starttime);
            update_post_meta($post_id, 'endtime', $endtime);
            update_post_meta($post_id, 'group', $group);
            wp_redirect(home_url('/admin-dashboard/?post_id=' . $post_id));
            exit;
        }

        // Redirect to a thank you page or display a message
        wp_redirect(home_url('/admin-dashboard/'));
        exit;
    }
}
add_action('init', 'handle_travel_form_submission');

// add shortcode for thankyou page display table
function thank_you_page_shortcode() {
    if (isset($_GET['post_id'])) {
        $post_id = intval($_GET['post_id']);
        if ($post_id) {
            $post = get_post($post_id);
            if ($post && $post->post_type == 'travel_form') {
                ob_start();
?>
                <h2>Thank You for Your Submission</h2>
                <div class="col-full">
                    <div class="csf-message">
                        <h3 class="csf-heading">Welcome Message</h3>
                        <div><strong>Group Message:</strong></div>
                        <p><?php echo esc_html(get_post_meta($post_id, 'group', true)); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="csf-trip-details col-left">
                        <h3 class="csf-heading">Trip Details</h3>
                        <div>
                            <td><strong>Occasion : </strong> <?php echo esc_html(get_post_meta($post_id, 'occassion', true)); ?></td>
                        </div>
                        <div>
                            <td><strong>Destination : </strong><?php echo esc_html(get_post_meta($post_id, 'headed', true)); ?></td>
                        </div>
                        <div>
                            <td><strong>Start Date : </strong><?php echo esc_html(get_post_meta($post_id, 'startdate', true)); ?></td>
                        </div>
                        <div>
                            <td><strong>End Date : </strong><?php echo esc_html(get_post_meta($post_id, 'enddate', true)); ?></td>
                        </div>
                        <div>
                            <td><strong>Start Time : </strong><?php echo esc_html(get_post_meta($post_id, 'starttime', true)); ?></td>
                        </div>
                        <div>
                            <td><strong>End Time: </strong><?php echo esc_html(get_post_meta($post_id, 'endtime', true)); ?></td>
                        </div>
                    </div>
                    <!-- <div class="right">
                        <div>right content</div>
                    </div> -->
                </div>
                <a class="back-to-home" href="<?php echo home_url(); ?>">Back to Home page</a>
<?php
                return ob_get_clean();
            } else {
                return '<p>Invalid post ID or post type.</p>';
            }
        } else {
            return '<p>Invalid post ID.</p>';
        }
    } else {
        return '<p>No post ID provided.</p>';
    }
}
add_shortcode('thank_you_page', 'thank_you_page_shortcode');

// template for view the submission 
function travel_form_template($template) {
    if (is_singular('travel_form')) {
        // Check if a custom template exists in the theme directory
        $theme_template = locate_template('single-travel_form.php');
        if ($theme_template) {
            return $theme_template;
        } else {
            // Use the custom template from the plugin directory
            return plugin_dir_path(__FILE__) . 'templates/single-travel_form.php';
        }
    }
    return $template;
}
add_filter('single_template', 'travel_form_template');
