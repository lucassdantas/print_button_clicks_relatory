<?php 
/**
 * Plugin Name: Print Button Clicks Relatory
 * Description: Add the command print_relatory to wp-cli to print button click relatory
 * Plugin URI:  https://github.com/lucassdantas/wp_lcPrintButtonClicksRelatory
 * Version:     1.0.0
 * Author:      Lucas Dantas
 * Author URI:  linkedin.com/in/lucas-de-sousa-dantas/
 */

 if ( ! defined( 'ABSPATH' ) ||  !function_exists('add_action')) {
	exit;
}
register_activation_hook( __FILE__, 'onActivate' );
function onActivate(){
    if ( 
        is_admin() 
        && current_user_can( 'activate_plugins' ) 
        && !is_plugin_active( 'lc_button_click_register/lc_button_click_register.php' ) 
    ) {
        $error_message = 'Para utilizar este plugin, é necessário ativar o plugin <a href="https://github.com/lucassdantas/wp_lcButtonClickRegister" target="_blank">"lc_button_click_register"</a> <br><a href="' . admin_url( 'plugins.php' ) . '">&laquo; Voltar aos plugins</a>';
        wp_die($error_message);
        return false;
    }
}

if ( class_exists( 'WP_CLI' ) ) {
    WP_CLI::add_command( 'print_button_clicks_relatory', 'print_button_clicks_relatory' );
}
function print_button_clicks_relatory( ) {
    WP_CLI::success('oi');
    
    // global $wpdb;

    // $result = $wpdb->get_results ( "
    //     SELECT * 
    //     FROM  $wpdb->lc_button_clicks
    // " );

    // foreach ( $result as $register )
    // {
    //     WP_CLI::success($register);
    // }
}
