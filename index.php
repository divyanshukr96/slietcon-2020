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
    case '/important-dates':
        $title = TITLE . ' | Important Dates';
        require_once TEMPLATE_PATH . '/dates.php';
        break;
    case '/venue':
        $title = TITLE . ' | Venue';
        require_once TEMPLATE_PATH . '/venue.php';
        break;
    case '/sponsorship':
        $title = TITLE . ' | Sponsorship & Exhibition';
        require_once TEMPLATE_PATH . '/sponsorship.php';
        break;
    case '/accommodation':
        $title = TITLE . ' | Accommodation';
        require_once TEMPLATE_PATH . '/accommodation.php';
        break;
    case '/glimpse-of-sliet':
        $title = TITLE . ' | Glimpse of SLIET';
        require_once TEMPLATE_PATH . '/glimpse-of-sliet.php';
        break;
    case '/places-to-visit':
        $title = TITLE . ' | Glimpse of SLIET';
        require_once TEMPLATE_PATH . '/places-to-visit.php';
        break;
    case '/locate-us':
        $title = TITLE . ' | Locate Us';
        require_once TEMPLATE_PATH . '/locate-us.php';
        break;

    case '/about/chemical-department':
        $title = 'Department of Chemical Engineering';
        require_once TEMPLATE_PATH . '/about/chemical.php';
        break;
    case '/about/computer-department':
        $title = 'Department of Computer Science & Engineering';
        require_once TEMPLATE_PATH . '/about/computer.php';
        break;
    case '/about/food-department':
        $title = 'Department of Food Engineering and Technology';
        require_once TEMPLATE_PATH . '/about/food.php';
        break;
    case '/about/mechanical-department':
        $title = 'Department of Mechanical Engineering';
        require_once TEMPLATE_PATH . '/about/mechanical.php';
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
            case "2019":
                require_once ROUTE_PATH . '/2019.php';
                break;
            default:
                break;
        }
}

require_once TEMPLATE_PATH . '/notification.php';