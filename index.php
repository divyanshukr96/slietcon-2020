<?php
/**
 * Created by PhpStorm.
 * User: DIVYANSHU
 * Date: 07-11-2018
 * Time: 02:53
 */

session_start();
require_once __DIR__ . '/Config.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = preg_replace('/\/{2,}/', '/', rtrim($url, '/'));

if ((substr_count($url, '/') - substr_count($uri, '/')) > 1) {
    header("Location:{$uri}");
}

$uri = urldecode(strtolower($uri));

$route = explode('/', trim($uri, '/'));

$title = TITLE;
switch ($uri) {
    case '/':
    case '':
        require_once TEMPLATE_PATH . '/home.php';
        break;
    case '/sliet-longowal':
//        $title = TITLE.' | Conference Track';
        require_once TEMPLATE_PATH . '/about/sliet.php';
        break;
    case '/about':
        $title = TITLE . ' | About';
        require_once TEMPLATE_PATH . '/about/slietcon.php';
        break;

    default:
        switch ($route[0]) {
            case "acfbt":
                require_once ROUTE_PATH . '/acfbt.php';
                break;
            case "aisct":
                require_once ROUTE_PATH . '/aisct.php';
                break;
            case "ame":
                require_once ROUTE_PATH . '/ame.php';
                break;
            default:
                break;
        }
}