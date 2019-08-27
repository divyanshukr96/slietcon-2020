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
$title = TITLE;
switch ($uri) {
    case '/':
    case '':
        require_once TEMPLATE_PATH . '/home.php';
        break;
    case '/conference-tracks':
        $title = TITLE . ' | Conference Track';
        require_once TEMPLATE_PATH . '/conference_track.php';
        break;
    case '/sliet-longowal':
//        $title = TITLE.' | Conference Track';
        require_once TEMPLATE_PATH . '/about/sliet.php';
        break;
    case '/about':
//        $title = TITLE.' | Conference Track';
        require_once TEMPLATE_PATH . '/about/slietcon.php';
        break;
    case '/call-for-paper':
//        $title = TITLE.' | Conference Track';
        require_once TEMPLATE_PATH . '/call-for-paper.php';
        break;
    case '/about/chemical-department':
        $title = 'Department of Chemical Engineering';
        require_once TEMPLATE_PATH . '/about/chemical.php';
        break;
    case '/about/computer-department':
        $title = 'Department of Computer Science & Engineering';
        require_once TEMPLATE_PATH . '/about/computer.php';
        break;
    case '/about/electonics-communication-department':
        $title = 'Department of Electronics and Communication';
        require_once TEMPLATE_PATH . '/about/electoronics.php';
        break;
    case '/about/food-department':
        $title = 'Department of Food Engineering and Technology';
        require_once TEMPLATE_PATH . '/about/food.php';
        break;
    case '/about/electrical-instrumentation-department':
        $title = 'Department of Electrical and Instrumentation Engineering';
        require_once TEMPLATE_PATH . '/about/instrumentataion.php';
        break;

    case '/program-schedule':
        $title = TITLE . ' | Program Schedule';
        require_once TEMPLATE_PATH . '/program-schedule.php';
        break;

    case '/venue':
        $title = TITLE . ' | Venue';
        require_once TEMPLATE_PATH . '/venue.php';
        break;

    case '/registration':
        $title = TITLE . ' | Registration';
        require_once TEMPLATE_PATH . '/registration.php';
        break;

    case '/committee':
        $title = TITLE . ' | Committee';
        require_once TEMPLATE_PATH . '/committee.php';
        break;

    case '/sponsorship':
        $title = TITLE . ' | Sponsorship';
        require_once TEMPLATE_PATH . '/sponsorship.php';
        break;

    case '/dates':
        $title = TITLE . ' | Important Dates';
        require_once TEMPLATE_PATH . '/dates.php';
        break;

    case '/brochure':
        $title = TITLE . ' | Brochure';
        require_once TEMPLATE_PATH . '/brochure.php';
        break;

    case '/sliet-at-a-glance':
        $title = TITLE . ' | SLIET at a Glance';
        require_once TEMPLATE_PATH . '/sliet_glance.php';
        break;

    case '/accommodation':
        $title = TITLE . ' | Accommodation ';
        require_once TEMPLATE_PATH . '/accommodation.php';
        break;

    case '/publication':
        $title = TITLE . ' | Publication';
        require_once TEMPLATE_PATH . '/publication.php';
        break;
    case '/contact-us':
        $title = TITLE . ' | Contact Us';
        require_once TEMPLATE_PATH . '/contact.php';
        break;
    case '/paper-submission':
        $title = TITLE . ' | Paper Submission';
        require_once TEMPLATE_PATH . '/paper-submission.php';
        break;
    case '/instructions-for-oral-paper-poster-presentation':
    case '/instructions':
        $title = TITLE . ' | Instructions for Oral Paper and Poster Presentation';
        require_once TEMPLATE_PATH . '/instruction-oral-paper.php';
        break;


    case '/register':
        $title = TITLE . ' | Contact Us';
        require_once TEMPLATE_PATH . '/register.php';
        break;
}