<section class="mh-auto">
    <div class="heading">
        <div class="container px-0">
            <h5 class="font-weight-bold p-3">Locate Us</h5>
        </div>
    </div>
    <div class="container pt-3">
        <div class="row">
            <!--            <div class="col-12 col-sm-6 offset-sm-3 mb-4">-->
            <!--                <a href="">-->
            <!--                    <img src="../../assets/images/slietmap.png" alt="" style="width: 100%">-->
            <!--                </a>-->
            <!--            </div>-->
            <div class="col-12 col-sm-6 offset-sm-3 mb-4" style="height: 300px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6895.382886269833!2d75.6992841416302!3d30.217352885519414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1570898869641!5m2!1sen!2sin"
                        frameborder="0" style="border:0; width: 100%; height: 100%" allowfullscreen=""></iframe>
            </div>

            <div class="col-12"></div>
            <div class="col-12 text-center">
                <dl>
                    <dd>
                        Sant Longowal Instute of Engineering and Technology, Longowal, Sangrur, Punjab (INDIA) - 148 106
                    </dd>
                </dl>
                <hr style="max-width: 500px; background-color: #005cbf;">
                <dl>
                    <dd>
                        Though the weather in SLIET Longowal normally remains
                        pleasant at the end of the month of February
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</section>

<script>
    // Initialize and add the map
    function initMap() {
        var uluru = {lat: -25.344, lng: 131.036};
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: uluru});
        var marker = new google.maps.Marker({position: uluru, map: map});
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlKZOpoF-uITMiE2ZR3B-tPbD_K1qNq-0&callback=initMap">
</script>