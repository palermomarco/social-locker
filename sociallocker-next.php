<?php
/**
Plugin Name: OnePress Social Locker
Plugin URI: http://onepress-media.com/plugin/social-locker-for-wordpress/get
Description: Social Locker is a set of social buttons and a locker in one bottle. <strong>Give people a reason</strong> why they need to click your social buttons. Ask people to “pay” with a Like/Tweet/+1 to get access to your content, to get discount, to download, to watch a video, to view a funny picture or so. And it will help you to get more likes/tweets/+1s, traffic and customers!
Author: OnePress
Version: 2.1.1
Author URI: http://onepress-media.com/portfolio
*/



// Loads code created via Factory ("items" folder).

require('factory/core/start.php');
$socialLocker = factory_fr102_create_plugin(__FILE__, array(
    'name'      => 'sociallocker-next',
    'version'   => '2.1.1',
    'assembly'  => 'free',
    'api'       => 'http://server.onepress-media.com/api/1.0/'
));

$socialLocker->load('forms');
$socialLocker->load('onepress');

// Loads rest of code that is created manually via the standard wordpress plugin api.

define('SOCIALLOCKER_PLUGIN_ROOT', dirname(__FILE__));
define('SOCIALLOCKER_PLUGIN_URL', plugins_url( null, __FILE__ ));

if ( is_admin() ) include( SOCIALLOCKER_PLUGIN_ROOT . '/admin/init.php' );
include(SOCIALLOCKER_PLUGIN_ROOT . '/addons/either/either-widget.php');