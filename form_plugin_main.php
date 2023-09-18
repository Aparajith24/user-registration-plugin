<?php
 /*
  * Plugin Name: User Registration Form
  * Plugin URI:  
  * Description: Plugin to show a user registration form which is then store into the Database and redirects to the datatable
  * Version:     1.0
  * Author:      Aparajith L
  * Author URI:  
*/
function include_form(){
  include_once("registration.php");
}

function get_form() {
  ob_start();
  include_form();
  return ob_get_clean();
}

add_shortcode("get-form","get_form");
?>
