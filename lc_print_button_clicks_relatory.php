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
	if ( ! is_plugin_active( 'lc_button_click_register/lc_button_click_register.php' ) && current_user_can( 'activate_plugins' ) ) {
        wp_die(
            'Para utilizar este plugin, é necessário ativar o plugin "<a href="https://github.com/lucassdantas/wp_lcButtonClickRegister" target="_blank">lc_button_click_register</a>" <br><a href="' 
            .admin_url( 'plugins.php' ) 
            .'">&laquo; Voltar para plugins</a>'
        );
    }
}