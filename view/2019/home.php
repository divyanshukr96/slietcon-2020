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

include_once 'header.php';
?>


    <div class="parallax conf-img text-center text-white">
        <div class="parallax-inner">
            <div class="container content">
                <div class="content-inner">
                    <div class="row text-center">
                        <div class="col-12 px-0">
                            <div class="mx-auto logo p-0">
                                <img src="../assets/images/logo_wht.png" alt="SLIET logo">
                            </div>
                        </div>
                        <div class="col-12 py-4 mx-0 px-0">
                            <h1 class="event-name title"> SLIETCON - 2019</h1>
                            <h3 class="mt-md-3 event-date">A Multi-track National Conference</h3>
                            <h4 class="mt-md-3 text-shadow">March 1 - 2, 2019</h4>
                            <h3 class="mt-md-3 event-date">Under TEQIP - III (Twinning Program) </h3>
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
                Sant Longowal Institute of Engineering and Technology (SLIET) is an autonomous body (Deemed-to-be-
                University) which has been set up by MHRD, Government of India, with an aim to achieve technological
                excellence through innovation. It caters to the technical manpower requirements at various levels by
                adopting a new concept of modular system in imparting technical education with emphasis on practical
                training in industry. It offers the Integrated Certificate Diploma (ICD), B.E., M.Tech., M.Sc., MBA and
                Ph.D. in various disciplines of Science, Management, Engineering and Technology. SLIET shall strive to
                act as an international podium for the development and transfer of technical competence in academics
                through formal and non formal education, entrepreneurship and research to meet the changing needs of
                society. The institute has a sprawling area of 447 acres of land. The campus of the institute extends a
                beautiful and well developed lush green area with many topographically featured picturesque landscapes,
                numerous buildings of various nature and stature and metal road network. The campus presents a spectacle
                of harmony and natural ecosystem. The institute is situated at the outskirts of Longowal and is around 8
                km from Sangrur-Barnala Highway. The Institute is connected by road with Sangrur (18 km), Barnala (25
                km), Patiala (75 km), Ludhiana (100 km), Chandigarh (150 km) and Delhi (360 km). The nearest railway
                stations are Sangrur (18 km), Sunam (16 km) and Dhuri (32 km) and the nearest airport is Chandigarh (130
                km).
            </p>
        </div>
    </div>


    <div class="bg-light text-justify" id="about-slietcon">
        <h4 class="heading py-3 text-center font-weight-bold">SLIETCON - 2019 </h4>
        <div class="container py-3">
            <p class="px-4">
                SLIETCON-2019, A Multi-Track National Conference of Sant Longowal Institute of Engineering and
                Technology (SLIET), Longowal will be held during March 1-2, 2019 at National Institute of Technical
                Teachers Training and Research, Chandigarh. The technical extravaganza SLIET continues to encourage
                academic activities to help students as well as teachers to continuously develop their skills to meet
                the demands of the present society. SLIETCON-2019 brings together the Engineers, Technologist, Delegates
                from Industry, Researchers, Students and Scientists to discuss current trends and future developments in
                the field of Electronics and Communication Engineering, Food Engineering and Technology, Chemical
                Engineering, Computer Science and Engineering, and Electrical and Instrumentation Engineering.
            </p>
            <div class="col-12 px-4">
                <dl>
                    <dt class="h5 font-weight-bold">Venue</dt>
                    <dt> National Institute of Technical Teachers Training and Research (NITTTR)</dt>
                    <dt>Sector 26, Chandigarh - 160019 India</dt>
                </dl>
                <dl>
                    <dt>WHEN</dt>
                    <dd>March 1 - 2, 2019</dd>
                </dl>
            </div>
        </div>
    </div>

<?php
include_once 'footer.php';
