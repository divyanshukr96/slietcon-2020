<?php
/**
 * Created by PhpStorm.
 * User: DIVYANSHU
 * Date: 07-11-2018
 * Time: 03:09
 */

$toggle = '"';


?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
              integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
              crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://unpkg.com/popper.js@1.14.5/dist/umd/popper.min.js"></script>
        <link rel="stylesheet" href="../../assets/css/layout.css">
        <link rel="stylesheet" href="../../assets/css/simple-sidebar.css">
        <link rel="icon" type="image/png" href="../../assets/images/SLIET-logo-black.png"/>
        <?php
        if (empty($title)) {
            $title = $TITLE;
        }
        ?>
        <title><?= $title ?></title>

        <style>
            .transparent {
                background: transparent !important;
            }

            .transparent.navbar-light .navbar-nav .nav-link, .transparent.navbar-light .navbar-brand {
                color: white;
            }

            .transparent.navbar-light .navbar-toggler-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox= '0 0 30 30' xmlns= 'http://www.w3.org/2000/svg' %3E%3Cpath stroke= 'rgba(255, 255, 255, 0.5)' stroke-width= '2' stroke-linecap= 'round' stroke-miterlimit= '10' d= 'M4 7h22M4 15h22M4 23h22' /%3E%3C/svg%3E ");
            }

            #clear-navbar {
                display: none;
            }
        </style>

    </head>
    <body class="bg-light">


    <div class="parallax conf-img text-center text-white">
        <div class="parallax-inner">
            <div class="container content">
                <div class="content-inner">
                    <div class="row text-center">
                        <div class="col-12 px-0 mb-4">
                            <div class="mx-auto logo p-0">
                                <img src="../../assets/images/logo_wht.png" alt="SLIET logo">
                            </div>
                        </div>
                        <div class="col-12 py-1 mx-0 px-0">
                            <h1 class="event-name title" title="SLIET International Conference - 2020">
                                SLIET-I-CON - 2020
                            </h1>
                            <h3 class="mt-md-1 event-date">A Multi-track International Conference</h3>
                            <h4 class="mt-md-2 text-shadow">Feb 26 - 29, 2020</h4>
                            <h3 class="mt-md-2 event-date">Under TEQIP - III (Twinning Program) </h3>
                        </div>
                        <div class="col-12 py-2 mx-0 px-0 mt-2 in-association">
                            <h5 class="font-italic text-warning font-weight-bold" style="font-size: initial">in association with</h5>
                            <img src="../../assets/images/nit-uttarakhand-logo.png" alt="NIT, Uttarakhand">
                            <h2 class="mt-md-31 mb-0 event-date">National Institute of Technology</h2>
                            <h4 class="mt-md-31 text-shadow">Uttarakhand- 246174, INDIA</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light" id="sliet">
        <h4 class="heading py-3 text-center font-weight-bold">SLIET, Longowal </h4>
        <div class="container text-justify py-3">
            <p class="px-4">
                Sant Longowal Institute of Engineering and Technology (SLIET) is a centrally funded technical Institute
                (Deemed-to-be- University) which has been set up by MHRD, Government of India, with an aim to achieve
                technological excellence through innovation. It caters to the technical manpower requirements at various
                levels by adopting a new concept of modular system in imparting technical education with emphasis on
                practical training in industry. It offers the Integrated Certificate Diploma (ICD), B.E., M.Tech.,
                M.Sc., MBA and Ph.D. in various disciplines of Science, Management, Engineering and Technology. SLIET
                shall strive to act as an international podium for the development and transfer of technical competence
                in academics through formal and non formal education, entrepreneurship and research to meet the changing
                needs of society. The institute has a sprawling area of 447 acres of land. The campus of the institute
                extends a beautiful and well developed lush green area with many topographically featured picturesque
                landscapes, numerous buildings of various nature and stature and metal road network. The campus presents
                a spectacle of harmony and natural ecosystem. The institute is situated at the outskirts of Longowal and
                is around 8 km from Sangrur-Barnala Highway. The Institute is connected by road with Sangrur (18 km),
                Barnala (25 km), Patiala (75 km), Ludhiana (100 km), Chandigarh (150 km) and Delhi (360 km). The nearest
                railway stations are Sangrur (18 km), Sunam (16 km) and Dhuri (32 km) and the nearest airport is
                Chandigarh (130 km).
            </p>
        </div>
    </div>

    <div class="bg-light text-justify" id="about-slieticon">
        <h4 class="heading py-3 text-center font-weight-bold" title="SLIET International Conference - 2020">
            About SLIET-I-CON - 2020
        </h4>
        <div class="container py-3">
            <p class="px-4">
                SLIET-I-CON-2020, a Multi-Track International Conference to be held during February 26-29, 2020 is a
                prestigious event organized by <strong>Sant Longowal Institute of Engineering and Technology (SLIET),
                    Longowal </strong> with a motivation to provide an excellent international platform to encourage
                academic activities to help students as well as teachers to continuously develop their skills to meet
                the demands of the present society. SLIET-I-CON-2020 will bring together the, Academicians, Engineers,
                Technologist, Delegates from Industry, Researchers, budding Students and Scientists to discuss current
                trends and future developments in the field of Mechanical Engineering, Electronics and Communication
                Engineering, Food Engineering and Technology, Chemical Engineering, Computer Science and Engineering,
                and Electrical and Instrumentation Engineering. Three International Conferences under the umbrella of
                SLIET-I-CON-2020 will be organised. the Department of Mechanical Engineering is the organizer of
                International conference on “Advances in Mechanical Engineering (AME- 2020)” under Track-I. An
                International Conference on “Advances in Soft Computing Techniques (AISCT2020)” (Track II) will be
                jointly organized by Department of Electrical and Instrumentation Engineering, Computer Science and
                Engineering, Electronics and Communication Engineering. Department of Chemical Engineering and
                Department of Food Engineering and Technology will jointly host the International Conference on
                “Advances in Chemical, Food and Bioprocess Technology (ACFBT-2020)” under Track III.
            </p>
            <div class="col-12 px-4">
                <dl>
                    <dt class="h5 font-weight-bold">Venue</dt>
                    <dt> Sant Longowal Institute of Engineering and Technology</dt>
                    <dt>Longowal, Sangrur, Punjab - 148106, India</dt>
                </dl>
                <dl>
                    <dt>WHEN</dt>
                    <dd>February 26 - 29, 2020</dd>
                </dl>
            </div>
        </div>
    </div>

    <div class="bg-light text-justify" id="conference-track">
        <h4 class="heading py-3 text-center font-weight-bold" title="SLIET International Conference - 2020">
            Conference Tracks
        </h4>
        <div class="container py-3">
            <p class="px-4">
                Technical sessions will focus on the theme of the three International Conferences under the
                umbrella
                of
                SLIET-I-CON-2020 and the following broad themes will be covered with interaction through plenary
                sessions,
                invited lectures, paper presentations and poster sessions. There will be three best paper awards
                each in
                oral and poster presentations in each session. Authors are invited to submit their original,
                unpublished
                and
                quality research papers in the areas (but not limited to) of new developments. The following
                topics,
                but
                not
                limited to are to be covered:
            </p>
            <div class="col-12 px-4">
                <dl>
                    <dt>
                        <a href="AME">
                            Track I: International conference on “Advances in Mechanical Engineering” (AME-2020)
                        </a>
                    </dt>
                </dl>
                <dl>
                    <dt>
                        <a href="AISCT">
                            Track II: International Conference on “Advances in Soft Computing Techniques” (AISCT-2020)
                        </a>
                    </dt>
                </dl>
                <dl>
                    <dt>
                        <a href="ACFBT">
                            Track III: International Conference on “Advances in Chemical, Food and Bio-process
                            Technology” (ACFBT-2020)
                        </a>
                    </dt>
                </dl>

            </div>
        </div>
    </div>

    <div class="bg-light text-justify" id="conference-track">
        <h5 class="heading py-2 text-center" title="SLIET International Conference - 2020">
            Previous Conference
        </h5>
        <div class="container py-3">
            <div class="col-12 px-4">
                <dl>
                    <dt>
                        <a href="2019">
                            SLIETCON – 2019 (A Multi-track National Conference on March 1 – 2, 2019 under TEQIP – III (Twinning Program))
                        </a>
                    </dt>
                </dl>
            </div>
        </div>
    </div>

<?php
include_once 'footer.php';
