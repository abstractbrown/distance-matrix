<?php
/**
* Plugin Name: Distance Matrix API
* Plugin URI: https://www.yourwebsiteurl.com/
* Description: Plugin to calculate distance between 2 points.
* Version: 1.0
* Author: Aaron Brown
* Author URI: http://yourwebsiteurl.com/
**/

// add_action("admin_post_contact_form", "prefix_send_email_to_admin");

// add_action("wp_head", "distance_matrix");

// require_once plugin_dir_path(__FILE__) . 'distance_matrix_api.php';
// function load_custom_wp_admin_style( $hook ) {
// 	wp_die( $hook );
// }
// add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );
// $plugin_dir = WP_PLUGIN_DIR . 'wp-content/plugins/distance_matrix/';
// $plugin_dir_path = dirname(__FILE__);

// echo $plugin_dir_path = dirname(__FILE__);

// echo $pagenow;

// if( $pagenow == 'my-plugin.php' ) {
//     wp_enqueue_style('my-style', 'URL-HERE' );    
// }
?>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous">
</script>
<?php

function add_plugin_scripts() {
   
    wp_enqueue_style( 'distance_matrix', plugins_url('includes/css/distance_matrix.css', __FILE__ ), array(), '1.1', 'all');
    wp_enqueue_style( 'distance_matrix', plugins_url('includes/css/dForm.css', __FILE__ ), array(), '1.1', 'all');

   
    wp_enqueue_script( 'distance_matrix', plugins_url('includes/js/distance_matrix.js', __FILE__ ), array ( 'jquery' ), 1.1, true);
    // wp_enqueue_script( 'distance_matrix', plugins_url('includes/js/form.js', __FILE__ ));
    // wp_enqueue_script( 'distance_matrix', plugins_url('includes/js/make-select.js', __FILE__ ));
    // wp_enqueue_script( 'distance_matrix', plugins_url('includes/js/model-select.js', __FILE__ ));
    // wp_enqueue_script( 'distance_matrix', plugins_url('includes/js/vehicle-select.js', __FILE__ ));
    // wp_enqueue_script( 'distance_matrix', plugins_url('includes/js/year-select.js', __FILE__ ));

   
    //   if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    //     wp_enqueue_script( 'comment-reply' );
    //   }
  }

add_action( 'wp_enqueue_scripts', 'add_plugin_scripts' );
    
require_once plugin_dir_path(__FILE__) . 'distance_matrix_form.php';
require_once plugin_dir_path(__FILE__) . './admin/dm-page.php';
require_once plugin_dir_path(__FILE__) . './admin/dm_functions.php';

?>
