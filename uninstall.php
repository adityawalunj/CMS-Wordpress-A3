<?php
/**
 * IncreaseUploadFileSizeLimit Uninstall
 *
 * Uninstalling IncreaseUploadFileSizeLimit deletes all options.
 *
 * @package IncreaseUploadFileSizeLimit
 * @since 1.0.0
 */

/** Check if we are uninstalling. */
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

/** Delete options. */
delete_option( 'aw_max_upload_size' );
delete_option( 'aw_chunk_size' );
delete_option( 'aw_max_retries' );