<?php
/** 
* Plugin Name:  Meetupgin
* Plugin URI:   https://www.instagram.com/wpmeetupccs/
* Description:  Plugin de demostracion WP Meetup
* Version:      1.1.1
* Author:       Jose Miguel Urdaneta
* Author URI:   https://www.instagram.com/lavidafreelance/
* Text  Domain: meetupgin
* License:      GNU General Public License v2
*/














add_action('wp_footer', 'agregar_al_footer');

function agregar_al_footer(){
    echo '
    <div id="meetupgin"> 
        <a href="https://www.meetup.com/es-ES/members/182830398/" target="_blank">
        <!-- <img src="';
        echo plugin_dir_url( __FILE__ );
        echo 'img/meetup-logo.png">-->
        Consigue tu Repuesto 
        </a>
    </div>';
}





function meetup_css() {
    wp_register_style( 'estilosmeetup',  plugin_dir_url( __FILE__ ) . 'estilos.css', array(), null, 'all' );
    
    wp_enqueue_style( 'estilosmeetup' );

}
add_action( 'wp_enqueue_scripts', 'meetup_css' );












//https://codex.wordpress.org/Dashboard_Widgets_API


/**
 * Agregar widget al dashboard.
 *
 * 
 */
function example_add_dashboard_widgets() {

	wp_add_dashboard_widget(
                 'josemisoft_dashboard_widget',         // Widget slug.
                 'JosemiSoft',         // Title.
                 'example_dashboard_widget_function' // Display function.
        );	
}
add_action( 'wp_dashboard_setup', 'example_add_dashboard_widgets' );



/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function example_dashboard_widget_function() {

	// Display whatever it is you want to show.
    echo "Hola estimado cliente, si tiene algun problema, contacte por whatsapp a <a href='#'>+4146844249</a> <br>
    Recuerde realizar el pago antes de ";
    echo date("Y/m/d");
}




function admin_style() {
    wp_enqueue_style('admin-styles', plugin_dir_url( __FILE__ ) . 'admin.css');
  }
  add_action('admin_enqueue_scripts', 'admin_style');

  /**
   * 
   * date("Y/m/d");
   *
*/

  function meetupcode( $atts ){
	return "Hola estimado cliente, si tiene algun problema, contacte";
}
add_shortcode( 'meetupcode', 'meetupcode' );
   
?>