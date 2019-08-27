<?php
/**
 * Created by PhpStorm.
 * User: DIVYANSHU
 * Date: 07-11-2018
 * Time: 03:11
 */

$TITLE = "SLIET-I-CON - 2020";
$DOMAIN = "slietcon.org";
$CONTACT = '8054527739';
$EMAIL = 'care@atcindiatower.in';

$FACEBOOK = '#facebook.com';
$TWITTER = '#@twitter';
$YOUTUBE = '#youtube.com';
$LINKEDIN = '#@linkdein';


defined("PRODUCTION") or define("PRODUCTION", false); // set true for production mode
defined("ERROR_REPORTING") or define("ERROR_REPORTING", -1); // set -1 to report error

//defined("DOMAIN") or define("DOMAIN", $DOMAIN); // Domain name
defined("BASE_PATH") or define("BASE_PATH", realpath(dirname(__FILE__)));
defined("TEMPLATE_PATH") or define("TEMPLATE_PATH", BASE_PATH . '/view');
//defined("CONFIG_PATH") or define("CONFIG_PATH", BASE_PATH . '/Config');
//defined("RESOURCE_PATH") or define("RESOURCE_PATH", BASE_PATH . '/Resources');
defined("ASSETS_PATH") or define("ASSETS_PATH", BASE_PATH . '/assets');
//defined("VENDOR_PATH") or define("VENDOR_PATH", BASE_PATH . '/vendor');

defined("CONTACT") or define("CONTACT", $CONTACT);
defined("EMAIL") or define("EMAIL", $EMAIL);
defined("TITLE") or define("TITLE", $TITLE);

error_reporting(ERROR_REPORTING);

date_default_timezone_set('Asia/Kolkata');

//require_once RESOURCE_PATH . '/Errors.php';