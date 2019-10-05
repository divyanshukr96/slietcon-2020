<?php
/**
 * Created by PhpStorm.
 * User: DIVYANSHU
 * Date: 07-11-2018
 * Time: 02:53
 */


$title = TITLE . " | AME - 2020";
if (count($route) < 2) {
    require_once TEMPLATE_PATH . '/ame/home.php';
} else {
    switch ($route[1]) {
        case '/':
        case '':
            require_once TEMPLATE_PATH . '/ame/home.php';
            break;
        case 'conference-tracks':
            $title = TITLE . ' | Conference Track';
            require_once TEMPLATE_PATH . '/ame/conference_track.php';
            break;
        case 'call-for-paper':
//        $title = TITLE.' | Conference Track';
            require_once TEMPLATE_PATH . '/ame/call-for-paper.php';
            break;
        case 'dates':
            $title = TITLE . ' | Important Dates';
            require_once TEMPLATE_PATH . '/ame/dates.php';
            break;
        case 'program-schedule':
            $title = TITLE . ' | Program Schedule';
            require_once TEMPLATE_PATH . '/ame/program-schedule.php';
            break;
        case 'venue':
            $title = TITLE . ' | Venue';
            require_once TEMPLATE_PATH . '/ame/venue.php';
            break;
        case 'registration':
            $title = TITLE . ' | Registration';
            require_once TEMPLATE_PATH . '/ame/registration.php';
            break;
        case 'sponsorship':
            $title = TITLE . ' | Sponsorship';
            require_once TEMPLATE_PATH . '/ame/sponsorship.php';
            break;

        case 'brochure':
            $title = TITLE . ' | Brochure';
            require_once TEMPLATE_PATH . '/ame/brochure.php';
            break;
        case 'publication':
            $title = TITLE . ' | Publication';
            require_once TEMPLATE_PATH . '/ame/publication.php';
            break;
        case 'accommodation':
            $title = TITLE . ' | Accommodation ';
            require_once TEMPLATE_PATH . '/ame/accommodation.php';  // have to update
            break;
        case 'contact-us':
            $title = TITLE . ' | Contact Us';
            require_once TEMPLATE_PATH . '/ame/contact.php';
            break;

        case 'committee':
            $title = TITLE . ' | Committee';
            require_once TEMPLATE_PATH . '/ame/committee.php';
            break;
        case 'paper-submission':
            $title = TITLE . ' | Paper Submission';
            require_once TEMPLATE_PATH . '/ame/paper-submission.php';
            break;


        case 'glimpse-of-sliet':
            $title = TITLE . ' | Glimpse of SLIET';
            require_once TEMPLATE_PATH . '/ame/glimpse-of-sliet.php';
            break;
        case 'places-to-visit':
            $title = TITLE . ' | Glimpse of SLIET';
            require_once TEMPLATE_PATH . '/ame/places-to-visit.php';
            break;
        case 'locate-us':
            $title = TITLE . ' | Locate Us';
            require_once TEMPLATE_PATH . '/ame/locate-us.php';
            break;

        case 'sliet-longowal':
//        $title = TITLE.' | Conference Track';
            require_once TEMPLATE_PATH . '/about/sliet.php';
            break;
        case 'about':
            $title = TITLE . ' | About';
            require_once TEMPLATE_PATH . '/about/slietcon.php';
            break;



//        case 'instructions-for-oral-paper-poster-presentation':
//        case 'instructions':
//            $title = TITLE . ' | Instructions for Oral Paper and Poster Presentation';
//            require_once TEMPLATE_PATH . '/ame/instruction-oral-paper.php';
//            break;


    }
}

