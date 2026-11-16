<?php
/**
 * Remove LogiHub data on uninstall.
 *
 * @package Logiprof_Espace_Enseignants
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

delete_option( 'logiprof_ee_items' );
delete_option( 'logiprof_ee_settings' );
delete_option( 'logiprof_ee_menus' );
delete_option( 'logiprof_ee_seeded' );
delete_option( 'logihub_version' );
