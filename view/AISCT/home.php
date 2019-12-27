<?php
/**
 * Created by PhpStorm.
 * User: DIVYANSHU
 * Date: 07-11-2018
 * Time: 03:09
 */

$toggle = '"data:image/svg+xml;charset=utf8,%3Csvg viewBox=\'0 0 30 30\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath stroke=\'rgba(255, 255, 255, 0.5)\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-miterlimit=\'10\' d=\'M4 7h22M4 15h22M4 23h22\'/%3E%3C/svg%3E"';
$css = "<style>
.transparent{ background: transparent !important;}
.transparent.navbar-light .navbar-nav .nav-link, .transparent.navbar-light .navbar-brand {
    color: white;
}
.transparent.navbar-light .navbar-toggler-icon {
    background-image: url({$toggle});
}
#clear-navbar{ display: none;}
</style>";

include_once TEMPLATE_PATH . '/aisct/header.php';
?>

    <div class="parallax conf-img text-center text-white">
        <div class="parallax-inner">
            <div class="container content">
                <div class="content-inner">
                    <div class="row text-center">
                        <div class="col-12 px-0 mb-4">
                            <div class="mx-auto p-0 mb-1">
                                <img src="../../assets/images/logo_wht_new.png" alt="SLIET logo"
                                     style="max-width: 100%;">
                            </div>

                            <div class="mx-auto logo p-0">
                                <img src="../../assets/images/SLIET Logo 1.png" alt="SLIET logo">
                            </div>
                        </div>
                        <div class="col-12 py-1 mx-0 px-0">
                            <h1 class="event-name title" title="SLIET International Conference - 2020">
                                SLIET-I-CON - 2020
                            </h1>
                            <h3 class="mt-md-1 event-date">International conference on
                                <br>Advances in Soft Computing Techniques
                            </h3>
                            <h4 class="mt-md-2 text-shadow">Sep 2 - 5, 2020</h4>
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
                needs of society. The institute has a sprawling area of 445 acres of land. The campus of the institute
                extends a beautiful and well developed lush green area with many topographically featured picturesque
                landscapes, numerous buildings of various nature and stature and metal road network. The campus presents
                a spectacle of harmony and natural ecosystem. The institute is situated at the outskirts of Longowal and
                is around 8 km from Sangrur-Barnala Highway. The Institute is connected by road with Sangrur (18 km),
                Barnala (25 km), Patiala (75 km), Ludhiana (100 km), Chandigarh (150 km) and Delhi (270 km). The nearest
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
                SLIET-I-CON-2020, a Multi-Track International Conference to be held during September 2-5, 2020 is a
                prestigious event organized by <strong>Sant Longowal Institute of Engineering and Technology (SLIET),
                    Longowal </strong> with a motivation to provide an excellent international platform to encourage
                academic activities to help students as well as teachers to continuously develop their skills to meet
                the demands of the present society. SLIET-I-CON-2020 will bring together the, Academicians, Engineers,
                Technologist, Delegates from Industry, Researchers, budding Students and Scientists to discuss current
                trends and future developments in the field of Mechanical Engineering, Electronics and Communication
                Engineering, Food Engineering and Technology, Chemical Engineering, Computer Science and Engineering,
                and Electrical and Instrumentation Engineering. Three International Conferences under the umbrella of
                SLIET-I-CON-2020 will be organised. the Department of Mechanical Engineering is the organizer of
                International conference on “Advances in Mechanical Engineering (AME-2020)” under Track-I. An
                International Conference on “Advances in Soft Computing Techniques (AISCT-2020)” (Track II) will be
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
                    <dd>September 2 - 5, 2020</dd>
                </dl>
            </div>
        </div>
    </div>


<?php
include_once TEMPLATE_PATH . '/footer.php';
