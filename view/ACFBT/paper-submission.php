<?php
/**
 * Created by PhpStorm.
 * User: DIVYANSHU
 * Date: 24-11-2018
 * Time: 03:15
 */

require_once TEMPLATE_PATH . '/acfbt/header.php';
?>


    <section class="mh-auto">
        <div class="heading">
            <div class="container">
                <h5 class="font-weight-bold py-3">Paper Submission</h5>
            </div>
        </div>
        <div class="container my-md-5 py-md-5">

            <div class="row">
                <div class="col-12 text-center mb-3">
                    <h4><a href="#" class="text-info">You are redirecting to EasyChair management system . . .</a></h4>
                    <h6>Please wait up to <span id="time">5</span> seconds . . . or
                        <a href="https://easychair.org/conferences/?conf=slietcon2019">click here</a></h6>
                </div>
                <div class="col-12 text-center my-4">
                    <a href="/assets/SLIETCON%20Brochure.pdf" class="btn btn-info m-2">Download Brochure</a>
                    <a href="/assets/Template%20for%20extended%20abstract%20(SLIETCON-19).docx"
                       class="btn btn-info m-2">Download paper template</a>
                </div>
                <div class="col-12 col-md-6">
                    <iframe src="https://docs.google.com/viewer?url=http://www.slietcon.org/assets/SLIETCON Brochure.pdf&embedded=true"
                            frameborder="0" height="500px" width="100%"></iframe>
                </div>
                <div class="col-12 col-md-6">
                    <iframe src="https://docs.google.com/viewer?url=https://slietcon.org/assets/Template%20for%20extended%20abstract%20(SLIETCON-19).docx&embedded=true"
                            frameborder="0" height="500px" width="100%"></iframe>
                </div>

            </div>

        </div>
    </section>


    <script>
        document.addEventListener('readystatechange', () => {
            if (document.readyState === "complete") {
                let interval = window.setInterval(function () {
                    let value = document.getElementById('time');
                    document.getElementById('time').innerText = value.innerText - 1;
                    if (value.innerText < 1) {
                        clearInterval(interval)
                    }
                }, 1000)
                // window.setTimeout(function () {
                //     window.location.href = "https://easychair.org/conferences/?conf=slietcon2019";
                // }, 7000);
            }
        });
    </script>
<?php
require_once TEMPLATE_PATH . '/footer.php';

