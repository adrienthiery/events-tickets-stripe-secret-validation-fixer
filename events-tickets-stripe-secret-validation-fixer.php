<?php

/*
 * Plugin Name: EVENTS TICKETS STRIPE SECRET VALIDATION FIXER
 */

function events_stripe_config_fixer_settings_page() {
	include dirname( __FILE__ ) . '/events-stripe-config-fixer-settings-page.php';
}

define( 'TEC_TC_STRIPE_SIGNING_SECRET', get_option('TEC_TC_STRIPE_SIGNING_SECRET'));

function events_stripe_config_fixer_settings_menu() {
	add_menu_page("Events stripe config fixer", "Events stripe config fixer", "manage_options", "events_stripe_config_fixer_options", "events_stripe_config_fixer_settings_page", "dashicons-admin-tools", 96);
}

add_action( 'admin_menu', 'events_stripe_config_fixer_settings_menu');
