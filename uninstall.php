<?php
/**
 * Suppression de LogiHub.
 *
 * Depuis 0.10.2, les menus, tuiles et réglages (options logiprof_ee_*) sont CONSERVÉS : supprimer l'extension
 * pour la réinstaller, ou la remplacer, ne fait plus rien perdre. LogiOne peut aussi les lire.
 * Seuls les réglages techniques des mises à jour sont retirés.
 *
 * @package Logiprof_Espace_Enseignants
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

delete_option( 'logihub_github_token' );
delete_site_option( 'logihub_update_error' );
delete_site_transient( 'logihub_update_release' );
