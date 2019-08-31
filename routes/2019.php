<?php
/**
 * Created by PhpStorm.
 * User: DIVYANSHU
 * Date: 01-09-2018
 * Time: 02:17
 */

if (count($route) < 2) {
    require_once TEMPLATE_PATH . '/2019/home.php';
    exit();
}

switch ('/' . $route[1]) {
    case '/':
        require_once TEMPLATE_PATH . '/2019/home.php';
        break;

    case '/conference-tracks':
        $title = TITLE . ' | Conference Track';
        require_once TEMPLATE_PATH . '/2019/conference_track.php';
        break;

    case '/sliet-longowal':
        $title = TITLE . ' | About SLIET';
        require_once TEMPLATE_PATH . '/2019/about/sliet.php';
        break;

    case '/call-for-paper':
        $title = TITLE . ' | Call for Paper';
        require_once TEMPLATE_PATH . '/2019/call-for-paper.php';
        break;

    case '/program-schedule':
        $title = TITLE . ' | Program Schedule';
        require_once TEMPLATE_PATH . '/2019/program-schedule.php';
        break;

    case '/venue':
        $title = TITLE . ' | Venue';
        require_once TEMPLATE_PATH . '/2019/venue.php';
        break;

    case '/registration':
        $title = TITLE . ' | Registration';
        require_once TEMPLATE_PATH . '/2019/registration.php';
        break;

    case '/committee':
        $title = TITLE . ' | Committee';
        require_once TEMPLATE_PATH . '/2019/committee.php';
        break;

    case '/sponsorship':
        $title = TITLE . ' | Sponsorship';
        require_once TEMPLATE_PATH . '/2019/sponsorship.php';
        break;

    case '/dates':
        $title = TITLE . ' | Important Dates';
        require_once TEMPLATE_PATH . '/2019/dates.php';
        break;

    case '/brochure':
        $title = TITLE . ' | Brochure';
        require_once TEMPLATE_PATH . '/2019/brochure.php';
        break;

    case '/sliet-at-a-glance':
        $title = TITLE . ' | SLIET at a Glance';
        require_once TEMPLATE_PATH . '/2019/sliet_glance.php';
        break;

    case '/accommodation':
        $title = TITLE . ' | Accommodation ';
        require_once TEMPLATE_PATH . '/2019/accommodation.php';
        break;

    case '/publication':
        $title = TITLE . ' | Publication';
        require_once TEMPLATE_PATH . '/2019/publication.php';
        break;
    case '/contact-us':
        $title = TITLE . ' | Contact Us';
        require_once TEMPLATE_PATH . '/2019/contact.php';
        break;
    case '/paper-submission':
        $title = TITLE . ' | Paper Submission';
        require_once TEMPLATE_PATH . '/2019/paper-submission.php';
        break;
    case '/instructions-for-oral-paper-poster-presentation':
    case '/instructions':
        $title = TITLE . ' | Instructions for Oral Paper and Poster Presentation';
        require_once TEMPLATE_PATH . '/2019/instruction-oral-paper.php';
        break;


    case '/register':
        $title = TITLE . ' | Contact Us';
        require_once TEMPLATE_PATH . '/2019/register.php';
        break;


    case '/about':
        if (count($route) < 3) {
            $title = TITLE . ' | About Conference';
            require_once TEMPLATE_PATH . '/2019/about/slietcon.php';
            break;
        }
        switch ('/' . $route[2]) {
            case '/chemical-department':
                $title = 'Department of Chemical Engineering';
                require_once TEMPLATE_PATH . '/2019/about/chemical.php';
                break;
            case '/computer-department':
                $title = 'Department of Computer Science & Engineering';
                require_once TEMPLATE_PATH . '/2019/about/computer.php';
                break;
            case '/electonics-communication-department':
                $title = 'Department of Electronics and Communication';
                require_once TEMPLATE_PATH . '/2019/about/electoronics.php';
                break;
            case '/food-department':
                $title = 'Department of Food Engineering and Technology';
                require_once TEMPLATE_PATH . '/2019/about/food.php';
                break;
            case '/electrical-instrumentation-department':
                $title = 'Department of Electrical and Instrumentation Engineering';
                require_once TEMPLATE_PATH . '/2019/about/instrumentataion.php';
                break;
            default:
                break;
        }
        break;
    default:
        break;
}