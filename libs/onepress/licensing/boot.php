<?php
/**
 * OnePress Licensing
 * 
 * @author Paul Kashtanoff <paul@byonepress.com>
 * @copyright (c) 2013, OnePress Ltd
 * 
 * @package core 
 * @since 1.0.0
 */

// Checks if the one is already loaded.
// We prevent to load the same version of the module twice.
if (defined('ONP_LICENSING_300_LOADED')) return;
define('ONP_LICENSING_300_LOADED', true);

// Absolute path and URL to the files and resources of the module.
define('ONP_LICENSING_300_DIR', dirname(__FILE__));
define('ONP_LICENSING_300_URL', plugins_url(null,  __FILE__ ));

include(ONP_LICENSING_300_DIR. '/licensing.php');
if ( !is_admin() ) return;

include(ONP_LICENSING_300_DIR. '/includes/activator.class.php');
    include(ONP_LICENSING_300_DIR. '/includes/license-manager.class.php');

